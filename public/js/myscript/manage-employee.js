$(function() {
	$(document).on('click','.chooseEditUser',function(){
        var id = $(this).data("value");
        $('#userId').val(id);
		$.ajax({
        url : "getUserDataAjax/"+id,
        dataType: "json",
        success :function(result){
            $('#firstName').val(result.first_name);
            $('#lastName').val(result.last_name);
            $('#email').val(result.email);
            $('#username').val(result.username);
            $('#jobTitle').val(result.job_title);
            $("#photoImage").attr("src", result.photo_image);
        	} 
    	});
	});

});
