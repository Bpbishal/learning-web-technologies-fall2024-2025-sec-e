<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'crud');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
        
    }

    function addUser($username, $password,  $email){
        $conn = getConnection();
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    
    function addAuth($authname,$authphone,$authusername, $authpassword){
        $conn = getConnection();
        $sql = "INSERT INTO author (authname,authphone,authusername, authpassword) VALUES ('$authname','$authphone','$authusername', '$authpassword')";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    function getAllAuth(){
        $con = getConnection();
        $sql = "select * from author";
        $result = mysqli_query($con, $sql);

        $authors = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($authors, $row);
        }
        
        return $authors;
    }
    function updateAuth($id,$authname,$authphone, $authusername, $authpassword){
        $con = getConnection();
        $sql = "UPDATE author SET authname='$authname', authphone='$authphone', 
                authusername='$authusername', authpassword='$authpassword' where id='$id'";
        if(mysqli_query($con, $sql)){
            return true;
        } else{
            return false;
        }
    }
    function getAuthor($id){
        $con = getConnection();
        $sql = "select * from author where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    function deleteAuth($id){
            $con = getConnection();
            $sql = "DELETE FROM author where id=$id";
            if(mysqli_query($con, $sql)){
                return true;
            } else{
                return false;
            }
        }
        function searchAuth($search) {
            $con = getConnection();
            $sql = "SELECT * FROM author WHERE authname LIKE '%$search%' 
                    OR authusername LIKE '%$search%' 
                    OR authphone LIKE '%$search%'";
            $result = mysqli_query($con, $sql);
        
            if ($result) {
                $authors = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    $authors[] = $row;
                }
                return $authors; 
            } else {
                return [];
            }
        }
        

?>