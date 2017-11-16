$(function() {

	$(document).on('change','#addon-select',function(){
      var addonId = $(this).val();
      // my_url = $('meta[name="fullpath"]').attr('content');
      $.ajax({
          url : "getAddOnPriceAjax/"+addonId,
          dataType: "json",
          success :function(result){
            $('#addon-price').val(result);
        } 
        });
    });

});
