$(function() {
	var datediff_day = Math.floor( (new Date( new Date(Date.parse($('#addon-expired').val())) ) - new Date())/1000/60/60/24 );
  $(document).on('change','#addon-select',function(){
      var addonId = $(this).val();
      // new Date(end - start)
      var total_price = 

      // my_url = $('meta[name="fullpath"]').attr('content');
      $.ajax({
          url : "getAddOnPriceAjax/"+addonId,
          dataType: "json",
          success :function(result){
            $('#addon-price').val((result * $('#addon-qty').val())*datediff_day);
        } 
        });
    });

  $(document).on('change','#addon-qty',function(){
      var addonId = $('#addon-select').val();

      // my_url = $('meta[name="fullpath"]').attr('content');
      $.ajax({
          url : "getAddOnPriceAjax/"+addonId,
          dataType: "json",
          success :function(result){
            $('#addon-price').val((result * $('#addon-qty').val())*datediff_day);
        } 
        });
    });

});
