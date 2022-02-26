<?php 
namespace App\Controllers;

use App\Models\IndexModel;

class IndexController
{
    public function index()
    {
        view('index');
    }
}