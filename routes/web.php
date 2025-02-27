<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function(){
   $usuarios = User::paginate(5);
return view('home',['usuarios' => $usuarios]);

});
 
Route::get('/sobre', function(){
    return view('sobre');
    
    });
     
Route::get('/contato', function(){
    return view('contato');
    
    });
     
Route::get('/projeto', function(){
    return view('projeto');
    
    });
    Route::get('/login', function(){
       return view('login');
        
      });

        //Route::get('/registe', function(){
           // return view('registe');
            
            //});

