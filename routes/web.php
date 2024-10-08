<?php

use Illuminate\Support\Facades\Route;

function get_contacts(){

    return[
        1 => [ 'id' =>'1',  'name' => 'asef', 'phone' => '1234567'  ],
        2 => [ 'id' =>'2', 'name' => 'fahima', 'phone' => '12345'  ],
        3 => [ 'id' =>'3', 'name' => 'jalil', 'phone' => '123456'  ],
    
    ];



}



Route::get('/', function () {
   return view('welcome');
});


Route::get('/contacts', function(){
    $contacts = get_contacts();
    
    
    return view('contacts.index', compact('contacts'));
})->name('contacts.index');

Route::get('/contacts/create', function(){
    return view('contacts.create');
})->name('contacts.create');


Route::get('/contacts/{id}', function($id){
    $contacts = get_contacts();
    abort_if(!isset($contacts[$id]), 404);
    $contact = $contacts[$id];

    return view('contacts.show')->with('contact' , $contact); 
    
})->name('contacts.show');

Route::get('contacts/companies/{name?}', function($name = null){

    if($name){
        return $name. ' company';
    }
    else{
        return 'all companies';
    }
})->whereAlphaNumeric('name');


Route::get('contacts/e-mail/{name?}', function($nameu = null){

    if($nameu){
        return $nameu. ' emails';
    }
    else{
        return 'all emails';
    }

});

Route::fallback(function(){

    return '<h1>sorry this file is not found</h1>';

});