
<?php
use App\Hall;

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
Route::get ('/ListHall','HallController@ListHall');

Route::get('/AddHall',"HallController@AddHall");
Route::post('/AddHall',"HallController@AddHall");

Route::get("/AddHall/{Id}","HallController@DeleteHall");

Route::get('/UpdateHall/{Id}',"HallController@UpdateHall");
Route::post('/UpdateHall/{Id}',"HallController@UpdateHall");


Route::get('/HallShow/{id}', 'HallController@ViewHall');

Route::get('/','indexController@index');

Route::get('/about','aboutController@index');

Route::get('/contacts','contactsController@index');

Route::get('/index','indexController@index');

//Route::get('/services','servicesController@index');

Route::get('/team','teamController@index');

Route::post('/sad','contactsController@getcontact');




Route::get('/login','loginController@index');

Route::post('/checklogin','loginController@checklogin');

Route::get('/checklogout','loginController@checklogout');

Route::get('/submit','admin\addspeakercontroller@submit');


Route::get('/speakers','choosespeakerController@index')->middleware('authenticated');   

Route::get('/shownspeakers','shownspeakerController@index')->middleware('authenticated');


//Route::get('/admin/index','admin\indexController@index');
//Route::get('/admin/table','contactsController@getMessages');

Route::get('/admin/index','admin\indexController@index')->middleware('authenticated');
Route::get('/admin/table','contactsController@getMessages')->middleware('authenticated');


Route::get('/admin/event','admin\eventController@index');

Route::get('/act','admin\eventController@addevent');

Route::get('/services','admin\eventController@getevents');



Route::get('/admin/teamMember','admin\teammemberController@index');
Route::post('/admin/add/member','admin\teammemberController@addMember');
Route::get('/admin/get/member/{id}','admin\teammemberController@getMemberById');
//Route::get('/admin/edit/member/{id}','admin\teammemberController@editMember');
Route::post('/admin/edit/member','admin\teammemberController@updateMember');

Route::get('/admin/delete/member/{id}','admin\teammemberController@deleteMemberById');
