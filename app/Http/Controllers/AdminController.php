<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
Use Validator;
Use Hash;

class AdminController extends Controller
{
     public function __construct(){
      $this->middleware('auth');
    }
    
    //buscar admins para el autocomplete
    public function postSearchAdmins(Request $request){
        if($request->ajax()){
            $admins = Admin::where('name','like','%'.$request->input('phrase').'%')
                        ->orWhere('lastname','like','%'.$request->input('phrase').'%')
                        ->get();
        $a = [];
        foreach($admins as $admin){
            $a[]=(object) ['nombre'=>$admin->name.' '.$admin->lastname,'id'=>$admin->id,'email'=>$admin->email,'username'=>$admin->username,'url'=>url('profile',$admin->id)];
        }
        
        return $a;    
        }else{
            abort(404);
        }
        
    }
    
    public function getAdminForm(){
        return view('admin/users/data');
    }
    
    public function postAdminForm(Request $request){
        if($request->ajax()){
            $rules = [
                'id' => 'required|numeric|exists:admins,id',
                'name' => 'required|string',
                'lname' => 'required|string',  
                'email' => 'required|email|max:191|unique:admins,email,'.$request->input('id'),
                'username' => 'required|string|max:191|unique:admins,username,'.$request->input('id'),
            ];

            $validator = Validator::make($request->all(),$rules);

            if($validator->fails()){
                 return response()->json(['error'=>$validator->errors()->first(),'type'=>0]);
            }else{
                $admin = Admin::findOrFail($request->id);
                
                $admin->name= $request->input('name');
                
                $admin->lastname= $request->input('lname');

                $admin->email= $request->input('email');
                
                $admin->username= $request->input('username');
                if($request->input('reset')=='on'){
                    $admin->password= Hash::make('12345678');
                }

                if($admin->save()){
                    return response()->json(['success'=>'Se Cambiaron los Datos','type'=>1]);
   
                }else{
                    return response()->json(['error'=>'Ocurrió un error, por favor intentelo de nuevo','type'=>0]);
                }                
            }
        }else{
            abort(404);
        }
    }
   
    
    
}
