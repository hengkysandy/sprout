$(function() {
	


	$("a.chooseEdit").click(function(){
		var buyLeadID = $(this).data("value");
    $('#id_buylead').val(buyLeadID);
		$.ajax({
        url : "getBuyLeadDataAjax/"+buyLeadID,
        dataType: "json",
        success :function(result){
                $('#rfq-number-buy-lead-id').val(result.buyLead.id);
                $('#company-id').val(result.user.id_company);
                $('#item').val(result.buyLead.item);
                $('#amount-val').val(result.buyLead.amount);
                $('.unit-val').text(result.unit.name);
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
