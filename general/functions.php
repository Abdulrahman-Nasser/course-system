<?php 

function path($go)
{

    echo "<script> window.location.replace('/courses/$go')</script>";
}


function auth()
{
    if (isset($_SESSION['userName'])) {
    } else {
        path('auth/login.php');
    }
}
?>
