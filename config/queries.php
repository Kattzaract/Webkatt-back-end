<?php
    /*if the form has been submitted*/
    if(isset($_POST['submitted']) ==1){
        /*declare and instantiate the following*/
        $page_title = mysqli_real_escape_string($dbc, $_POST['page_title']);
        $page_user = mysqli_real_escape_string($dbc, $_POST['page_user']);
        $page_slug = mysqli_real_escape_string($dbc, $_POST['page_slug']);
        $page_label = mysqli_real_escape_string($dbc, $_POST['page_label']);
        $page_header = mysqli_real_escape_string($dbc, $_POST['page_header']);
        $page_body = mysqli_real_escape_string($dbc, $_POST['editor1']);

        if($_POST['id'] != ''){
            /*update values in the database*/
            $action = 'updated';
            $query = "UPDATE pages SET
            user_id = '$page_user',
            page_slug = '$page_slug',
            page_title = '$page_title',
            page_header = '$page_header',
            page_body = '$page_body',
            page_label = '$page_label'
            WHERE page_id = $_GET[id]";
        }else{
            /*insert values into the database*/
            $action = 'added';
            $query = "INSERT INTO pages (user_id,page_slug, page_title, page_label,  page_header,  page_body) 
                          VALUES ($page_user,'$page_slug','$page_title','$page_label','$page_header','$page_body')";
        }
        /*run the query*/
        $result = mysqli_query($dbc, $query);

        /*if $results query has successfully run*/
        if ($result){
            $message = '<p>Page was '. $action . '</p>';
            /*or else display error message*/
        }else{
            $message = '<p>Page could not be '. $action . ' because: ' .mysqli_error($dbc) . '</p>';
            $message .= '<p>' . $query . '</p>';
        }
    }
?>