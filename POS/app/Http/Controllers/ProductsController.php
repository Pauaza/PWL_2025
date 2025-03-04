<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverage()
    {
        return "Ini adalah halaman kategori Food & Beverage";
    }

    public function beautyHealth()
    {
        return "Ini adalah halaman kategori Beauty & Health";
    }

    public function homeCare()
    {
        return "Ini adalah halaman kategori Home Care";
    }

    public function babyKid()
    {
        return "Ini adalah halaman kategori Baby & Kid";
    }
}
