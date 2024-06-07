<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request; //mandatorily used to accept requests

Route::get('/testfunction', function () {
    echo "small test function";
});

Route::get('testview', function(){
    return view('user');
});


Route::view('userpage', 'user');

Route::post('processform', function(Request $req){
echo $req->username." ".$req->useremail;
});

Route::post('getformdata', [FormController::class,'processdata']);




















// Route::get('pdata', [MyController::class,'setdata']);


// Route::get('/user/{age}', function($age){
// if($age<30)
//         echo "Welcome to portal";
// else
//     echo "Not welcome";
// });

// Route::get('/first/{fname}/middle/{mname}', function($fname, $mname){
// echo "hello $fname $mname";
// });

// Route::get('/{n1}/{n2}', function($n1, $n2){
//  echo $n1+$n2;
// });

// Route::get('/{action}/{n1}/{n2}', function($action,$n1,$n2){

//     if($action=='add')
//         echo "Addition " .$n1+$n2;
//     if($action =='sub')
//         echo "Subtraction " .$n1-$n2;
//     if($action == 'mul')
//         echo "Multiplication ".$n1*$n2;
//     if($action =='div')
//         echo "Division ".$n1/$n2;

// });

// Route::get('/user/{name?}', function($name="anonymous"){
// echo "hello"." ".$name;
// });

// Route::get('/user/{name}',function($name){
// echo $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/emp/{id}',function($id){
//     echo "Employee ID ".$id;
// })->where('id','[0-9]+');

// Route::get('/name/{name}/age/{age}', function($name, $age){
//     echo "Name : ".$name. " Age : ".$age;
// })->where(['name'=>'[A-Za-z]+', 'age'=>'[0-9]+']);


// Route::fallback(function(){
//     echo "this url is not allowed in this URL";
// });