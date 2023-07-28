window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

$(function(){
    $('ul a').click(function(){
        var href = $(this).attr('href');
        var offSetTop = $(href).offset().top;
        
        $('html,body').animate({'scrollTop':offSetTop}, 'slow')
        
    })
})	

function myFunction(x) {
  x.classList.toggle("change");
}

$(function(){

    $('.menu-mobile').click(function(){
        $('.menu-mobile').find('ul').slideToggle();
    })
})

function myFunction(x) {
    x.classList.toggle("change");
}

$(function(){
	$('.menu-mobile').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
})