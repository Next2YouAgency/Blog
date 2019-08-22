$(function(){
    $("#seta").hide();

    $(window).scroll(


        function(e){

            if( $(this).scrollTop() > 50 ){
                $("#seta").fadeIn();
            }

            if( $(this).scrollTop() < 50 ){
                $("#seta").fadeOut();
            }
        }
    );

    $("#seta").click(

        function(e){
            $("html, body").animate(
                {scrollTop: 0},300
            );
        }

    );

    $('a[href^="#"]').on('click',function(event){
        var target = $(this.getAttribute('href'));
//        alert(target);
        if(target.length){
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 500);
        }
    });
});