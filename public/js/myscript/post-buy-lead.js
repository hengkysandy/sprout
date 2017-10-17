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

	$(document).on('change','#sectionOption1',function(){
		var divisionId = $(this).val();
		$.ajax({
        url : "loadDivisionDataAjax/"+divisionId,
        dataType: "json",
        success :function(result){
        	$('#divisionOption1').empty().append('<option selected="selected">-</option>');
        	$("#divisionOption1").selectpicker("refresh");
        	$.each(result,function(key,val){
                $('#divisionOption1').append($('<option>', { 
                    value: val.id,
                    text : val.name 
                }));
        		$("#divisionOption1").selectpicker("refresh");
            });
    	} 
    	});
	});

	$(document).on('change','#divisionOption1',function(){
		var divisionId = $(this).val();
		$.ajax({
        url : "loadGroupDataAjax/"+divisionId,
        dataType: "json",
        success :function(result){
        	$('#groupOption1').empty().append('<option selected="selected">-</option>');
        	$("#groupOption1").selectpicker("refresh");
        	$.each(result,function(key,val){
                $('#groupOption1').append($('<option>', { 
                    value: val.id,
                    text : val.name 
                }));
        		$("#groupOption1").selectpicker("refresh");
            });
    	} 
    	});
	});

	$(document).on('change','#sectionOption2',function(){
		var divisionId = $(this).val();
		$.ajax({
        url : "loadDivisionDataAjax/"+divisionId,
        dataType: "json",
        success :function(result){
        	$('#divisionOption2').empty().append('<option selected="selected">-</option>');
        	$("#divisionOption2").selectpicker("refresh");
        	$.each(result,function(key,val){
                $('#divisionOption2').append($('<option>', { 
                    value: val.id,
                    text : val.name 
                }));
        		$("#divisionOption2").selectpicker("refresh");
            });
    	} 
    	});
	});

	$(document).on('change','#divisionOption2',function(){
		var divisionId = $(this).val();
		$.ajax({
        url : "loadGroupDataAjax/"+divisionId,
        dataType: "json",
        success :function(result){
        	$('#groupOption2').empty().append('<option selected="selected">-</option>');
        	$("#groupOption2").selectpicker("refresh");
        	$.each(result,function(key,val){
                $('#groupOption2').append($('<option>', { 
                    value: val.id,
                    text : val.name 
                }));
        		$("#groupOption2").selectpicker("refresh");
            });
    	} 
    	});
	});


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
