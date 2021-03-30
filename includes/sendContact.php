<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json; charset=UTF-8');
$results = [];
$visitor_fname='';
$visitor_lname='';
$visitor_phone='';
$visitor_email='';
$visitor_message='';



if (isset($_POST['fname'])){
    $visitor_fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['lname'])){
    $visitor_lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['phone'])){
    $visitor_phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['email'])){
    $visitor_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
}

if (isset($_POST['message'])){
    $visitor_message = filter_var(htmlspecialchars($_POST['message']), FILTER_SANITIZE_STRING);
}


$results['fname'] = $visitor_fname;
$results['message']=$visitor_message;

$email_subject= 'Inquiry';

$email_recipient = ''; //must add a valid lrg email

$email_message = sprintf('Name: %s, Email: %s, Phone: %s, Message: %s', $visitor_fname, $visitor_email, $visitor_phone, $visitor_message);
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