<?php require "db.php"; ?>
<?php
// Initialize the session
session_start();
$loggedin = false;

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
   $loggedin = true;
}
?>
