<?php

use Illuminate\Support\Facades\Route;

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

//to open the register page
Route::get('/register', function () 
{
  return view('register');
});
//to open the login page
Route::get('/login', function () {
    return view('login');
});

//to open the panel page
Route::get('/panel', function () {
  return view('panel');
});

//For registration form
Route::post('/register-form',"App\Http\controllers\bcontroller@register");
//For login form
Route::post('/login-form',"App\Http\controllers\bcontroller@login");

//for summary page or main page
Route::get('/summarypage',"App\Http\controllers\bcontroller@summarypage");

//for add page
Route::get('/addpage', function () {
    return view('pageadd');
  });

//for add page form or table
Route::post('/add-page',"App\Http\controllers\bcontroller@addpage");

//for display summarypage
Route::get('/summarypage',"App\Http\controllers\bcontroller@d_summarypage");

//for delete in summarypage
Route::get('delete_data/{id}',"App\Http\controllers\bcontroller@deletedata");

//for search
Route::post('search-record',"App\Http\controllers\bcontroller@search");

//for edit of summarypage
Route::post('edit_form/{id}',"App\Http\controllers\Icontroller@editdata");

//for add category
Route::get('/addcat', function () {
  return view('addcategory');
});

//-----------------for category section---------------
//for add page form or table
Route::post('/add-category',"App\Http\controllers\bcontroller@addcategory");

//for display summarypage
Route::get('/summarycat',"App\Http\controllers\bcontroller@d_summarycat");

//for delete in summarypage
Route::get('c_delete_data/{id}',"App\Http\controllers\bcontroller@c_deletedata");

//for edit of category summary
Route::post('c_edit_form/{id}',"App\Http\controllers\Icontroller@c_editdata");

//-----------------for product section---------------
Route::get('/addproduct', function () {
  return view('productadd');
});
//for add product form or table
Route::post('/add-product',"App\Http\controllers\bcontroller@productadd");

//for display summarypage
Route::get('/summarycat',"App\Http\controllers\bcontroller@d_summarycat");

//for delete in summarypage
Route::get('c_delete_data/{id}',"App\Http\controllers\bcontroller@c_deletedata");

//for edit of category summary
Route::post('c_edit_form/{id}',"App\Http\controllers\Icontroller@c_editdata");


Route::get('/add', function () {
  return view('add');
});

Route::post('/login-form',"App\Http\controllers\bcontroller@login");
Route::get('/page1',"App\Http\controllers\bcontroller@page1");
Route::get('/logout',"App\Http\controllers\bcontroller@logout");

//to open the login page
Route::get('/login', function () {
    return view('login');
});
//to open the panel page
Route::get('/panel', function () {
  return view('panel');
});
Route::get('/addpage', function () {
  return view('pageadd');
});
Route::get('/summary', function () {
  return view('summarypage');
});
Route::get('/page1',"App\Http\controllers\bcontroller@page1");
Route::get('/logout',"App\Http\controllers\bcontroller@logout");