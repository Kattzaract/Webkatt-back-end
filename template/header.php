<?php
session_start();
if(!isset($_SESSION['user_email'])){
    header('location:login.php');
}
?>
<!--setup include-->
<?php include('../config/setup.php');?>
<!DOCTYPE html>
<html>
<head>
    <!--site title-->
    <title>Admin Area | Dashboard</title>
    <!--meta tags include-->
    <?php include('../config/meta.php');?>
    <!--stylesheets include-->
    <?php include('../config/css.php');?>
    <!--javascript include-->
    <?php include('../config/js.php');?>
</head>
<body>
<!--navigation bar-->
<?php include(DIRECTORY_TEMPLATE.'navigation.php');?>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard<small>Manage Your Site</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Create content<span class="caret"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                        <li><a href="users.php">Add User</a></li>
                        <li><a href="port_projects.php">Add Client</a></li>
                        <li><a href="port_projects.php">Add Portfolio Project</a></li>
                        <li><a href="port_projects.php">Add Client Project</a></li>
                        <li><a href="port_projects.php">Add Report</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--breadcrumb section-->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>