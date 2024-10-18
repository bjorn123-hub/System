<?php

  if(isset($_POST['uname'])) &&
   isset($_POST['pass']) {
   include "../db_conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;


    }else if(empty($uname)) {
        $em = "User name is required";
        header("Location: ../Login.php?error=$em&$data");
        exit;
    }else if(empty($pass)) {
        $em = "Password is required";
        header("Location: ../Login.php?error=$em&$data");
        exit;

    }else{
   

        $sql ="SELECT * FROM users WHERE username = ";
        $stm = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if($stms->rowCount() ==1){
            $user = $stm->fetch();

            $username = $user['username'];
            $password = $user['password'];
            $fname = $user['fname'];
            $id = $user['id'];
            if($username === $uname){
              if(password_verify($pass, $password)){
                $_SESSION['id'] = $id;
                $_SESSION['fname'] = $fname;

                header("Location: ../home.php");
                exit;
              }
                
            }else{

                $em = "Incorrect User name or password";
                header("Location: ../Login.php?error=$em&$data");
                exit; 

                }
        
        }else{

            $em = "Incorrect User name or password";
            header("Location: ../Login.php?error=$em&$data");
            exit;
        }

        header("Location: ../Login.php?success=Your account has been
        created successfully");
}else {
    echo "Nice";

}else {

    header("Location: ../Login.php?error=error");
    exit;
}
?>