<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function processdata (Request $req){
        echo $req->username." ".$req->useremail;
    }
}
