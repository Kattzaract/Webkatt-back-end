<?php
    #error level:
    error_reporting(0);
    // Setup File:
    #database connection:
    include ('connection.php');

    #constants:
    DEFINE('DIRECTORY_TEMPLATE','../template/');

    #functions:
    include('../functions/data.php');
    include('../functions/template.php');
    include('../functions/sandbox.php');
    #site Setup:
    $debug = data_setting_value($dbc, 'debug-status');

    $page_title = 'Home';
    $site_title = 'Legokat';

    //ensures that the a page ID has a value
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    }else{
        $page = 'dashboard';/**/
    }

    #page setup:
    //queries include
    include('queries.php');

    if(isset($_GET['id'])){

        $opened = data_page($dbc, $_GET['id']);
    }
    #User Setup:
    $user = data_user($dbc, $_SESSION['user_email']);
?>