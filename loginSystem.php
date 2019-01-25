<?php 
    print_r($_POST);
    echo $_POST['username'];
    session_start();
    $_SESSION['logged_in'] = false;
    //after succesful login
    if ($_POST['username'] === 'Ann' && $_POST['passwd'] === 'Ann123')
    {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $_POST['username'];
        //redirect to welcome page
        header('Location: welcome.php');
        exit;
    }
    else 
    {
        header('Location: login.php');
        exit;
    }

    //after succesful login
    
    // redirect to Login page or something....

?>
