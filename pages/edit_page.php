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
            <title>Admin Area | Edit Pages</title>
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
            <!--main content-->
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
                                    <h3 class="panel-title">Edit Page<!--page was updated message was here--><?php if(isset($message)){echo $message;} ?></h3>
                                </div>
                                <div class="panel-body">
                                    <?php

                                    ?>
                                    <form action="edit_page.php?id=<?php echo $opened['page_id']?>" method="post" role="form">
                                        <!--page title-->
                                        <div class="form-group">
                                            <label for="page_title">Title</label>
                                            <input type="text" name="page_title" id="page_title" class="form-control" value="<?php echo $opened['page_title']?>" placeholder="Page Title...">
                                        </div>
                                        <!--page user-->
                                        <div class="form-group">
                                            <label for="page_user">User</label>
                                            <select name="page_user" id="page_user" class="form-control">
                                                <option value="0">No user</option>
                                                <?php
                                                $query = "SELECT user_id FROM users ORDER BY first_name ASC";
                                                $result = mysqli_query($dbc, $query);
                                                while($user_list = mysqli_fetch_assoc($result)){
                                                    /*$user_data = $data_user($dbc, $user_list['email']);*/
                                                    $user_data = data_user($dbc, $user_list['user_id']);?>
                                                    <option value="<?php echo $user_data['user_id']; ?>"
                                                        <?php
                                                        if (isset($_GET['id'])){
                                                            selected($user_data['user_id'],$opened['user_id'],'selected');
                                                        }else{
                                                            selected($user_data['user_id'],$user['user_id'],'selected');
                                                        }?>>
                                                    <?php echo $user_data['full_name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <!--page slug-->
                                        <div class="form-group">
                                            <label for="page_slug">Slug</label>
                                            <input type="text" name="page_slug" id="page_slug" class="form-control" value="<?php echo $opened['page_slug']?>" placeholder="Page Slug...">
                                        </div>

                                        <!--page label-->
                                        <div class="form-group">
                                            <label for="page_label">Label</label>
                                            <input type="text" name="page_label" id="page_label" class="form-control" value="<?php echo $opened['page_label']?>" placeholder="Page Label...">
                                        </div>
                                        <!--page header-->
                                        <div class="form-group">
                                            <label for="page_header">Header</label>
                                            <input type="text" name="page_header" id="page_header" class="form-control" value="<?php echo $opened['page_header']?>" placeholder="Page Header...">
                                        </div>
                                        <!--page body-->
                                        <div class="form-group">
                                            <label for="">Body</label>
                                            <textarea name="editor1" id="page_title "class="form-control" placeholder="Page Body..."><?php echo $opened['page_body']?></textarea>
                                        </div>
                                        <!--published-->
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Published
                                            </label>
                                        </div>
                                        <!--meta tags-->
                                        <div class="form-group">
                                            <label>Meta Tags</label>
                                            <input type="text" class="form-control" placeholder="Add some tags...">
                                        </div>
                                        <!--meta descriptions-->
                                        <div class="form-group">
                                            <label>Meta Description</label>
                                            <input type="text" class="form-control" placeholder="Add a meta description...">
                                        </div>

                                        <!--debug query-->
                                        <input type="hidden" name="submitted" value="1">
                                        <!--update query-->
                                        <input type="hidden" name="id" class="btn btn-default" value="<?php echo $opened['page_id']?>">
                                        <!--close button-->
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <!--save button-->
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
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