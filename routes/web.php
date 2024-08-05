<?php

use Illuminate\Support\Facades\Route;


function  getContacts(){
    return  [
        1 =>  ['name'=> "Nkansah", 'phone'=> '0558119187'],
        2 =>  ['name'=> "Rev", 'phone'=> '0558119187'],
        3 =>  ['name'=> "John", 'phone'=> '0558119187']
       ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacts', function () {
    // contacts array
    $contacts = getContacts();



    return view('contacts.index', compact('contacts'));
})->name('contacts.index');

Route::get('contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::get('contacts/{id}', function ($id) {
    
    $contacts = getContacts();
    $contact = $contacts[$id];

    abort_if(!isset($contact), '404');
    return view('contacts.show')->with('contacts', $contact );
})->name('contacts.show');  



Route::fallback(function () {
    return '404 Not Found';
});