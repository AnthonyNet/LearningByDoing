(function($) {

    //Hide words menu
    $(document).ready(function(){
        $('.choose_words_section li').hide();
       
        
    });

    $('#anglictina_slova1').addClass('show');

        // Show&hide words menu
            $('.show_sectionsMenu').click(function()
        {
            $('.choose_words_section li').toggle(1000) &&
            $('.cover_8_words').show(1000);
           // $('.show').show();

           $('.choose_words_section li').on('click',function(){
            var eq = $(this).index();
            
            $('.cover_8_words').addClass('hide');
            $('.cover_8_words').eq(eq).removeClass('hide');
         });
        });

       

        

        //Show & hide all words
        $('#vsecko').click(function()
        {
            $('.cover_8_words').removeClass('hide');
            $('.cover_8_words').hide(200);
            $('.cover_8_words').toggle(200);
        });

        //Close all
        $('#words_closeAll').click(function(){
            $('.choose_words_section li').hide();
            $('.cover_8_words').hide();
        })


    const containers = $('.cover_8_words');

   

  
 //Show random section of words
    $("#random").click(function(){
        $('.cover_8_words').removeClass('hide');
        $('.choose_words_section li').hide(1000);
        containers.hide()
        var arrayId = [];
    $("#container > div").each((index, elem) => {
    arrayId.push(elem.id);
    });

    console.log(arrayId);

    let randomCislo = Math.floor(Math.random()*arrayId.length)
    let randomElement = arrayId[randomCislo];
    let randomId = "#" +randomElement

    console.log(randomId)

        $(randomId).show()
        
    });

    // Show translation of word
    $('.words_cover dd').hide();

     // Show&hide words menu
     $('.words_cover dt').click(function()
     {
         $(this).siblings("dd").toggle(500);

     });

     //SHOW up GO TOP BUTTON

     $(window).scroll(function(){
		const scrolled = $(window).scrollTop();
		if(scrolled > 200) $('.go-top').fadeIn('slow');
		if(scrolled < 200) $('.go-top').fadeOut('slow');
	
	});

    

     //GO TOP BUTTON
     $('.go-top').click(function(){
         $("html, body").animate({scrollTop: "0"},1000);
     });

    // Choose one Irregular Card || Show ALL

    $('.cardIrr').addClass('show');

        $('.menu-karty2 li').on('click',function(){
         let eq2 = $(this).index();
         
         $('.cardIrr').addClass('hide');
         $('.cardIrr').eq(eq2-1).removeClass('hide');
      });
     
      $('.showAllCards').on('click', function() {
          $('.cardIrr').removeClass('hide');
      });

})(jQuery);




