<!--Part 29
- Make Page header dynamic
- Make breadcrumb area dynamic
- make the "active" class in the navigation bar change dynamically
- make the "active" class in the bread crumb change dynamically
- Create admin_pages table
- create admin template
-->
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
            <title>Admin Area | Pages</title>
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
        <!--header area-->
        <?php include(DIRECTORY_TEMPLATE.'header.php');?>
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
                                <h3 class="panel-title">Pages<!--page was added message here--><?php if(isset($message)){echo $message;}?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Filter Pages...">
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

                                    <!--page list setup-->
                                    <?php
                                        $query = "SELECT * FROM pages ORDER BY page_title ASC";
                                        $result = mysqli_query($dbc, $query);
                                        while($page_list = mysqli_fetch_assoc($result)){?>
                                            <tr>
                                                <td><?php echo $page_list['page_title'];
                                                ?></td>
                                                <td><span class="glyphicon <?php if($page_list['published'] == 1){ echo 'glyphicon-ok"';}else{echo 'glyphicon-remove';} ?> aria-hidden="true"></span></td>
                                                <!--I need to figure out the logic to insert the date a page was created-->
                                                <td>Dec 12 2017</td>
                                                <td>
                                                    <form action="edit_page.php?id=<?php echo $page_list['page_id'];?>" method="post">
                                                    <!--debug query-->
                                                        <input type="hidden" name="selected" value="<?php echo $page_list['page_id'];?>">
                                                        <!--edit button-->
                                                        <button type="submit"  class="btn btn-default">Edit</button>
                                                        <!--delete button-->
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    <!--<tr>
                                        <td>Home</td>
                                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                        <td>Dec 12 2017</td>
                                        <td><a class="btn btn-default" href="edit.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>About</td>
                                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                        <td>Dec 13 2017</td>
                                        <td><a class="btn btn-default" href="edit.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Services</td>
                                        <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                                        <td>Dec 13 2017</td>
                                        <td><a class="btn btn-default" href="edit.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>Contact</td>
                                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                        <td>Dec 14 2017</td>
                                        <td><a class="btn btn-default" href="edit.php">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                                    </tr>-->
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
            <?php include('../modals/add_page.php');?>
            <script>
                CKEDITOR.replace('editor1');
            </script>



        </body>
    </html>