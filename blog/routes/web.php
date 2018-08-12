<?php


Route::get('/vertimas',function (){
    session()->put('kalba');//lt
    //Session::put('kalba','lt'); vienas is variantu
    //$req->session()->put(); vienas is sesiju variantu,dar funkcijoje turi buti irasyta (Request $req)

    App::setLocale('lt');
    App::getLocale();
//    return __('vertimas.vertimo_raktas');
    return view('vertimas');
});


//Locale
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale');




//Auth
use Illuminate\Support\Facades\Auth;

Route::get('/login',function(){
    view('login');
});

Route::get('/pamoka',function(){
//    \App\User::create([
//        'name'=>'admin',
//        'email'=>'admin@admin.lt',
//        'password'=>Hash::make('admin'),
//    ]);
    var_dump(Auth::attempt([
        'email'=>'admin@admin.lt',
        'password'=>'admin'
    ],true));
    return "Hello";
})->middleware('pamoka');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





//Login for data editing and etc.
Route::group(['middleware' => 'auth'], function () {
    //GET ALL DATA FOR CARS & OWNERS
    Route::get('/cars', function () {
        $data = \App\Cars::getAllCars();

        return view('cars', ['data'=>$data]);
    })->name('cars');

    Route::get('/owners', function () {
        $data = \App\Owners::getAllOwners();

        return view('owners', ['data'=>$data]);
    })->name('owners');

    // DELETE DATA
    //Route::get('delete-cars','DeleteCarsController@index'); //we dont use
    //Route::get('delete-owners','DeleteOwnersController@index'); //we dont use

    Route::get('delete_car/{id}','DeleteCarsController@destroy');
    Route::get('delete_owner/{id}','DeleteOwnersController@destroy');

// UPDATE DATA
    Route::get('/update/{id}','UpdateCarsController@updateForm')->name('updateForm');
    Route::post('/update/save/{id}','UpdateCarsController@saveForm')->name('saveForm');
    Route::get('/update-owners/{id}','UpdateOwnersController@updateOwnersForm')->name('updateOwnersForm');
    Route::post('/update-owners/save/{id}','UpdateOwnersController@saveOwnersForm')->name('saveUpdatedOwnersForm');

// ADD DATA
    Route::get('/addowner','AddOwnerController@showForm')->name('showOwnerForm');
    Route::post('/addowner/save','AddOwnerController@saveFormData')->name('saveOwnersForm');

    Route::get('/addcar','AddCarController@showOwnersInForm')->name('showOwnersInForm');
    Route::post('/addcar/save','AddCarController@saveCarData')->name('saveCarData');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

});
