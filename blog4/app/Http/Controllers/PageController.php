<?php

namespace App\Http\Controllers;

class PageController extends Controller{
    public function about(){
        return "here we go";
    }
    public function showPortfolio(){
        return 9*8+6+7;
    }
}