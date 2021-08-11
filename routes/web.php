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
    return view('auth.login');
});
//////////////////////// display topic for admin  ////////////
Route::get('a_display','admin\adminController@index')->name('a_display');
Route::get('a_display1','admin\adminController@index1')->name('a_display1');
Route::get('a_display2','admin\adminController@index2')->name('a_display2');


//////////////////////// display topic for corrector  ////////////
Route::get('c_display','corrector\c_displayController@index')->name('c_display');
//////////////////////// display topic in box for corrector  ////////////
Route::get('c_display1','corrector\c_display1Controller@index')->name('c_display1');
//////////////// الاختيار من قبل المصحح  ////////////////
Route::get('c_Assept/{id}','corrector\c_AssepController@edit' );

/////////////////////////     عرض المهام الي المصحح ////////////////////////////////////
Route::get('j_mission','corrector\c_missionController@index')->name('j_mission1');
Route::get('j_mission/{id}','corrector\c_missionController@j_mission' )->name('j_mission');
Route::get('editj_mission','corrector\c_missionController@Stort' );
       

/////////////////////////عرض المهام الي المدير///////////
Route::get('a_mission','admin\a_missionController@a_mission')->name('a_mission');



//////////////////////////////////// عرض تفاصيل اكتر الي المصحح  & تعديل وتحويل الي الطباعة   ////////////////////////////////////////////////
Route::get('correct/{id}','corrector\correctController@correct' )->name('correct');
Route::get('c_editAssept/{id}','corrector\correctController@edit' );

////////////////////////////////عرص المرفوض الي المدير/////////////
Route::get('a_regcase','admin\journalistController@index' )->name('a_regcase');
/////////////////      عرض المحفرظات الي الصحفي////////////
Route::get('s_topic','journalist\topicController@index' )->name('s_topic');

Route::get('s_topic1/{id}','journalist\topicController@index1')->name('d_topic');


//////////////////////// display topic for admin  ////////////
Route::get('d_topic','admin\d_topicController@index')->name('d_topic');



//////////////////////// display topic for admin اظهار ثفاصيل اكنر الي المدير  /////////////////////
Route::get('d_display/{id}','admin\d_displayController@index' )->name('d_display');
////////////////الرفض///////////////////
Route::get('regcase/{id}','admin\regcaseController@Stort' )->name('regcase');

////////////////////////عرض المرفوضات الي الصحفي////////
Route::get('j_regcase','journalist\regcaseController@index' )->name('j_regcase');
/////////////////فبول القال من قيل المدير////////////////
Route::get('editAssept/{id}','admin\AssepController@edit' );


////////////////////////القبول بعد التعديل////////////////
Route::get('modfile/{id}','admin\AssepController@modfile' );

Route::get('modfile1/{id}','admin\AssepController@modfile1' )->name('modfile1');


//////////////////////// display topic for secrtary  ////////////
Route::get('s_display','secrtary\secrtaryController@index')->name('s_display');
Route::get('s_display1','secrtary\secrtaryController@index1')->name('s_display1');
Route::get('s_display2','secrtary\secrtaryController@index2')->name('s_display2');


/////////////pdf/////////

Route::get('getpdf/{Id}', 'secrtary\PDFController@getpdf');



////////////main of admin/////////////
Route::get('index', function () {
    return view('admin/index');
});
////////////main of journalist//////
Route::get('j_index','journalist\j_indexController@index' );


  


////////////main of secrtary/////////////
Route::get('s_index','secrtary\s_indexController@index' );


/////////////////view//////////
/////////////////اظهار تفاصيل موظف الي المدير
Route::get('discr_view/{id}','admin\m_view1Controller@index' )->name('a_view');

////////////////// view for admin////////////////
Route::get('a_view/{id}','admin\m_viewController@index' )->name('a_view');
//////////////view for journalist/////////
Route::get('j_view/{id}','journalist\j_viewController@index' )->name('j_view');
///////////////view for corrector//////////
Route::get('c_view/{id}','corrector\c_viewController@index' )->name('c_view');
/////////////////////view for secrtary/////
Route::get('s_view/{id}','secrtary\s_viewController@index' )->name('s_view');
////////////

////////////////arshef//////
//////arshef for corrector//
Route::get('s_arshef','corrector\arshefController@index')->name('s_arshef');


/////////////arshef for journalist//
Route::get('j_arshef','journalist\arshefController@index')->name('s_arshef');




////////////////






//////////////////insert of topicsave for journalist////////
Route::get('topicsave','journalist\journalistController@createtopicsave' )->name('topicsave');
Route::get('topicsaveStort','journalist\journalistController@Stort' )->name('topicsaveStort');
Route::get('topicStort1/{id}','journalist\topicController@Stort1' )->name('topicStort');

//////////////////insert of topic for topic////////
Route::get('topic','journalist\topicController@createtopic' )->name('topic');
Route::get('topicStort','journalist\topicController@Stort' )->name('topicStort');
Route::get('categ','journalist\categController@categ')->name('categ');

///////////////admin//////////
Route::get('admin','adminController@index');


////////////////تسجيل عضو جديد//////////////
Route::get('c_register','admin\adminController@c_admin' );
Route::get('c_register1','admin\adminController@Stort' );



////////////////jointopd///////

Route::get('jointopd','adminController@createjointopd' )->name('jointopd');
Route::get('jointopdStort','adminController@Stort' )->name('jointopdStort');



//////////category////////////
Route::get('category','categoryController@index');
Route::get('Delcategory/{id}','categoryController@distory')->name('Delcategory');
Route::get('createcategory','categoryController@createcategory' )->name('createcategory');
Route::get('categoryStort','categoryController@Stort' )->name('categoryStort');
//////////category1////////////
Route::get('category1','category1Controller@index');
Route::get('Delcategory1/{id}','category1Controller@distory')->name('Delcategory1');
Route::get('createcategory1','category1Controller@createcategory' )->name('createcategory1');
Route::get('category1Stort','category1Controller@Stort' )->name('category1Stort');
////////////m_view////////
Route::get('m_view','m_viewController@index')->name('m_view');
Route::get('editm_view/{id}','m_viewController@edit' );
Route::get('upm_view/{id}','m_viewController@update' );


Route::get('Delm_view/{id}','m_viewController@distory')->name('Delbank'); 
//////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///////////////////edit password admin/////////
Route::get('e_pssword','admin\e_passwordController@index');
Route::get('e_pssword1/{id}', 'admin\e_passwordController@Stort');


//////////////edit password jointopd////////////
Route::get('e_pssword2','journalist\e_passwordController@j_index');
Route::get('e_pssword3/{id}', 'journalist\e_passwordController@j_Stort');


/////////////////edit password corrector //////////

Route::get('e_pssword4','corrector\e_passwordController@c_index');
Route::get('e_pssword5/{id}', 'corrector\e_passwordController@c_Stort');


/////////edit password secrtary////////////

Route::get('e_pssword6','secrtary\e_passwordController@s_index');
Route::get('e_pssword7/{id}', 'secrtary\e_passwordController@s_Stort');


////////////////////