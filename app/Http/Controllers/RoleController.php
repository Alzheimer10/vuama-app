<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
use App\Role;
use Validator;
class RoleController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }
    
    //formulario para cambiar el rol de los admins
    public function getRolesForm(){
        return view('admin/users/roles');
    }
    
     //buscar roles para asignar a un admin
    public function postSearchRoles(Request $request){
     if($request->ajax()){
        $admin = Admin::with('roles')->findOrFail($request->input('id'));
        $html = '';
        foreach(Role::all() as $key => $rol){
            if(count($admin->roles) > 0){
                foreach($admin->roles as $rolAd){
                    $html .= '<div class="form-check">
                                <input type="checkbox" class="form-check-input" '.($rolAd->id == $rol->id ? 'checked' : '').' name="roles[]" value="'.$rol->id.'" id="check'.$key.'">
                                <label class="form-check-label" for="check'.$key.'">'.$rol->description.'</label>
                              </div>';    
                }

            }else{
                $html .= '<div class="form-check">
                                <input type="checkbox" class="form-check-input"  value="'.$rol->id.'" name="roles[]" id="check'.$key.'">
                                <label class="form-check-label" for="check'.$key.'">'.$rol->description.'</label>
                              </div>';    
            }
        }
        return $html;

     }else{
         abort(404);
     }
    }
    
    //buscar rol autcomplete
    public function postSearchRole(Request $request){
        if($request->ajax()){
            $roles = Role::where('description','like','%'.$request->input('phrase').'%')
                        ->get();
        $a = [];
        foreach($roles as $role){
            $a[]=(object) ['nombre'=>$role->description,'id'=>$role->id,'email'=>''];
        }
        
        return $a;    
        }else{
            abort(404);
        }
        
    }
    
    //guardar los roles de un admin
    public function postRolesForm(Request $request){
        if($request->ajax()){
            $rules = [
                'id' => 'required|numeric|exists:admins,id',
                'roles' => 'required|array'
            ];

            $validator = Validator::make($request->all(),$rules);

            if($validator->fails()){
                 return response()->json(['error'=>$validator->errors()->first(),'type'=>0]);
            }else{
                $admin = Admin::with('roles')->findOrFail($request->id);
                   $admin->roles()->sync($request->input('roles'));

                return response()->json(['success'=>'Se Cambiaron los Roles','type'=>1]);
            }
        }else{
            abort(404);
        }
    }
}
