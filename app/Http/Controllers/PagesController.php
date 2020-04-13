<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function loadIndexPage(){
        return view('pages.home');
    }

    public function loadDaycareProfile($id = 0){
        if($id==0){
            return view('daycare.no_daycare');
        }else{
            return view('daycare.daycare_profile');
        }
    }

    // public function loadMap(){
    //     return view('pages.map');
    // }

    public function loadAbout(){
        return view('pages.about');
    }

    public function loadSign(){
        return view('pages.sign');
    }

    public function loadSearch(){
        return view('day.search');
    }

    public function daycare_add_window(){
        return 'daycare_add_window';
    }

    public function daycare_update_window(){
        return 'daycare_update_window';
    }

    public function daycare_delete_window(){
        return 'daycare_delete_window';
    }
}



