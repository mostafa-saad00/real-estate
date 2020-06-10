<?php

/* Home Page and Auth Routes */
	Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes();
/* End Home Page and Auth Routes */


/* Admin Routes */
	Route::get('/admin', 'AdminsController@index')->name('dashboard');
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	Route::get('/properties-list', 'AdminPropertiesController@index')->name('admin_properties_list');//properties route
	Route::get('/add-property', 'AdminPropertiesController@create')->name('admin_add_property');//properties route
	Route::post('/add-property', 'AdminPropertiesController@store')->name('admin_store_property');//properties route
	Route::get('/properties-list/{property}', 'AdminPropertiesController@edit')->name('admin_show_property');//properties route
	Route::put('/properties-list/{property}', 'AdminPropertiesController@update')->name('admin_update_property');//properties route
	Route::delete('/properties-list/{property}', 'AdminPropertiesController@destroy')->name('admin_destroy_property');//properties route
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	Route::get('/main-image/{property}', 'AdminPropertiesImagesController@create')->name('admin_properties_images_create');//images route
	Route::post('/main-image/{property}', 'AdminPropertiesImagesController@store')->name('admin_properties_images_store');//images route
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	Route::get('/managers-list', 'AdminManagersController@index')->name('admin_managers_list');//managers route
	Route::get('/add-manager', 'AdminManagersController@create')->name('admin_add_manager');//managers route
	Route::delete('/managers-list/{user}', 'AdminManagersController@destroy')->name('admin_destroy_manager');//managers route
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	Route::get('/edit-pages/home', 'AdminSinglepageController@home')->name('edit_home');//edit pages route
	Route::put('/edit-pages/home', 'AdminSinglepageController@update_home')->name('update_home');//edit pages route
	Route::get('/edit-pages/contact-info', 'AdminSinglepageController@contact_info')->name('edit_contact_info');//edit pages route
	Route::put('/edit-pages/contact-info', 'AdminSinglepageController@update_contact_info')->name('update_contact_info');//edit pages route
	Route::get('/edit-pages/about-us', 'AdminSinglepageController@about_us')->name('edit_about_us');//edit pages route
	Route::put('/edit-pages/about-us', 'AdminSinglepageController@update_about_us')->name('update_about_us');//edit pages route
	Route::get('/edit-pages/faq', 'AdminSinglepageController@faq')->name('edit_faq');//edit pages route
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	Route::get('/reports-list', 'AdminReportsController@index')->name('admin_reports_list');//reports route
/* End Admin Routes */

/* Properties Routes */
	Route::get('/find_property', 'PropertiesController@index');
	Route::get('/property/{property}', 'PropertiesController@show');
/* End Properties Routes */



/* Has single Page */
	Route::get('/about-us', 'SinglepageController@about_us');
	Route::get('/faq', 'SinglepageController@faq');
/* End Has Single Page */

/* Contact-Us Controller */
	Route::get('/contact-us', 'ContactsController@index');
	Route::post('/contact-us', 'ContactsController@store');
/* End Contact-Us Controller */

Route::get('/search', 'PropertiesController@search');



// Route::get('/add-realestates', 'RealestatesController@index');
// Route::post('/add-realestates', 'RealestatesController@store');



// Route::post('/add_tour/{realestate}', 'PropertiesController@add_tour');

// /* Admin Controller */


// Route::get('/properties', 'AdminController@index_properties');

// Route::get('/add_property', 'AdminController@add_property');



// /* End Admin Controller */

// Route::get('/add-realestates', 'RealestatesController@index');
// Route::post('/add-realestates', 'RealestatesController@store');






