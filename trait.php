<?php

namespace trait1{
    trait userTrait{
        public function user(){
            $user=array('name'=>'mukul','address'=>'dehradun');
            return $user;
        }
    }
}



namespace trait2{
    trait userTrait{
        public function user(){
            $user=array('name'=>'aman','address'=>'chandigarh');
            return $user;
        }
    }
}



?>