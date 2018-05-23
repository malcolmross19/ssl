<?php

class auth extends AppController{

    public function __construct($urlPathParts, $config)
    {

    }

    public function login(){

        if($_REQUEST["username"] && $_REQUEST["password"]){

            if($_REQUEST["username"]=="malcolmross93@gmail.com" && $_REQUEST["password"]=="password"){
                $_SESSION["loggedin"]=1;
                header("Location:/main");
            }else{
                header("Location:/main?msg=Bad Login");
            }

        }else{
                header("Location:/main?msg=Bad Login");
        }

    }

    public function logout(){
        session_destroy();
        header("Location:/main");
    }

}

?>