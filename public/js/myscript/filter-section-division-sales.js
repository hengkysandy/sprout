$(function() {
    var fullpath = $('meta[name="fullpath"]').attr('content');    
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
	
    $(document).on('change','#section-sales-cd',function(){
        var sectionName = $(this).val();
        
        $.ajax({
        url : fullpath+"/loadDivisionDataAjaxbyName?name="+sectionName,
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

    $(document).on('change','#section-sales-cd',function(){
        var sectionName = $(this).val();
        $.ajax({
        url : fullpath+"/loadDivisionDataAjaxbyName?name="+sectionName,
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
