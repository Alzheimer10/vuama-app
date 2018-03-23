<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('roles','RoleController@getRolesForm');

Route::get('permissions','PermissionController@getPermissionsForm');

Route::get('admins','AdminController@getAdminForm');

Route::post('admins','AdminController@postAdminForm');

Route::post('search/admins','AdminController@postSearchAdmins');

Route::post('search/roles','RoleController@postSearchRoles');

Route::post('search/role','RoleController@postSearchRole');

Route::post('search/permissions','PermissionController@postSearchPermissions');

Route::post('roles','RoleController@postRolesForm');

Route::post('permissions','PermissionController@postPermissionsForm');
