<?php

// $_SESSION['auth'];
session_destroy();
header('location: /lockbox/login');
exit();