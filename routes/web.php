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

Route::get('/','PagesController@index')->name('show-products');
Route::get('/show-all-products','PagesController@showAllProducts')->name('all-products');
Route::get('/show-single-products/{id}','PagesController@showSingleProducts')->name('single-products');
Route::get('/search','PagesController@productSearch')->name('product-search');

//Frontend Categories
//Route::get('/category','Frontend\CategoryController@index')->name('categories.index');
Route::get('/category/{id}','FrontCategoryController@show')->name('categories.show');



//Products route
Route::group(['prefix'=>'admin'],function (){
    Route::get('/','AdminPagesController@index')->name('admin.index');
    Route::get('/product/create','AdminPagesController@createProduct')->name('admin.product.create');
    Route::get('/product/edit/{id}','AdminPagesController@editProduct')->name('admin.product.edit');

    Route::post('/product/create','AdminPagesController@productStore')->name('admin.product.store');
    Route::post('/product/edit/{id}','AdminPagesController@productUpdate')->name('admin.product.update');
    Route::get('/product/delete/{id}','AdminPagesController@productDelete')->name('admin.product.delete');

});
//Categories route
Route::group(['prefix'=>'admin'],function (){
    Route::get('/category','CategoryController@showCategory')->name('category.index');
    Route::get('/category/create','CategoryController@createCategory')->name('category.create');
    Route::post('/category/create','CategoryController@categoryStore')->name('category.store');
    Route::get('/category/edit/{id}','CategoryController@editCategory')->name('category.edit');
    Route::post('/category/edit/{id}','CategoryController@updateCategory')->name('category.update');
    Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('category.delete');
});
//Brands route
Route::group(['prefix'=>'admin'],function (){
    Route::get('/brand','brandController@showBrand')->name('brand.index');
    Route::get('/brand/create','brandController@createBrand')->name('brand.create');
    Route::post('/brand/create','brandController@BrandStore')->name('brand.store');
    Route::get('/brand/edit/{id}','brandController@editBrand')->name('brand.edit');
    Route::post('/brand/edit/{id}','brandController@updateBrand')->name('brand.update');
    Route::get('/brand/delete/{id}','brandController@deleteBrand')->name('brand.delete');
});
Route::group(['prefix'=>'admin'],function (){
    Route::get('/division','DivisionController@showDivision')->name('division.index');
    Route::get('/division/create','DivisionController@createDivision')->name('division.create');
    Route::post('/division/create','DivisionController@DivisionStore')->name('division.store');
    Route::get('/division/edit/{id}','DivisionController@editDivision')->name('division.edit');
    Route::post('/division/edit/{id}','DivisionController@updateDivision')->name('division.update');
    Route::get('/division/delete/{id}','DivisionController@deleteDivision')->name('division.delete');
});
Route::group(['prefix'=>'admin'],function (){
    Route::get('/district','DistrictController@showDistrict')->name('district.index');
    Route::get('/district/create','DistrictController@createDistrict')->name('district.create');
    Route::post('/district/create','DistrictController@DistrictStore')->name('district.store');
    Route::get('/district/edit/{id}','DistrictController@editDistrict')->name('district.edit');
    Route::post('/district/edit/{id}','DistrictController@updateDistrict')->name('district.update');
    Route::get('/district/delete/{id}','DistrictController@deleteDistrict')->name('district.delete');
});

//customer registration and login
Route::get('/checkout','CheckoutController@checkout');
Route::post('/checkout/registration','CheckoutController@customerRegistration')->name('customer-registration');
Route::get('/customer-login','CheckoutController@loginFirst')->name('login-customer');
/*Route::post('/login','CheckoutController@loginCustomer');*/
Route::post('/checkout/login','CheckoutController@customerLogin')->name('customer-login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
