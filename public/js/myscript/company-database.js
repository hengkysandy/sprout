$(function() {
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
	
    
    $(document).on('change','#section-purchase-cd',function(){
        var sectionName = $(this).val();
        $.ajax({
        url : "loadDivisionDataAjaxbyName?name="+sectionName,
        dataType: "json",
        success :function(result){
            $('#div-purchase-cd').empty().append('<option selected="selected" value="">-</option>');
            $("#div-purchase-cd").selectpicker("refresh");
            $.each(result,function(key,val){
                $('#div-purchase-cd').append($('<option>', { 
                    value: val.description,
                    text : val.description 
                }));
                $("#div-purchase-cd").selectpicker("refresh");
            });
        } 
        });
    });

    $(document).on('change','#section-sales-cd',function(){
        var sectionName = $(this).val();
        $.ajax({
        url : "loadDivisionDataAjaxbyName?name="+sectionName,
        dataType: "json",
        success :function(result){
            $('#div-sales-cd').empty().append('<option selected="selected" value="">-</option>');
            $("#div-sales-cd").selectpicker("refresh");
            $.each(result,function(key,val){
                $('#div-sales-cd').append($('<option>', { 
                    value: val.description,
                    text : val.description 
                }));
                $("#div-sales-cd").selectpicker("refresh");
            });
        } 
        });
    });

});
