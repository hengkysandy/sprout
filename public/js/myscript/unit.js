$(function() {
	$(document).on('click','.chooseEditUnit',function(){
		$('#inputForm').attr('action', 'doUpdateUnit/'+$(this).val());
		$.ajax({
        url : "getUnitDataAjax/"+$(this).val(),
        dataType: "json",
        success :function(result){
                $('#unit-name').val(result.unit.name);
                $('#unit-description').text(result.unit.description);
        	} 
    	});
	});

	$(document).on('click','.chooseDeleteUnit',function(){

		var dataHandler = $("#btn-confirmation");
    	var cell1,cell2,url = "";
		
		url = "doDeleteUnit?id="+$(this).val();
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>Close</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' class='btn btn-danger delete-unit'>Delete</button></a>";

	    dataHandler.html(cell2+cell1);
	});

});
