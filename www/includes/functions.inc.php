<?php
    //Fiunction to make sure that the fields are not empty
    // function emptyInputSignup($email, $name, $phone, $password){
    //     $result;
    //     if(empty($email) || empty($name) || empty($phone) || empty($password)){
    //         $result = true;
    //     }else{
    //         $result = false;
    //     }
    //     return $result;
    // }

    //Fiunction to check if the email is valid
    // function invalidEmail($email){
    //     $result;
    //     if(empty($email)){
    //         $result = true;
    //     }else{
    //         $result = false;
    //     }
    //     return $result;
    // }

    //Fiunction to check if the username is valid
    // function invalidUid($name){
    //     $result;
    //     if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
    //         $result = true;
    //     }else{
    //         $result = false;
    //     }
    //     return $result;
    // }

    //Fiunction to check if the email is valid
    // function invalidPhone($email){
    //     $result;
    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         $result = true;
    //     }else{
    //         $result = false;
    //     }
    //     return $result;
    // }

    //Fiunction to check if the password is valid
    // function invalidPassword($email){
    //     $result;
    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         $result = true;
    //     }else{
    //         $result = false;
    //     }
    //     return $result;
    // }

    //Fiunction to check if the email is valid
    // function emailExists($connection, $name, $email){
    //     $query = "SELECT * FROM user WHERE id = ? OR email = ?;";
    //     $stmt = mysqli_stmt_init($connection);
    //     if(!mysqli_stmt_prepare($stmt, $sql)){
    //         header("location: ../signup.php?error = stmtfailed");
    //         exit();
    //     }

    

    //     mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    //     mysqli_stmt_execute($stmt);

    //     $resultData = mysqli_stmt_get_result();

    //     if($row = mysqli_stmt_assoc($resultData)){
    //         return $row;
    //     }else{
    //         $result = false;
    //         return $result;
    //     }

    //     mysqli_stmt_close($stmt);
    // }

    //Fiunction to check if the email is valid
    function createUser($connection, $name, $email, $password, $number){
        // $query = "INSERT INTO user (name, email, password, phone) VALUES (?, ?, ?, ?)";
        // $stmt = mysqli_stmt_init($connection);
        // if(!mysqli_stmt_prepare($stmt, $sql)){
        //     header("location: ../signup.php?error = stmtfailed");
        //     exit();
        // }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO MyGuests (name, email, password, phone) VALUES ('$name', '$email', '$hashedPwd', '$phone')";

        if (mysqli_query($connection, $query)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);

        // mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $phone);
        // mysqli_stmt_execute($stmt);
        // mysqli_stmt_close($stmt);

        header("location: ../signup.php?error = none");
        exit();
    }
?>