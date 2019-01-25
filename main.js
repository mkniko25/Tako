$(function(){
    $('.js-formArea').on('submit', function (e) {
        e.preventDefault();
        
        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {
                num: $('.js-get-val-num').val(),
                unit: $('.js-get-val-unit').val()
            }
        }).done(function(data,status){
            console.log(data);
            console.log(status);
            
            var modalWidth = $('.js-show-modal-target').width();
            var windowWidth = $(window).width();

            $('.js-show-modal-target').attr('style','margin-left: ' + (windowWidth/2 - modalWidth/2) + 'px');
            $('.js-show-modal-target').show();
            $('.js-show-modal-cover').show();
            
            $('.js-set-html').html(data);
        });
        
    });
    
    $('.js-hide-modal').on('click', function () {
        $('.js-show-modal-target').hide();
        $('.js-show-modal-cover').hide();
    });
});

