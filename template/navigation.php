<nav class="navbar navbar-inverse" role="navigation">
    <!-- debug button-->
    <?php //if($debug['value'] == '1'){?>
    <!--<button id="btn-debug" class="btn btn-danger"><i class="fa fa-bug"></i></button>-->
    <!--    --><?php //}?>
    <!--navigation bar container-->
    <!--<div class="container">-->
        <!--mobile bar menu-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--navigation bar logo-->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <!--navigation bar menu items-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--navbar left-->
            <ul class="nav navbar-nav">
                <li class="active"><a href="../pages/index.php?page=dashboard">Dashboard</a></li>
                <li><a href="../pages/pages.php?page=pages">Pages </a></li>
                <li><a href="../pages/users.php?page=users">Users</a></li>
                <li><a href="../pages/clients.php?page=clients">Clients</a></li>
                <li><a href="../pages/port_projects.php?page=port_projects">Portfolio</a></li>
                <li><a href="../pages/client_projects.php?page=client_projects">Projects</a></li>
                <li><a href="../pages/reports.php?page=reports">Reports</a></li>
                <li><a href="../pages/settings.php?page=settings">Settings</a></li>
                <?php /*main_nav($dbc, $page);*/?>
            </ul>
            <!--navbar right-->
            <ul class="nav navbar-nav navbar-right">
                <!--dropdown menu-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $user['full_name']?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
                <!-- debug button-->
                <li>
                    <?php //if($debug['value'] == '1'){?>
                    <button id="btn-debug" class="btn btn-danger"><i class="fa fa-bug"></i></button>
                    <!--    --><?php //}?>
                </li>
            </ul>
        </div>
<!--</div>-->
</nav><!--Navigation bar-->
