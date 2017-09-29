$(function() {

	$(document).on('click','.chooseEdit',function(){
		$('#inputForm').attr('action', 'doUpdateArea/'+$(this).val());
		$.ajax({
        url : "getAreaDataAjax/"+$(this).val(),
        dataType: "json",
        success :function(result){
        	console.log(result);
                $('#name').val(result.area.name);
        	} 
    	});
	});

	$(document).on('click','.chooseDelete',function(){
		var dataHandler = $("#btn-confirmation");
    	var cell1,cell2,url = "";
		
		url = "doDeleteArea?id="+$(this).val();
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>Close</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' class='btn btn-danger delete-shipping-term'>Delete</button></a>";

	    dataHandler.html(cell2+cell1);
	});

});
