<!--Part 54
- Make Page header dynamic
- Make breadcrumb area dynamic
- make the "active" class in the navigation bar change dynamically
- make the "active" class in the bread crumb change dynamically
-->
<?php
    //header area
    include('../template/header.php');
    //main content
    include('../views/' . $page . '.php');
    //footer area
    include('../template/footer.php');
?>


