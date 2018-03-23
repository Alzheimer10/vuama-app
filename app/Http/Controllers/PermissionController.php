<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permission;
use App\Role;
use Validator;
class PermissionController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }
    
    public function getPermissionsForm(){
        return view('admin/users/permissions');
    }
    
    //buscar permisos para asignar a un rol
    public function postSearchPermissions(Request $request){
         if($request->ajax()){
            $role = Role::with('permissions')->findOrFail($request->input('id'));
            $html = '';
            foreach(Permission::all() as $key => $per){
                if(count($role->permissions) > 0){
                    foreach($role->permissions as $perRol){
                        $html .= '<div class="form-check">
                                    <input type="checkbox" class="form-check-input" '.($perRol->id == $per->id ? 'checked' : '').' name="permissions[]" value="'.$per->id.'" id="check'.$key.'">
                                    <label class="form-check-label" for="check'.$key.'">'.$per->description.'</label>
                                  </div>';    
                    }

                }else{
                    $html .= '<div class="form-check">
                                    <input type="checkbox" class="form-check-input"  value="'.$per->id.'" name="permissions[]" id="check'.$key.'">
                                    <label class="form-check-label" for="check'.$key.'">'.$per->description.'</label>
                                  </div>';    
                }
            }
            return $html;
     
         }else{
             abort(404);
         }
     }
    
    //guardar los permisos de un rol
    public function postPermissionsForm(Request $request){
        $rules = [
            'id' => 'required|numeric|exists:admins,id',
            'permissions' => 'required|array'
        ];
        
        $validator = Validator::make($request->all(),$rules);
        
        if($validator->fails()){
             return response()->json(['error'=>$validator->errors()->first(),'type'=>0]);
        }else{
            $role = Role::with('permissions')->findOrFail($request->id);
               $role->permissions()->sync($request->input('permissions'));
            
            return response()->json(['success'=>'Se Cambiaron los permisos','type'=>1]);
        }
    }
}
