<?php

//Git hub link https://github.com/rashrest/dating-II

ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//Instantiate fat-free
$f3=Base::instance();

//define route before your run fat-free
//define default route
$f3->route('GET /Home',function (){
    //Display the home page
    $view = new Template();
    echo $view-> render('views/home.html');
});

////define route to personal page
$f3->route('GET /Personal',function (){

    //Display the personal information form
    $view = new Template();
    echo $view-> render('views/personalForm.html');
});

////define route to Profile page
$f3->route('GET /Profile',function (){

    //Display the personal information form
    $view = new Template();
    echo $view-> render('views/profile.html');
});

////define route to personal page
$f3->route('GET /Interest',function (){

    //Display the personal information form
    $view = new Template();
    echo $view-> render('views/interests.html');
});

////define route to personal page
$f3->route('GET /Summary',function (){

    //Display the personal information form
    $view = new Template();
    echo $view-> render('views/summary.html');
});


//Run Fat-Free /Fat free
$f3->run();