/**
 * Created by Katlego on 5/7/2018.
 */
$(document).ready(function(){
    $("#console-debug").hide();

    $("#btn-debug").click(function () {
        $("#console-debug").toggle();
    });
});


CKEDITOR.replace('editor1');

// tinymce.init({
//     selector: "textarea"
// });
