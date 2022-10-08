<?php
//Connect email sending
// require_once "../auth/emails/sendmail.php";
// require_once "../auth/emails/startupmail.php";

session_start();
// Connect database
include "./config/db.php";


// User registration script
if (isset($_POST['register_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $securityKey = 'ISC'.rand(1000, 9999);
    $token = bin2hex(random_bytes(50)); // generate unique token

    $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "User Already Exist!";
    }else {
        // Finally, register user if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (firstName, lastName, email, password, securityKey, accountType, token, status) 
  			        VALUES('$firstName', '$lastName', '$email', '$password', '$securityKey', 'Tenant', '$token', 'Active')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            // sendVerificationEmail($email, $token, $firstName, $companyName);
            // sendStartupEmail($email, $firstName, $companyName);

            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['firstName'] = $firstName;
            header('location: kyc');
        }else {
            $_SESSION['message_title']  = "Registration Error";
            $_SESSION['message']    = "Error occured: ".mysqli_error($conn);
        }
    }
}



// Login script
if (isset($_POST['login_btn'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $status = $conn->real_escape_string($_POST['status']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $password = sha1($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $picture = $row['picture'];
        $phone = $row['phone'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['id'] = $id;
        if ($status == 'Inactive'){
            $_SESSION['error_message'] = "Account Deactivated";
            echo "<meta http-equiv='refresh' content='3; URL=./'>";
        }if ($status == 'Active') {
            $_SESSION['success_message'] = "Login Successful, you're been redirected...";
            header('location: dashboard');
        }
    }else {
        $_SESSION['error_message'] = "Incorrect Login Details".mysqli_error($conn);
        echo "<meta http-equiv='refresh' content='3; URL=./'>";
    }
}
