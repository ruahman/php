<?php

session_start();

// $_SESSION['username'] = 'alex';

$username = $_SESSION['username'] ?? 'Guest';

echo $username;
