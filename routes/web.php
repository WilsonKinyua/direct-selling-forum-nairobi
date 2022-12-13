<?php


// public
Route::get('/', 'PublicController@index')->name('index');
Route::group(['prefix' => 'discover-nairobi', 'as' => 'discover.'], function () {
    Route::get('/', 'PublicController@discoverNairobi')->name('nairobi');
    Route::get('sightseeing', 'PublicController@sightseeing')->name('sightseeing');
    Route::get('restaurants', 'PublicController@restaurants')->name('restaurants');
    Route::get('shopping', 'PublicController@shopping')->name('shopping');
});

// private
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Contact Us
    Route::delete('contact-uss/destroy', 'ContactUsController@massDestroy')->name('contact-uss.massDestroy');
    Route::resource('contact-uss', 'ContactUsController', ['except' => ['create', 'store', 'edit', 'update']]);

    // Speakers
    Route::delete('speakers/destroy', 'SpeakersController@massDestroy')->name('speakers.massDestroy');
    Route::post('speakers/media', 'SpeakersController@storeMedia')->name('speakers.storeMedia');
    Route::post('speakers/ckmedia', 'SpeakersController@storeCKEditorImages')->name('speakers.storeCKEditorImages');
    Route::resource('speakers', 'SpeakersController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
