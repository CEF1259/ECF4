<?php

namespace App\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        //$creation = new Creation(); commented out because it doesn't work
        $this->render('home/index');
    }

    //calls renders the contact page, function called by base.php as action
    public function contact()
    {
        //$creation = new Creation(); commented out because it doesn't work
        $this->render('home/contact');
    }
}
