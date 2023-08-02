<?php
session_start();

$_SESSION ['VName'] = "Razan";
$_SESSION ['VEmail'] ="razanmustafa8@gmail.com";
$_SESSION ['VPass'] ="R";

if (isset($_POST ['user']) && isset($_POST ['email']) &&isset($_POST ['pass'])) {
    $u = $_POST ['user'];
    $e= $_POST ['email'];
    $p = $_POST ['pass'];

    $_SESSION['user'] = $u;

    if ($u === $_SESSION ['VName'] && $e === $_SESSION ['VEmail'] && $p === $_SESSION ['VPass']){
        
        header("location: calc.php" );
    }else {
        $_SESSION["massage"] = "invalied username/ email or the password incorrect" ;
        header("location: login.php" );
    };
};


?>