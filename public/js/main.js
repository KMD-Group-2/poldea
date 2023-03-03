$(function () {
    "use strict";
    // ==============================================================
    // Right sidebar options
    // ==============================================================
    $(".right-side-toggle").click(function () {
        $(".error-message").remove();

        $(".right-sidebar").slideDown(50);
        $(".right-sidebar").toggleClass("shw-rside");

        var data = $(this).closest("tr").data("all");

        var _side = $(document)
            .find(".right-sidebar");

        _side.find('input[name=key]').val(data.id);
        _side.find('.user-image').attr('src', data.staff.photo);
        _side.find('.username').html(data.username);
        _side.find('.position').html(data.staff.position.name);
        if(data.active == 0)
        {
            _side.find('.active').attr('class','btn waves-effect waves-light btn-sm ml-auto active btn-danger').html('Inactive');
            _side.find('.status-show').html('Inactive').css('color','red');
            _side.find('input[name=active]').removeAttr('checked');
        }else{
            _side.find('.active').attr('class','btn waves-effect waves-light btn-sm ml-auto active btn-success').html('Active');
            _side.find('.status-show').html('Active').css('color','#0561FC');
            _side.find('input[name=active]').attr('checked','checked');
        }
        _side.find('.last-activity-at').html(new Date(data.last_activity_at).toLocaleString("en-US"));
        _side.find('.created-at').html(new Date(data.created_at).toLocaleString("en-US"));
        _side.find('.custom-select').val(data.roles[0].id);
        _side.find('input[name=department]').val(data.staff.department.name);
        _side.find('input[name=position]').val(data.staff.position.name);
    });

    $(document).on('click', '.close-sidebar',function(e){
        e.preventDefault();
        $(".right-sidebar").slideDown(50);
        $(".right-sidebar").toggleClass("shw-rside");
    })
});
