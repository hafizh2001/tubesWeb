<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CategoryController extends Controller
{
public function ekonomi()
    {
       
        return view ('ekonomi');
    }
    public function olahraga()
    {
       
        return view ('olahraga');
    }

public function teknologi()
    {
       
        return view ('teknologi');
    }
    public function politik()
    {
       
        return view ('politik');
    }
    
}







