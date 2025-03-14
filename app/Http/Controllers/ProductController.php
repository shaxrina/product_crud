<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(): string
    {
        return "Barcha mahsulotlar";
    }

    public function create(): string
    {
        return "Yangi mahsulot qo'shish";
    }

    public function search(): string
    {
        return "Qidiruv natijalari";
    }
} 
