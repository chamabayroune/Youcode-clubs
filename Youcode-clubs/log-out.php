<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
session_destroy();
// Redirect to the login page:
header('Location: index.html');
?>