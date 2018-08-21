<!--<footer id="footer" class="navbar navbar-default navbar-fixed-bottom navbar-inverse">-->
<!--footer container-->
<!--<div class="container-fluid">
    <div class="footer-icons col-md-2 pull-right ">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
    </div>
</div>
</footer>
-->
<footer id="footer" class="navbar-fixed-bottomss">
    <p>Copyright adminStrap</p>
</footer>

<!--<footer id="footer" class="navbar navbar-default navbar-fixed-bottom navbar-inverse">
    --footer container--
    <div class="container-fluid">
        <div class="footer-icons col-md-12 col-sm-12 col-xs-12 col-md-offset-10 col-sm-offset-10 col-xs-offset-2  ">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
        </div>
    </div>
</footer>-->
<!--debug console include-->
<?php if($debug['value'] == '1'){?>
    <?php include('../widgets/debug.php'); ?>
<?php }?>
<!--Modals-->
<!--Add Page-->
<?php include('../modals/add_page.php');?>
<script>
    CKEDITOR.replace('editor1');
</script>
</body>
</html>