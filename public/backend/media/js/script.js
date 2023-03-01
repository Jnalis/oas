/**
 * Created by miltone on 9/20/18.
 */
$(document).ready(function(){
    $(".amount-format").on("keypress keyup blur", function(event) {

        var x = $(this).val().replace(/[^0-9\.]/g, '');
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        $(this).val(parts.join("."));

       // if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
           // event.preventDefault();
       // }
    });

    $(".amount-format").each(function() {


        var x = $(this).val().replace(/[^0-9\.]/g, '');
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        $(this).val(parts.join("."));

    });

    $(".remove_delete").confirm({
        title:"Confirm Deletion",
        content: "Are you sure you want to remove selected data ? ",
        type:'red',
        buttons:{
            ok:{
                text:'OK',
                btnClass:'btn btn-success',
                action:function () {
                   var href = this.$target.attr('href');
                   if(href){
                       window.location.href = href;
                   }
                }
            },
            close:{
                text:'CLOSE',
                btnClass:'btn btn-warning'
            }
        }
    });


    $("body .view_image").click(function () {
        var title = $(this).attr("title");
        var url = $(this).attr("url");
        var type = $(this).attr("type");
        var width = ($(this).attr("W") ? $(this).attr("W") : 800);
        var height = ($(this).attr("H") ? $(this).attr("H") :500) ;

        var model = $("#myModal");
        model.find(".modal-content").css({height:(parseInt(height)+120)+"px",width:(parseInt(width)+5)+"px"});
        model.find("#model_header").html(title);
        model.find("#model_header").show();

        var object = '<object data="{FileName}" type="'+type+'" width="'+width+'px" height="'+height+'px">';
        object += 'If you are unable to view file, you can download from <a href="{FileName}">here</a>';
        object += '</object>';
        object = object.replace(/{FileName}/g, url);
        model.find("#modal_body").css({height:height+"px",width:width+"px",padding:0});
        model.find("#modal_body").html(object);
        model.find("#model_footer").show();
        model.modal();
    });

})