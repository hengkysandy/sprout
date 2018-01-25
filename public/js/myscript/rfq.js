$(function() {
	
  var fullpathUrl = $('meta[name="fullpath"]').attr('content');

	$("a.chooseEdit").click(function(){

		var buyLeadID = $(this).data("value");
    $('#id_buylead').val(buyLeadID);
		$.ajax({
        url : fullpathUrl+"/getBuyLeadDataAjax/"+buyLeadID,
        dataType: "json",
        success :function(result){
                $('#rfq-number-buy-lead-id').val(result.buyLead.id);
                $('#company-id').val(result.user.id_company);
                $('#item').val(result.buyLead.item);
                $('#amount-val').val(result.buyLead.amount);
                $('.unit-val').text(result.unit.name);

                $('#divisionOption1').empty().selectpicker("refresh");
                $('#divisionOption2').empty().selectpicker("refresh");
                $('#groupOption1').empty().selectpicker("refresh");
                $('#groupOption2').empty().selectpicker("refresh");

                if( typeof result.bc[0] !== 'undefined' ){
                  $('#bc1').val(result.bc[0].id);
                  $("#sectionOption1 > option").each(function() {
                      if(this.value == result.bc[0].section.id){
                        $('#sectionOption1').val(this.value);
                        $("#sectionOption1").selectpicker("refresh");
                      }
                  });

                  if( result.bc[0].id_division != null){
                    $('#divisionOption1').append($('<option>', { 
                        value: result.bc[0].division.id,
                        text : result.bc[0].division.description
                    }));
                    $("#divisionOption1").selectpicker("refresh");
                  }

                  if( result.bc[0].id_group != null){
                    $('#groupOption1').append($('<option>', { 
                        value: result.bc[0].group.id,
                        text : result.bc[0].group.description
                    }));
                    $("#groupOption1").selectpicker("refresh");
                  }
                }
                
                if( typeof result.bc[1] !== 'undefined' ){
                    $('#bc2').val(result.bc[1].id);
                    $("#sectionOption2 > option").each(function() {
                        if(this.value == result.bc[1].section.id){
                          $('#sectionOption2').val(this.value);
                          $("#sectionOption2").selectpicker("refresh");
                        }
                    });

                    if( result.bc[1].id_division != null){
                      $('#divisionOption2').append($('<option>', { 
                          value: result.bc[1].division.id,
                          text : result.bc[1].division.description
                      }));
                      $("#divisionOption2").selectpicker("refresh");
                    }

                    if( result.bc[1].id_group != null){
                      $('#groupOption2').append($('<option>', { 
                          value: result.bc[1].group.id,
                          text : result.bc[1].group.description
                      }));
                      $("#groupOption2").selectpicker("refresh");
                    }
                }

        	} 
    	});
	});

    $(document).on('change','#sectionOption1',function(){
      var sectionId = $(this).val();
      $('#groupOption1').empty().append('<option selected="selected">-</option>');
      $("#groupOption1").selectpicker("refresh");
      $.ajax({
          url : fullpathUrl+"/loadDivisionDataAjax/"+sectionId,
          dataType: "json",
          success :function(result){
            $('#divisionOption1').empty().append('<option selected="selected">-</option>');
            $("#divisionOption1").selectpicker("refresh");
            $.each(result,function(key,val){
                  $('#divisionOption1').append($('<option>', { 
                      value: val.id,
                      text : val.description 
                  }));
              $("#divisionOption1").selectpicker("refresh");
              });
        } 
        });
    });

    $(document).on('change','#divisionOption1',function(){
      var divisionId = $(this).val();
      $.ajax({
          url : fullpathUrl+"/loadGroupDataAjax/"+divisionId,
          dataType: "json",
          success :function(result){
            $('#groupOption1').empty().append('<option selected="selected">-</option>');
            $("#groupOption1").selectpicker("refresh");
            $.each(result,function(key,val){
                  $('#groupOption1').append($('<option>', { 
                      value: val.id,
                      text : val.description 
                  }));
              $("#groupOption1").selectpicker("refresh");
              });
        } 
        });
    });

    $(document).on('change','#sectionOption2',function(){
      var sectionId = $(this).val();
      $('#groupOption2').empty().append('<option selected="selected">-</option>');
      $("#groupOption2").selectpicker("refresh");
      $.ajax({
          url : fullpathUrl+"/loadDivisionDataAjax/"+sectionId,
          dataType: "json",
          success :function(result){
            $('#divisionOption2').empty().append('<option selected="selected">-</option>');
            $("#divisionOption2").selectpicker("refresh");
            $.each(result,function(key,val){
                  $('#divisionOption2').append($('<option>', { 
                      value: val.id,
                      text : val.description 
                  }));
              $("#divisionOption2").selectpicker("refresh");
              });
        } 
        });
    });

    $(document).on('change','#divisionOption2',function(){
      var divisionId = $(this).val();
      $.ajax({
          url : fullpathUrl+"/loadGroupDataAjax/"+divisionId,
          dataType: "json",
          success :function(result){
            $('#groupOption2').empty().append('<option selected="selected">-</option>');
            $("#groupOption2").selectpicker("refresh");
            $.each(result,function(key,val){
                  $('#groupOption2').append($('<option>', { 
                      value: val.id,
                      text : val.description 
                  }));
              $("#groupOption2").selectpicker("refresh");
              });
        } 
        });
    });

		// $('#inputForm').attr('action', 'doUpdateUnit/'+$(this).val());
		// $.ajax({
  //       url : "getUnitDataAjax/"+$(this).val(),
  //       dataType: "json",
  //       success :function(result){
  //               $('#unit-name').val(result.unit.name);
  //               $('#unit-description').text(result.unit.description);
  //       	} 
  //   	});

});
