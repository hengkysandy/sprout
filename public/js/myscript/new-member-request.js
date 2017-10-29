$(function() {

	$(document).on('click','.chooseAction',function(){
		var value = $(this).val();
		var status = value.substring(value.indexOf("|")+1);
        var id = value.substring(0,value.indexOf("|"));
        $('#myModalLabel').html('Are you sure want to '+status+'?')

		var dataHandler = $("#btn-confirmation");
    	var cell1,cell2,url = "";

    	var btn_css = "class='btn btn-danger'";
    	if(status == 'approve') btn_css = "class='btn btn-success'";

		url = "doChangeStatusCompany?id="+id+"&status="+status;
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>Close</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' "+btn_css+">"+status+"</button></a>";

	    dataHandler.html(cell2+cell1);
	});

});
