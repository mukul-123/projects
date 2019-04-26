<?php
include 'trait.php';

use trait1\userTrait;

class Users{
    use userTrait;
    public function __construct(){
        $this->getUsers();
    }

    public function getUsers(){
        try{
            $users=$this->user();
            foreach($users as $key=>$value){
                echo $value;
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
      
    }
}

$user=new Users();



?>