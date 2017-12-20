$(function() {
	$(document).on('click','.chooseAddEmployee',function(){
        $('.add-on-title').text('Add Employee');
	});

	var fullpathUrl = $('meta[name="fullpath"]').attr('content');

	$(document).on('click','.add-section',function(){
        var checkedVal = $("input:radio.sectionRadios:checked").val();
        var section = $("input:radio.sectionRadios:checked").closest("tr").find("td:nth-child(2)").html();
        $('#section-box').val(section);
        $('#division-box').val('');
        var dataHandler = $("#division-tbody");
        dataHandler.html("");

        $.ajax({
        url : fullpathUrl+"/loadDivisionDataAjax/"+checkedVal,
        dataType: "json",
        success :function(result){

        	$.each(result,function(key,val){
        		var newRow = $("<tr>");
                var cell1,cell2,cell3 = "";
                cell1 = "<td>"+val.name+"</td>";
                cell2 = "<td>"+val.description+"</td>";
                cell3 = "<td>"+"<div class='radio'><label><input type='radio' name='optionsRadios' class='divisionRadios' value="+val.id+"></label></div>"+"</td>";

                newRow.html(cell1+cell2+cell3);
                dataHandler.append(newRow);
        	});
        	
    	} 
    	});

	});

	$(document).on('click','.add-division',function(){
        var checkedVal = $("input:radio.divisionRadios:checked").val();
        var division = $("input:radio.divisionRadios:checked").closest("tr").find("td:nth-child(2)").html();
        $('#division-box').val(division);
        $('#group-box').val('');
        var dataHandler = $("#group-tbody");
        dataHandler.html("");

        $.ajax({
        url : fullpathUrl+"/loadGroupDataAjax/"+checkedVal,
        dataType: "json",
        success :function(result){

        	$.each(result,function(key,val){
        		var newRow = $("<tr>");
                var cell1,cell2,cell3 = "";
                cell1 = "<td>"+val.name+"</td>";
                cell2 = "<td>"+val.description+"</td>";
                cell3 = "<td>"+"<div class='radio'><label><input type='radio' name='optionsRadios' class='groupRadios' value="+val.id+"></label></div>"+"</td>";

                newRow.html(cell1+cell2+cell3);
                dataHandler.append(newRow);
        	});
        	
    	} 
    	});

	});

	$(document).on('click','.add-group',function(){
        var checkedVal = $("input:radio.groupRadios:checked").val();
        var group = $("input:radio.groupRadios:checked").closest("tr").find("td:nth-child(2)").html();
        $('#group-box').val(group);
        $('input[name=groupId]').val( checkedVal );

	});



});
