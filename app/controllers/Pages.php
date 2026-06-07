<?php

class Pages extends Controller {
    public function __construct(){
        }
    public function index(){ 

        $data = [
            'title' => 'Shared Posts',
            'description' => 'Simple social media app built on the MVC pattern with PHP OOP and MySQL.'
        ];
        $this->view('pages/index', $data);        
        }
    public function about(){
        $data = [
            'title' => 'About Us',
            'description' => 'Learn more about our shared posts application.'
        ];
        $this->view('pages/about', $data);
        }
}


?>