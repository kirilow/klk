

var zzz = $('.slider').slider({
    indicators: true,
    height: 280,
});
var rrr = $(zzz[0]);
var slides = rrr.children('.slides');

var slides_img = slides.find('img');

var indicators = rrr.children('.indicators');
//indicators.addClass('carousel');
var indicator_item = indicators.children('.indicator-item');


$.each( indicator_item, function(inx, indicator_item){
    console.log( indicator_item.style );
    indicator_item.style.backgroundImage = slides_img[inx].style.backgroundImage;
//    $(indicator_item).addClass('carousel-item');
});

$(document).ready(function(){
    $('.materialboxed').materialbox();
});


