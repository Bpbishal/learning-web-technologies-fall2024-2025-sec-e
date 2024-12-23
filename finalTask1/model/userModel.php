<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'wt');
        return $con;
    }

    function login($id, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if(isset($user['type'])){
            return $user['type'];
        }
        else{
        return false;
        }
    }

    function addUser($name, $password, $id, $email, $type){
        $conn = getConnection();
        $sql = "insert into users values ('$name', '$password', '$id', '$email', '$type')";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function user_info($id){
        $conn = getConnection();
        $sql = "select * from users where id = '$id'";
        $result = mysqli_query($conn, $sql);
        // var_dump($result);
    
        $row = mysqli_fetch_assoc($result);
            return $row; 
        
    }
    function show_users(){
        $conn = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($conn, $sql);
        return $result;
        // while($row = mysqli_fetch_assoc($result)){
        //     echo "<br>";
        //     print_r($row);
        // }
    }
    function delete_user($idt){
        $conn = getConnection();
        $sql = "DELETE FROM users WHERE id='$idt'";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    function edit_user($idt, $name, $email, $type){
        $conn = getConnection();
        $sql = "UPDATE users
                SET name = '$name', email = '$email', type = '$type'
                WHERE id = $idt";
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

?>