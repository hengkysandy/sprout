$(function() {
	$(document).on('click','.chooseEditSection',function(){
		$('#inputFormSection').attr('action', 'doUpdateSection/'+$(this).val());
		$.ajax({
        url : "getSectionDataAjax/"+$(this).val(),
        dataType: "json",
        success :function(result){
        	console.log(result);
                $('#section').val(result.section.section);
                $('#section-name').val(result.section.name);
        	} 
    	});
	});

	$(document).on('click','.chooseEditGroup',function(){
		$('#inputFormGroup').attr('action', 'doUpdateGroup/'+$(this).val());
		$.ajax({
        url : "getGroupDataAjax/"+$(this).val(),
        dataType: "json",
        success :function(result){
        	console.log(result);
                $('#name-group').val(result.group.name);
                $('#description-group').val(result.group.description);
        	} 
    	});
	});

	$(document).on('click','.chooseEditDivision',function(){
		$('#inputFormDivision').attr('action', 'doUpdateDivision/'+$(this).val());
		$.ajax({
        url : "getDivisionDataAjax/"+$(this).val(),
        dataType: "json",
        success :function(result){
        	console.log(result);
                $('#name').val(result.division.name);
                $('#description').val(result.division.description);
        	} 
    	});
	});

	$(document).on('click','.chooseDelete',function(){
		var value = $(this).val();
		var category = value.substring(value.indexOf("|")+1);
        var id = value.substring(0,value.indexOf("|"));
        console.log(id);
		var dataHandler = $("#btn-confirmation");
    	var cell1,cell2,url = "";
		
		url = "doDelete"+category+"?id="+id;
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>Close</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' class='btn btn-danger delete-shipping-term'>Delete</button></a>";

	    dataHandler.html(cell2+cell1);
	});

	$(document).on('change','#groupAddSec',function(){
		var sectionId = $(this).val();
		$.ajax({
        url : "loadDivisionDataAjax/"+sectionId,
        dataType: "json",
        success :function(result){

        	$('#groupAddDiv').empty().append('<option selected="selected">-</option>');
        	$("#groupAddDiv").selectpicker("refresh");
        	$.each(result,function(key,val){
                $('#groupAddDiv').append($('<option>', { 
                    value: val.id,
                    text : val.description 
                }));
        		$("#groupAddDiv").selectpicker("refresh");
            });
    	} 
    	});
	});

});
