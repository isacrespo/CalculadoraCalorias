<?php

if (!file_exists(__DIR__ . '/config.php')) {
  die('ERROR: No existe config.php');
}

session_start();
require('config.php');

require('inc/helpers.php');
