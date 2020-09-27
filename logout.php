<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: Volunteer.php"); // Redirecting To Home Page
}
?>