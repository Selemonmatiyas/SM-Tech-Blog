<?php

session_start();

unset($_SESSION["password"]);
unset($_SESSION["username"]);
unset($_SESSION["email"]);

session_abort();
$BackToMyPage = $_SERVER['HTTP_REFERER'];
if(isset($BackToMyPage)) {
    echo "done";
    header('Location: ../index.php'); // default page
}
   

?>