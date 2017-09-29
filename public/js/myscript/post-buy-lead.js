$(function() {
	
	// $(document).on('click','.chooseEdit',function(){
	// 	$('#inputForm').attr('action', 'doUpdateUnit/'+$(this).val());
	// 	$.ajax({
 //        url : "getUnitDataAjax/"+$(this).val(),
 //        dataType: "json",
 //        success :function(result){
 //                $('#unit-name').val(result.unit.name);
 //                $('#unit-description').text(result.unit.description);
 //        	} 
 //    	});
	// });

	$(document).on('click','.chooseConfirmation',function(){
		console.log($(this).val());
		var dataHandler = $("#btn-confirmation-buy-lead");
		var idBuyLead = $(this).val().substr(0,$(this).val().indexOf("|"));
		var idStatus = $(this).val().substring(2);
    	var cell1,cell2,url = "";
    	var btnName = "Cancel";
    	var btnClass = "class='btn btn-danger'";
    	if(idStatus == "2"){
    		btnName = "Release";
    		btnClass = "class='btn btn-primary'"; 
    	}
		
		url = "doChangeStatusBuyLead?idBuyLead="+idBuyLead+"&idStatus="+idStatus;
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>Close</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' "+btnClass+">"+btnName+"</button></a>";

	    dataHandler.html(cell2+cell1);
	});

});
