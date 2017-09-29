$(document).ready(function(){

	
	$( "#numericWithPlusChar" ).keypress(function() {
	  	return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43);
	});

	$( "#numeric" ).keypress(function() {
	 	return (event.charCode >= 48 && event.charCode <= 57);
	});

	$(document).on('click','.saveDataCompanyRegis1',function(e){
		var success = 0;
		var imgExt = [".jpg", ".png", ".svg"];
		var email_pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		
		if( imgExt.indexOf($('input[name=companyLogoImg]').val().toLowerCase().slice(-4)) == -1 ){
			toastr.error('image extension must be .jpg or .png or .svg');
		}else if( !email_pattern.test($("input[name=email]").val()) ){
			toastr.error('email not valid');
		}else if( $('#province').val() == 0 ){
			toastr.error('province must be selected');
		}else if( $('#package').val() == 0 ){
			toastr.error('package must be selected');
		}else if( $('input[name=password]').val().length < 6 ){
			toastr.error('password length is at least 6 characters');
		}else if( $('input[name=confPass]').val() != $('input[name=password]').val() ){
			toastr.error('Confirm password must be the same with password');
		}else if( $('input[name="interestProgram[]"]:checked').length == 0 ){
			toastr.error('interest Program must be selected');
		}else{
			success = 1;
		}

		if(success == 1) return true;
	        
        return false;

        // console.log( $('input[name=companyName]').val() );
		// console.log( $('input[name=businessEntity]').val() );
		// console.log( $('input[name=companyTagline]').val() );
		// console.log( $('input[name=companyLogoImg]').val() );
		// console.log( $('input[name=email]').val() );
		// console.log( $('#address').val() );
		// console.log( $('input[name=city]').val() );
		// console.log( $('#province').val() );
		// console.log( $('input[name=phoneCode]').val() );
		// console.log( $('input[name=phoneNumber]').val() );
		// console.log( $('input[name=mainProduct]').val() );
		// console.log( $('#package').val() );
		// console.log( $('input[name=password]').val() );
		// console.log( $('input[name=confPass]').val() );
		// console.log( $('input[name=interestProgram]:checked').length );
	});

	$(document).on('click','.saveDataCompanyRegis2',function(e){
		// var success = 0;
		// var imgExt = [".jpg", ".png", ".svg"];
		// var email_pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		
		// if( $('input[name="interestProgram[]"]:checked').length == 0 ){
		// 	toastr.error('interest Program must be selected');
		// }else{
		// 	success = 1;
		// }

		// if(success == 1) return true;
	        
  //       return false;
	});


});