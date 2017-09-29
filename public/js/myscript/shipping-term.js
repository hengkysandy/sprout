$(function() {

	$(document).on('click','.chooseEdit',function(){
		$('#inputForm').attr('action', 'doUpdateShippingTerm/'+$(this).val());
		$.ajax({
        url : "getShippingTermDataAjax/"+$(this).val(),
        dataType: "json",
        success :function(result){
                $('#title').val(result.shippingTerm.name);
                $('#description').text(result.shippingTerm.description);
        	} 
    	});
	});

	$(document).on('click','.chooseDelete',function(){

		var dataHandler = $("#btn-confirmation");
    	var cell1,cell2,url = "";
		
		url = "doDeleteShippingTerm?id="+$(this).val();
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>Close</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' class='btn btn-danger delete-shipping-term'>Delete</button></a>";

	    dataHandler.html(cell2+cell1);
	});

});
