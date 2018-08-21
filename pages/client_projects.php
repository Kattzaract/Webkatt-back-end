<!--setup include-->
<?php include('../config/setup.php');?>
<!DOCTYPE html>
<html>
<head>
    <!--Page Title-->
    <title>Admin Area | Posts</title>
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
    <!--header-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Projects<small>Manage Client Projects</small></h1>
                </div>
                <div class="col-md-2">
                    <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                            Create content
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                            <li><a href="users.php">Add User</a></li>
                            <li><a href="port_projects.php">Add Portfolio Project</a></li>
                            <li><a href="port_projects.php">Add Client</a></li>
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

<!--header-->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li>Dashboard</li>
            <li>Pages</li>
            <li class="active">Posts</li>
        </ol>
    </div>
</section>
<!--Breadcrumb-->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item main-color-bg active"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</a>
                    <a href="pages.php" class="list-group-item "><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
                    <a href="hosts.php" class="list-group-item "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Hosts <span class="badge">33</span></a>
                    <a href="#" class="list-group-item "><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Users <span class="badge">203</span></a>
                </div>

                <div class="well">
                    <h4>Disk Space Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            60%
                        </div>
                    </div>

                    <h4>Bandwidth Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            40%
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Client Projects</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" placeholder="Filter Posts...">
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Title</th>
                                <th>Published</th>
                                <th>Created</th>
                                <th></th>
                            </tr>

                            <tr>
                                <td>Blog post 1</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                <td>Dec 12 2017</td>
                                <td><a class="btn btn-default" href="edit_page.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Blog post 2</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                <td>Dec 13 2017</td>
                                <td><a class="btn btn-default" href="edit_page.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Blog post 3</td>
                                <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                                <td>Dec 13 2017</td>
                                <td><a class="btn btn-default" href="edit_page.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Blog post 4</td>
                                <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                <td>Dec 14 2017</td>
                                <td><a class="btn btn-default" href="edit_page.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                            </tr>

                        </table>
                    </div>
                </div>

                <!--Latest-->

            </div>


        </div>
    </div>
</section>
    <!--footer include-->
    <?php include(DIRECTORY_TEMPLATE.'footer.php');?>
    <!--debug console include-->
    <?php /*if($debug['value'] == '1'){*/?><!--
                <?php /*include('../widgets/debug.php'); */?>
            --><?php /*}*/?>
    <!--Modals-->
    <!--Add Page-->
    <?php include('../widgets/modal.php');?>
    <script>
        CKEDITOR.replace('editor1');
    </script>



</body>
</html>