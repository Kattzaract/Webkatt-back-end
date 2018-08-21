

<?php
#start session:
session_start();
#database connection include
include ('../config/connection.php');
#login
if($_POST){
    $query = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
    $result = mysqli_query($dbc, $query);

    /*echo '<h1>'. mysqli_num_rows($result) . '</h1>';*/

    if(mysqli_num_rows($result) == 1){
        $_SESSION['user_email'] = $_POST['email'];
        header('Location:index.php');
    }
}
?>
<!DOCTYPE html>
    <html>
    <head>
        <!--Page Title-->
        <title>Admin Area | Account Login </title>
        <!--meta tags include-->
        <?php include('../config/meta.php');?>
        <!--stylesheets include-->
        <?php include('../config/css.php');?>
        <!--javascript include-->
        <?php include('../config/js.php');

        ?>
    </head>
    <body>
        <!--navigation bar-->
        <nav class="navbar navbar-inverse ">
            <div class="container">
                <a class="navbar-brand" href="#">AdminStrap</a>
            </div>
        </nav>
        <!--header area-->
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Admin Area<small>Account Login</small></h1>
                    </div>
                </div>
            </div>
        </header>
        <!--main content-->
        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <!--login form-->
                        <form role="form " id="login" action="login.php" method="post" class="well">
                            <!--email field-->
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div>
                            <!--password field-->
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                            </div>
                            <!--submit button-->
                            <button type="submit" class="btn btn-default btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--footer include-->
        <footer id="footer" class="navbar-fixed-bottom">
            <p>Copyright adminStrap</p>
        </footer>
        <?php /*include(DIRECTORY_TEMPLATE.'footer.php');*/?>
        </body>
    </html>