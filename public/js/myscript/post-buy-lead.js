$(function() {
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
	
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

    function reloadBroadcastData(data){
        $("#assigned-tbody").empty();
        $("#notAssigned-tbody").empty();

        $.each( data.notAssigned, function( key, val ) {

            var newRow = $("<tr>");
            var cell1,cell1to2,cell2,cell3,cell4 = "";
            cell1 = "<td>"+(key+1)+"</td>";
            cell2 = "<td>"+val.id+"</td>";
            cell3 = "<td>"+val.name+"</td>";
            cell4 = "<td>"+"<div class='checkbox-company'><label><input type='checkbox' name='listOfCompanyId[]' value="+val.id+"></label></div>"+"</td>";

            
            newRow.html(cell1+cell2+cell3+cell4);
            $("#notAssigned-tbody").append(newRow);
        });


        $.each( data.assigned, function( key, val ) {

            var newRow = $("<tr>");
            var cell1,cell1to2,cell2,cell3,cell4,my_url = "";
            my_url = $('meta[name="fullpathRemoveAssign"]').attr('content')+"?id="+val.id;
            cell1 = "<td>"+(key+1)+"</td>";
            cell2 = "<td>"+val.id+"</td>";
            cell3 = "<td>"+val.name+"</td>";
            cell4 = "<td>"+"<div class='checkbox-company'><label><input type='checkbox' name='listOfCompanyId[]' value="+val.id+"></label></div>"+"</td>";
            cell4 = "<td>"+"<a href="+my_url+" data-value="+val.id+" class='btn btn-sm btn-danger remove-assign'><i class='fa fa-trash'></i></a>"+"</td>";
            
            newRow.html(cell1+cell2+cell3+cell4);
            $("#assigned-tbody").append(newRow);
        });
    }

    $(document).on('click','.remove-assign',function(e){
        e.preventDefault();
        var companyId = $(this).data("value");
        var my_url = $('meta[name="fullpathRemoveAssign"]').attr('content')+"?id="+companyId;
        $.ajax({
                type: "get",
                url: my_url,
                data: { id:companyId }, 
                success: function( data ) {
                    reloadBroadcastData(data);
                }
            });
    });

    $(document).on('click','.add-assign',function(e){
        e.preventDefault();
        var arrCompanyId = $(".checkbox-company input:checkbox:checked").map(function(){
          return $(this).val();
        }).get(); 
        
        var my_url = $('meta[name="fullpathAssignCompany"]').attr('content');
        $.ajax({
                type: "POST",
                url: my_url,
                data: { listOfCompanyId:arrCompanyId }, 
                success: function( data ) {
                    reloadBroadcastData(data);
                }
            });


    });

	$(document).on('change','#sectionOption1',function(){
		var sectionId = $(this).val();
		$.ajax({
        url : "loadDivisionDataAjax/"+sectionId,
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
		var sectionId = $(this).val();
		$.ajax({
        url : "loadDivisionDataAjax/"+sectionId,
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

    //buy lead list
    $(document).on('change','#section-bl-list',function(){
        var sectionName = $(this).val();
        $.ajax({
        url : "loadDivisionDataAjaxbyName?name="+sectionName,
        dataType: "json",
        success :function(result){
            $('#divison-bl-list').empty().append('<option selected="selected" value="">-</option>');
            $("#divison-bl-list").selectpicker("refresh");
            $.each(result,function(key,val){
                $('#divison-bl-list').append($('<option>', { 
                    value: val.description,
                    text : val.description 
                }));
                $("#divison-bl-list").selectpicker("refresh");
            });
        } 
        });

    });

});
