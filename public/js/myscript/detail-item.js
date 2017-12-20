$(function() {

      // console.log(quotation);
      // console.log(buyLead);
      var q = quotation;
      var b = buyLead;
      var fullpathUrl = $('meta[name="base_url"]').attr('content');

	$(document).on('click','.chooseReviseQuote',function(){
		console.log(b.id_area);
		$('#itemQuo').val(b.item);
		$('#amountQuo').val(q.amount);
		$('#totalPriceQuo').val(q.total_price);
		$('#delivery_dayQuo').val(q.delivery_day); 
		$('#paymentTermQuo').val(b.payment_term); 
		$('#quotation_id').val(q.id); 

		$("#unitQuo").find('option')
				    .remove()
				    .end()
					.append($("<option selected></option>")
                    .attr("value",b.id_unit)
                    .text(b.id_unit)); 

        $("#cityQuo option").filter(function(){
            return this.text.toUpperCase() == q.city.toUpperCase();
        }).prop('selected', true);
        $('#cityQuo').selectpicker('refresh');

        $("#shippingTermQuo option").filter(function(){
            return this.value == q.id_shipping_term;
        }).prop('selected', true);
        $('#shippingTermQuo').selectpicker('refresh');

        $("#areaQuo option").filter(function(){
            return this.value == b.id_area;
        }).prop('selected', true);
        $('#areaQuo').selectpicker('refresh');

	});

	$(document).on('click','.chooseDelete',function(){

		var dataHandler = $("#btn-confirmation");
    	var cell1,cell2,url = "";
		
		url = "doDeleteUnit?id="+$(this).val();
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>Close</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' class='btn btn-danger delete-unit'>Delete</button></a>";

	    dataHandler.html(cell2+cell1);
	});

	$(document).on('click','.chooseApproveQuotation',function(){
		var dataHandler = $("#btn-confirmation-approve");
    	var cell1,cell2,url = "";
		
		url = fullpathUrl+"/doApproveQuotation?id="+$(this).val();
	    cell2 = "<button type='button' style='margin:0px 5px' class='btn btn-default' data-dismiss='modal'>No</button>";
	    cell1 = "<a href="+url+"><button type='button' style='margin:0px 5px' class='btn btn-success'>Yes</button></a>";

	    dataHandler.html(cell2+cell1);
	});

	$("a#replyDiscussion").click(function(){
	    var id =$(this).data("value");
	    $('input[name=currDiscussionId]').val(id);
	});

});
