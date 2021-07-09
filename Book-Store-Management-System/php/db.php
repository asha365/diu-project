<?php

    function Createdb(){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'bookstore';
    
    //database server connection
    $con = mysqli_connect($servername, $username, $password);


     //check the database connection
     if(!$con){
        die("connection failed:".mysqli_connect_error());
     }

     //create database a new database
     $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

     if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        //created new database table
        $sql="
            CREATE TABLE IF NOT EXISTS books(
                id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
                book_name VARCHAR (25) NOT NULL,
                book_author VARCHAR (20),
                book_price FLOAT
            );
        ";

        if(mysqli_query($con,$sql)){
            return $con;
        }else{
            echo "cannot create table....";
        }

     }else{
         echo "error while creating database".mysqli_error($con);
     }

    }


?>