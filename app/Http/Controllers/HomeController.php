<?php

namespace App\Http\Controllers;

use App\APropo;
use App\Carousel;
use App\Front;

use App\Contact;
use App\MessageContact;
use App\Models\Blog\Article;
use App\Models\Blog\Categorie;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function onMain()
    {
       return view('main');
    }

}
