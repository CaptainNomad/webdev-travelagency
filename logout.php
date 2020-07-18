<?php
//start a new session
session_start();

//destroy the session
session_destroy();

//redirect to the default home page once logged out
header("Location: http://localhost/nns/pro(1).php");
?>