<?php

namespace App\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        $creation = new Creation();
        $this->render('home/index');
    }

    //calls renders the contact page, function called by base.php as action
    public function contact()
    {
        $creation = new Creation();
        $this->render('home/contact');
    }
}
