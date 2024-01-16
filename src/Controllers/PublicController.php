<?php

namespace App\Controllers;

use App\Models\Article;

class PublicController {
    public function home(){
        $articles = Article::all();
        //dd($articles);
        view('home', compact('articles'));
    }
    public function about(){
        view('about');
    }
    public function test(){
        
        // setcookie('mycookie', 'tasty', time() + 60*60*24*30, '','',false, true );
        // var_dump($_COOKIE);
        var_dump($_SESSION);
        //$_SESSION['id'] = 123;
        //nigger
    }
    public function testAnswer(){
        var_dump($_POST);
    }
}