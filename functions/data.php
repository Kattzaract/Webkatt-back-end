<?php
    function data_setting_value($dbc, $id){
        $query = "SELECT * FROM settings WHERE id = '$id'";
        $result = mysqli_query($dbc, $query);
        $data = mysqli_fetch_assoc($result);

        return $data['value'];
    }

    //user information function
    function data_user($dbc, $id){
        //check whether $id is a number or a string
        if(is_numeric($id)){
            $condition = "WHERE user_id = $id";
        }else{
            $condition = "WHERE email = '$id'";
        }
        $query = "SELECT * FROM users $condition";
        $result = mysqli_query($dbc, $query);
        $data = mysqli_fetch_assoc($result);

        $data['full_name'] = $data['first_name'] . ' ' . $data['last_name'] ;
        $data['full_name_reverse'] = $data['last_name'] . ' ' . $data['first_name'] ;
        return $data;
    }
    //page data page
    function data_page($dbc, $id){
        $query = "SELECT * FROM pages WHERE page_id = $id";
        $result = mysqli_query($dbc, $query);
        $data = mysqli_fetch_assoc($result);

        $data['body_no_html'] = strip_tags($data['page_body']);
        if($data['page_body'] == $data['body_no_html']){
            $data['data_formatted'] = '<p>' . $data['page_body'] . '</p>';
        }else{
            $data['data_formatted'] = $data['page_body'];
        }
        return $data;
    }
?>