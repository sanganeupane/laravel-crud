<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends FrontendController
{
    public function index()
    {
//        $this->data('x', 10);
//        $this->data('y', 20);
//        $this->data('title','hello');
//        $this->makeTitle('home');


        $this->data('title',$this->makeTitle('home'));

        return view($this->pagePath. 'home.home',$this->data);
    }
    public function contact()
    {
 $this->data('title',$this->makeTitle('welcome'));
        return view($this->pagePath. 'home.contact',$this->data);
    }
    public function about()
    {
//        $this->data('title',$this->makeTitle(''));
        return view($this->pagePath. 'home.about',$this->data);
    }
}
