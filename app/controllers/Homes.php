<?php 

    class Homes extends Controller {
        public function __construct(){
            $this->homeModel = $this->model('Home');
        }
        


        public function home(){
        
            $data=[
    
                'title' => 'this is home',
            ];
            $this->view('home',$data);
        }


    }

   