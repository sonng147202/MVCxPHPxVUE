<?php 
namespace App\Controllers;

use App\Models\IndexModel;

class IndexController
{
    public static function index()
    {
        echo '<h1>About</h1>';
        IndexModel::index();
    }
}