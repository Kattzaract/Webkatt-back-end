<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" action="../pages/pages.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" ><span aria-hidden="true" data-dismiss="modal">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                </div>
                <div class="modal-body">
                    <!--page title-->
                    <div class="form-group">
                        <label for="page_title">Title</label>
                        <input type="text" name="page_title" id="page_title" class="form-control" placeholder="Page Title...">
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
                                <option value="<?php echo $user_data['user_id']; ?>">
                                    <?php echo $user_data['full_name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <!--page slug-->
                    <div class="form-group">
                        <label for="page_title">Slug</label>
                        <input type="text" name="page_slug" id="page_slug" class="form-control" placeholder="Page Slug...">
                    </div>
                    <!--page label-->
                    <div class="form-group">
                        <label for="page_label">Label</label>
                        <input type="text" name="page_label" id="page_label" class="form-control" placeholder="Page Label...">
                    </div>
                    <!--page header-->
                    <div class="form-group">
                        <label for="page_header">Header</label>
                        <input type="text" name="page_header" id="page_header"class="form-control" placeholder="Page Header...">
                    </div>
                    <!--page body-->
                    <div class="form-group">
                        <label for="">Body</label>
                        <textarea name="editor1" id="page_title "class="form-control" placeholder="Page Body..."></textarea>
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
                </div>
                <!--footer-->
                <div class="modal-footer">
                    <!--debug query-->
                    <input type="hidden" name="submitted" value="1">
                    <!--close button-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--save button-->
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>