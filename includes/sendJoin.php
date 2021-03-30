<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json; charset=UTF-8');
$results = [];
$visitor_fname='';
$visitor_lname='';
$visitor_birthdate='';
$visitor_email='';
$visitor_phone='';
$visitor_program='';
$visitor_membership='';



if (isset($_POST['fname'])){
    $visitor_fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['lname'])){
    $visitor_lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['bday'])){
    $visitor_birthdate = filter_var($_POST['bday'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['email'])){
    $visitor_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
}

if (isset($_POST['phone'])){
    $visitor_phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['message'])){
    $visitor_message = filter_var(htmlspecialchars($_POST['message']), FILTER_SANITIZE_STRING);
}

if (isset($_POST['program'])){
    $visitor_program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['membership'])){
    $visitor_membership = filter_var($_POST['membership'], FILTER_SANITIZE_STRING);
}


$results['fname'] = $visitor_fname;

$email_subject= 'Join Request';

$email_recipient = ''; //must add a valid lrg email

$email_message = sprintf('Name: %s, Email: %s, Phone: %s, Birthday: %s, Program: %s, Membership: %s', $visitor_fname, $visitor_email, $visitor_phone, $visitor_birthdate, $visitor_program, $visitor_membership);
$email_headers = array(

    'From'=>$visitor_email
);

if(empty($_POST['fname']) || empty($_POST['email'])){
    $email_result = false;
}else{
    $email_result = mail($email_recipient,$email_subject,$email_message,$email_headers);
}

if ($email_result){
    $results['message'] = sprintf('Thank you for contacting us, %s. You will get a reply within 48 hours!', $visitor_fname);
}else{
    $results['message'] = sprintf('We are sorry %s, but the email did not send, please try again.', $visitor_fname);
}

echo json_encode($results);

?>