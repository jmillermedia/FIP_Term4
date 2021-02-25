<?php 

function login($username,$password)
{
$pdo = Database::getInstance()->getConnection();

$get_user_query = 'SELECT * FROM tbl_users WHERE user_username = :username AND user_password=:password';
$user_set = $pdo->prepare($get_user_query);
$user_set->execute(
    array(
        ':username'=>$username,
        ':password'=>$password
    )
    );

    if($found_user = $user_set->fetch(PDO::FETCH_ASSOC)){
        //found user in db now get him in
        $found_user_id = $found_user['user_id'];

        //write the info into the sessiom
        $_SESSION['user_id'] = $found_user_id;
        $_SESSION['user_fname'] = $found_user['user_fname'];

            //redirect user back to index.php
            redirect_to('index.php');
    }else{
        return $message = 'Please enter valid login information';
        }

    }

function confirm_logged_in()
{
    if(!isset($_SESSION['user_id'])){
        redirect_to("admin_login.php");
    }
}

function logout(){
    session_destroy();
    redirect_to('admin_login.php');
}

?>