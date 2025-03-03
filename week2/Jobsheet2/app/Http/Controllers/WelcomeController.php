<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
public function hello() {
return 'Hello World';
}

}

class PageController extends Controller{
    public function index() {
        return 'Selamat Datang';
    }
    
}