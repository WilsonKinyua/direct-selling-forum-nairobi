<?php


// public

use Illuminate\Support\Facades\Auth;

Route::get('/', 'PublicController@index')->name('index');
Route::group(['prefix' => 'discover-nairobi', 'as' => 'discover.'], function () {
    Route::get('/', 'PublicController@discoverNairobi')->name('nairobi');
    Route::get('sightseeing', 'PublicController@sightseeing')->name('sightseeing');
    Route::get('restaurants', 'PublicController@restaurants')->name('restaurants');
    Route::get('shopping', 'PublicController@shopping')->name('shopping');
});
Route::get('about-us', 'PublicController@aboutUs')->name('about-us');
Route::get('program', 'PublicController@program')->name('program');
Route::get('speakers', 'PublicController@speakers')->name('speakers');
Route::get('contact-us', 'PublicController@contactUs')->name('contact-us');
Route::post('contact-us', 'PublicController@createContactUs')->name('contact-us.create');

// private
Route::get('/home', function () {
    // check if user is admin
    if (Auth::user()->roles->pluck('title')->implode('', '') === 'Super Admin' || Auth::user()->roles->pluck('title')->implode('', '') === 'Admin') {
        return redirect()->route('admin.home');
    } else {
        return redirect()->route('user.account');
    }
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth']], function () {
    Route::get('account', 'PublicController@userAccount')->name('account');
    Route::post('account/update', 'PublicController@userAccountUpdate')->name('account.update');
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
    Route::delete('contact-us/destroy', 'ContactUsController@massDestroy')->name('contact-uss.massDestroy');
    Route::resource('contact-us', 'ContactUsController', ['except' => ['create', 'store', 'edit', 'update']]);

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
