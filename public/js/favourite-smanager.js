$(document).ready(function(){
  
$('body').on('click','.favourite', function(event){
  $favourite = $(this);
  if($favourite.hasClass('favourite-true')==true){
    console.log('first');
    $('#cancelFavourite').modal('show');
    }else{
      $('#addFavourite').modal('show');
    }
});

$('body').on('click', '.btn-cancel-fav', function(event){
    console.log($favourite);
    $favourite.removeClass('favourite-true');
    $favourite.addClass('favourite-false');
    $favourite.children('.fa').removeClass('fa-star');
    $favourite.children('.fa').addClass('fa-star-o');

    iziToast.error({
    title: 'This Company',
    message: 'has been removed to favourite',
    position: 'topRight',
    transitionIn: 'bounceInLeft',

    onOpen: function(instance,toast){
    },

    onClose: function(instance, toast, closedBy){
      console.info('closedBy:' + closedBy)
    }
  });
});

$('body').on('click', '.btn-add-fav', function(event){
    console.log($favourite);
    $favourite.addClass('favourite-true');
      $favourite.removeClass('favourite-false');
      $favourite.children('.fa').addClass('fa-star');
      $favourite.children('.fa').removeClass('fa-star-o');
      iziToast.success({
      title: 'This Company',
      message: 'has been added from favourite',
      position: 'topRight',
      transitionIn: 'bounceInLeft',

      onOpen: function(instance,toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy:' + closedBy)
      }
    });
});
});