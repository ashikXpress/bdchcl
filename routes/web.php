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

Route::get('/', 'frontend\IndexController@index')->name('index');
Route::get('/emp/login', 'frontend\EmpLoginController@getLogin')->name('emp.login');
Route::post('/member/profile/', 'frontend\EmpLoginController@getEmpLogin')->name('emp.login.success');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'backend\DashboardController@index')->name('dashboard');

//Area route
Route::get('/area/list', 'backend\AreaController@index')->name('area.list');
Route::get('/area/add', 'backend\AreaController@create')->name('area.add');
Route::post('/area/create', 'backend\AreaController@store')->name('area.store');
Route::get('/area/edit/{id}', 'backend\AreaController@edit')->name('area.edit');
Route::put('/area/update/{id}', 'backend\AreaController@update')->name('area.update');
Route::delete('/area/delete/{id}', 'backend\AreaController@destroy')->name('area.delete');

//Dealer route
Route::get('/dealer/list', 'backend\DealerController@index')->name('dealer.list');
Route::get('/dealer/add', 'backend\DealerController@create')->name('dealer.add');
Route::post('/dealer/store', 'backend\DealerController@store')->name('dealer.store');
Route::get('/dealer/edit/{id}', 'backend\DealerController@edit')->name('dealer.edit');
Route::put('/dealer/update/{id}', 'backend\DealerController@update')->name('dealer.update');
Route::delete('/dealer/delete/{id}', 'backend\DealerController@destroy')->name('dealer.delete');

//Depo route
Route::get('/depo/list', 'backend\DepoController@index')->name('depo.list');
Route::get('/depo/add', 'backend\DepoController@create')->name('depo.add');
Route::post('/depo/store', 'backend\DepoController@store')->name('depo.store');
Route::get('/depo/edit/{id}', 'backend\DepoController@edit')->name('depo.edit');
Route::put('/depo/update/{id}', 'backend\DepoController@update')->name('depo.update');
Route::delete('/depo/delete/{id}', 'backend\DepoController@destroy')->name('depo.delete');

//Employee route
Route::get('/emp/list', 'backend\EmployeeController@index')->name('emp.list');
Route::get('/emp/add', 'backend\EmployeeController@create')->name('emp.add');
Route::post('/emp/store', 'backend\EmployeeController@store')->name('emp.store');
Route::get('/emp/edit/{id}', 'backend\EmployeeController@edit')->name('emp.edit');
Route::put('/emp/update/{id}', 'backend\EmployeeController@update')->name('emp.update');
Route::delete('/emp/delete/{id}', 'backend\EmployeeController@destroy')->name('emp.delete');

//Key Route
Route::get('/key/list', 'backend\KeyController@index')->name('key.list');
Route::get('/key/create', 'backend\KeyController@create')->name('key.create');
Route::post('/key/save', 'backend\KeyController@store')->name('key.store');
Route::get('/autocomplete', 'backend\KeyController@getKeyById')->name('autocomplete');
Route::get('/searchAjax', 'backend\KeyController@getKeyById')->name('searchAjax');

//Member Route

Route::get('/member/list', 'backend\MemberController@index')->name('member.list');
Route::get('/member/add', 'backend\MemberController@create')->name('member.add');
Route::post('/member/create', 'backend\MemberController@store')->name('member.store');
Route::get('/member/edit/{id}', 'backend\MemberController@edit')->name('member.edit');
Route::put('/member/update/{id}', 'backend\MemberController@update')->name('member.update');
Route::delete('/member/delete/{id}', 'backend\MemberController@destroy')->name('member.delete');

//Departments Route

Route::get('/department/list', 'backend\DepartmentController@index')->name('department.list');
Route::get('/department/add', 'backend\DepartmentController@create')->name('department.add');
Route::post('/department/create', 'backend\DepartmentController@store')->name('department.store');
Route::get('/department/edit/{id}', 'backend\DepartmentController@edit')->name('department.edit');
Route::put('/department/update/{id}', 'backend\DepartmentController@update')->name('department.update');
Route::delete('/department/delete/{id}', 'backend\DepartmentController@destroy')->name('department.delete');

// positions route

Route::get('/position/list', 'backend\PositionController@index')->name('position.list');
Route::get('/position/add', 'backend\PositionController@create')->name('position.add');
Route::post('/position/create', 'backend\PositionController@store')->name('position.store');
Route::get('/position/edit/{id}', 'backend\PositionController@edit')->name('position.edit');
Route::put('/position/update/{id}', 'backend\PositionController@update')->name('position.update');
Route::delete('/position/delete/{id}', 'backend\PositionController@destroy')->name('position.delete');

//team setup route

Route::get('/team/create', 'backend\TeamSetupController@create')->name('team.create');
Route::get('/team/list', 'backend\TeamSetupController@index')->name('team.list');
Route::post('/team/save', 'backend\TeamSetupController@store')->name('team.store');
Route::get('/team/edit/{id}', 'backend\TeamSetupController@edit')->name('team.edit');
Route::put('/team/update/{id}', 'backend\TeamSetupController@update')->name('team.update');
Route::delete('/team/delete/{id}', 'backend\TeamSetupController@destroy')->name('team.delete');

//Sales setup route

Route::get('/sales/create', 'backend\EmployeeSalesController@create')->name('sales.create');
Route::get('/sales/list', 'backend\EmployeeSalesController@index')->name('sales.list');
//Route::post('/sales/save', 'backend\EmployeeSalesController@store')->name('sales.store');
//Route::get('/sales/edit/{id}', 'backend\EmployeeSalesController@edit')->name('sales.edit');
//Route::put('/sales/update/{id}', 'backend\EmployeeSalesController@update')->name('sales.update');
//Route::delete('/sales/delete/{id}', 'backend\EmployeeSalesController@destroy')->name('sales.delete');

Route::get('/member/profile/', 'members\MemberProfileController@index')->name('member.profile');

//Member My Key

Route::get('/member/my_key/', 'members\MyKeyController@index')->name('member.my_key');







