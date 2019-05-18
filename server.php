<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Host = "smtp.mail.us-east-1.awsapps.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Username = "sales@libertydealerservices.com";
$mail->Password = "hodel$4460";
$mail->Port = "465";


$mail->setFrom('sales@libertydealerservices.com', 'Liberty Dealer Services');
$mail->addReplyTo('sales@libertydealerservices.com', 'Liberty Dealer Services');
$mail->isHTML(true);


if (!isset($_SESSION))   
    session_start(); 

// initializing variables
$username     = "";
$email        = "";
$password     = "";
$first_name   = "";
$last_name    = "";
$company_name = "";
$address      = "";
$city         = "";
$state        = "";
$zip          = "";
$phone        = "";
$fax          = "";
$website      = "";

$errors  = array();
$success = array();

// connect to the database
$db = mysqli_connect('18.216.123.52', 'root', '$nevertRytoHACKth$s!', 'lds');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username     = mysqli_real_escape_string($db, $_POST['username']);
    $email        = mysqli_real_escape_string($db, $_POST['email']);
    $password_1   = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2   = mysqli_real_escape_string($db, $_POST['password_2']);
    $first_name   = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name    = mysqli_real_escape_string($db, $_POST['last_name']);
    $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
    $address      = mysqli_real_escape_string($db, $_POST['address']);
    $city         = mysqli_real_escape_string($db, $_POST['city']);
    $state        = mysqli_real_escape_string($db, $_POST['state']);
    $zip          = mysqli_real_escape_string($db, $_POST['zip']);
    $phone        = mysqli_real_escape_string($db, $_POST['phone']);
    $fax          = mysqli_real_escape_string($db, $_POST['fax']);
    $website      = mysqli_real_escape_string($db, $_POST['website']);
    
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    // if (empty($username)) { array_push($errors, "Username is required"); }
    // if (empty($email)) { array_push($errors, "Email is required"); }
    // if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2)
        array_push($errors, "The two passwords do not match");
    
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result           = mysqli_query($db, $user_check_query);
    $user             = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username)
            array_push($errors, "Username already exists");
        
        if ($user['email'] === $email)
            array_push($errors, "Email already exists");
    }
    
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database
        
        $query = "INSERT INTO users (username, email, password, first_name, last_name, company_name, address, city, state, zip, phone, fax, website) 
              VALUES('$username', '$email', '$password', '$first_name', '$last_name', '$company_name', '$address', '$city', '$state', '$zip', '$phone', '$fax', '$website')";
        
        mysqli_query($db, $query);
        try {
            $mail->addAddress($email);
            $mail->Subject  = "Welcome to Liberty Dealer Services Portal";
            $mail->Body     = getEmailTemplate('email-templates/welcome.php', [
                                'first_name' => $first_name,
                                'last_name' => $last_name
                            ]);
            $mail->send();
        } catch (Exception $e) {
            // array_push($errors, "Failed to Recover your password, try again.");
        }
        $_SESSION['username'] = $username;
        $_SESSION['success']  = "You are now logged in";
        header('location: index.php');
    }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    $password = md5($password);
    $query    = "SELECT * FROM users WHERE (username='$username' OR email='$username') AND password='$password'";
    $results  = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success']  = "You are now logged in";
        header('location: index.php');
    } else {
        array_push($errors, "Wrong username/password combination");
    }
}


//FORGOT PASSWORD
if (isset($_POST['forgot_password'])) {
    // receive all input values from the form
    $email    = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    
    if (!empty($email) || !empty($username)) {
        if(!empty($email))
            $query   = "SELECT * FROM users WHERE email='$email'";
        else
            $query   = "SELECT * FROM users WHERE username='$username'";

        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $r = mysqli_fetch_assoc($results);
            
            $uniqidStr = md5(uniqid(mt_rand()));
            if(!empty($email))
                $update_query   = "UPDATE users SET forgot_pass_identity='$uniqidStr' WHERE email='$email'";
            else
                $update_query   = "UPDATE users SET forgot_pass_identity='$uniqidStr' WHERE username='$username'";
            mysqli_query($db, $update_query);

            try {
                $mail->addAddress($r['email']);               // Name is optional
                $mail->Subject  = "Your Recovered Password | Liberty Dealer Services Portal";
                $mail->Body     = getEmailTemplate('email-templates/password-reset.php', [
                                    'link' => $_SERVER['SERVER_NAME'] . '/forgot-password.php?token='.$uniqidStr
                                ]);
                $mail->send();
                array_push($success, "Your Request has been sent to your email.");
            } catch (Exception $e) {
                array_push($errors, "Failed to Recover your password, try again.");
            }
        } else {
            array_push($errors, "Email or Username doesn't exist");
        }
    } else {
        array_push($errors, "Email or Username is required to request password reset.");
    }
}

if (isset($_POST['reset_password'])) {
    $password_1   = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2   = mysqli_real_escape_string($db, $_POST['password_2']);
    $token        = mysqli_real_escape_string($db, $_POST['token']);

    if (!empty($token)) {
        if ($password_1 != $password_2)
            array_push($errors, "The two passwords do not match");
        else {
            $password = md5($password_1);
            $update_query = "UPDATE users SET password='$password', forgot_pass_identity='' WHERE forgot_pass_identity='$token'";
            mysqli_query($db, $update_query);
            
            array_push($success, "Successfully Resetted the password.");
        }
    } else {
        array_push($errors, "Failed to reset password. Please try again later.");
    }
}



function getEmailTemplate($phpFilePath, $data_ = []) {
    extract($data_, EXTR_SKIP);
    ob_start();
    require($phpFilePath);    
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}