<?php
     ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

    if(isset($_POST['reset'])){
            require_once('../Config/connection.php');

            $password = md5($_POST['password_1']);
            $password2 = md5($_POST['password_2']);
            $id = $_SESSION['userid'];
            if ($password == $password2){
                $sql = "UPDATE users SET pass = ? WHERE id= ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $password);
                $stmt->bindParam(1, $id);
                $result = $stmt->execute([$password,$id]);
                header("Location: ../Views/login.php");
            }
            else  
            {
                echo "Password doen't Match";   
            }
       
}

?>