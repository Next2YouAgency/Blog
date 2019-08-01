$(function(){
    $("#seta").hide();

    $(window).scroll(


        function(e){

            if( $(this).scrollTop() > 50 ){
                $("#seta").fadeIn();
                $("#seta").animate({
                    right: 0,
                    bottom: 0,
                    width: 100,
                    height: 50,
                    backgroundColor: "dddddd"
                })
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