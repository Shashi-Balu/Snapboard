<?php

require_once 'assets/php/functions.php';

showPage('home', ['page-title' => 'Snapboard']);
unset($_SESSION['error']);
unset($_SESSION['formdata']);
