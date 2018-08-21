<div id="console-debug">
    <?php $all_vars = get_defined_vars(); ?>
    <!--$_GET array values-->
    <h1>GET</h1>
    <pre>
        <?php
        print_r($_GET);
        /*print_r($all_vars);*/
        ?>
    </pre>
    <!--$_POST arry values-->
    <h1>POST</h1>
    <pre>
        <?php
        print_r($_POST);
        ?>
    </pre>

    <h1>Page Array</h1>
    <pre>
        <?php echo print_r($page);?>
    </pre>
</div>