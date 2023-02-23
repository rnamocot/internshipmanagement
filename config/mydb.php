<?php

function connectionDB(){  
    $host="localhost";
    $username="root";
    $password="";
    $database="rn_interships_management";
    $con =new mysqli($host, $username,$password, $database );
    if($con->connect_error){
       echo $con->connect_error;
    }else{
        return $con;
    }
}

/*
function connectionDB(){  
    $host="localhost";
    $username="u992206180_ojt";
    $password="Ojt_management123!";
    $database="u992206180_ojt_management";
    $con =new mysqli($host, $username,$password, $database );
    if($con->connect_error){
       echo $con->connect_error;
    }else{
        return $con;
    }
    
}
*/