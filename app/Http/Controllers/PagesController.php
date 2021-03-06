<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    
    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive data b from the model
        # compile or process data from the model if needed
        # pass that data to the correct view
        return view('pages/welcome');
    }
    
    public function getAbout() {
        $first = 'Tung';
        $last = 'Nguyen';
        $fullname = $first . " " . $last;
        $email = 'mecer80@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        
        return view('pages/about')->withData($data);
    }
    
    public function getContact() {
        return view('pages/contact');
    }
    
    public function postContact() {
        
    }
    
}