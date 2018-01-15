$(function() {
	$(document).on('click','.chooseEditUser',function(){
        var id = $(this).data("value");
        $('#userId').val(id);
		$.ajax({
        url : "getUserDataAjax/"+id,
        dataType: "json",
        success :function(result){
            $('#firstName').val(result.first_name);
            $('#lastName').val(result.last_name);
            $('#email').val(result.email);
            $('#username').val(result.username);
            $('#jobTitle').val(result.job_title);
            $("#photoImage").attr("src", result.photo_image);
        	} 
    	});
	});
    //for company add on at pop up readtive
    $changeAddOnPrice = 0;
    $changePackagePrice = 0;
    
    $('input[name="listOfCompAddOnId[]"]').click(function(){

        $listOfChecked = $('input[name="listOfCompAddOnId[]"]:checked').map(function () {
          return this.value;
        }).get();

        $year = parseInt($('#yearDuration').val());
        $packageId = $('#package').val();
        $date = new Date($('.account-duration').val());
        $expired = new Date($date.getFullYear() + $year, $date.getMonth(), $date.getDate());
        $datediff_day = Math.floor( ( $expired - new Date())/1000/60/60/24 );

        $changeAddOnPrice = 0;
        $.each($listOfChecked, function(idx, val){
            $currVal = val;
            $.each($currCompanyAddOn,function(index, value){
             if($currVal == value.id){
                $changeAddOnPrice += value.add_on.price * value.quantity;
                return;
             }
            });
        });
        $('#reactivePrice').val('');
        $('#reactivePrice').val( ($changeAddOnPrice * $datediff_day) + $changePackagePrice );

    });
    
    $(document).on('change','#package, #yearDuration',function(){
        $year = parseInt($('#yearDuration').val());
        $packageId = $('#package').val();
        $date = new Date($('.account-duration').val());
        $expired = new Date($date.getFullYear() + $year, $date.getMonth(), $date.getDate());
        $datediff_day = Math.floor( ( $expired - new Date())/1000/60/60/24 );

        $.each($package,function(index, value){
            if($packageId == value.id){
                $packagePrice = value.price;
                return;
            }
        });

        $changePackagePrice = $packagePrice * $year;
        $('#reactivePrice').val('');
        $('#reactivePrice').val( ($changeAddOnPrice * $datediff_day) + $changePackagePrice );
    });

});
