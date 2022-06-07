<?php 

    class Controller {

        //method view
        public function view($view, $data = []) {
            require_once "../app/views/".$view.".php";
        }

        //method model
        public function model($model) {
            require_once "../app/models/".$model.".php";
            return new $model;
        }

        //check login
        public function cekLogin() {
            if(empty($_SESSION['login'])) {
                header("location:".BASE_URL."/login");
            }
        }
    }
?>