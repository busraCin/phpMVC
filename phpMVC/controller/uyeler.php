<?php
class Uyeler extends Controller{


    public function index(){
        $userModel = $this->model('users');
        $users = $userModel->getAll();
        $this->view('uyeler' , ['users' => $users]);
    }  

public function post () {
    print_r($_POST);
}


}







?>