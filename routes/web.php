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

Route::get('/template', function () {
    return view('Blog.layout.template');
});

Route::get('/home',function (){
   return view('Blog.home'); 
});

Route::get('/introducion',function (){
   return view('Blog.unidad1.U1T1'); 
});

Route::get('/componente',function (){
   return view('Blog.unidad1.U1T2'); 
});

Route::get('/reparto',function (){
   return view('Blog.unidad2.U2T1'); 
});

Route::get('/multinivel',function (){
   return view('Blog.unidad2.U2T2'); 
});

Route::get('/vcontrol',function (){
   return view('Blog.unidad2.U2T3'); 
});

Route::get('/sockets',function (){
   return view('Blog.unidad2.U2T4'); 
});

Route::get('/transaciones',function (){
   return view('Blog.unidad3.U3T1'); 
});

Route::get('/ACID',function (){
   return view('Blog.unidad3.U3T2'); 
});
