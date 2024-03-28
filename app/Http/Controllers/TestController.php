<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
{
$t="bonjour";
return view("welcome",['var'=>$t]);
}

}
