<?php
function est_connecter ():bool{
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
    
  }
  return !empty($_SESSION['connecte']);
}


function forcer_user_connecter() : void {
  if (!est_connecter()) {
    header('Location: conextion.php');
    exit();
  }
}

 ?>
