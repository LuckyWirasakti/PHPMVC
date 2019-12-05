<?php 
if( !session_id() ) session_start();

require_once '../app/init.php';

error_reporting(E_ALL);

$app = new App;