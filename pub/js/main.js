
//var elem = document.querySelector('.collapsible.expandable');
//
//var instance = M.Collapsible.init(elem, {
//  accordion: false
//});

//var second_menu = document.querySelector('.collapsible.second_menu');
//var instance_second_menu = M.Collapsible.init(second_menu, {
//  accordion: true
//});

//function loadJs(jsFile){
//    $.getScript("/pub/js/"+jsFile+"}", function (data, textStatus, jqxhr) {
//        return textStatus;
//    });
//}

$(document).ready(function () {
    $('.carousel').carousel({ 
        dist: 0,
        no_wrap: true,
        padding:5,
        fullWidth: true,
    });
    $('.modal').modal({
        onOpenStart: function (el) {
            $(el).children('.modal-header').append('<i class="material-icons modal-close close_modal">close</i>')
        }
    });
//    $('document').on('click','.close_modal',function(){
//        $('.modal').modal('close');
//    });
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown({ 
        coverTrigger: false,
        constrainWidth: false
    });
    $('.collapsible').collapsible({
        accordion: false,
    });
    $('#pushpin-demo-nav').each(function () {
        var $this = $(this);
        var $target = $('#' + $(this).attr('data-target'));
        $this.pushpin({
            top: $target.offset().top,
            bottom: $target.offset().top + $target.outerHeight() - $this.height()
        });
    });
    
//    loadJs('home.js');
    
    
    
    
});

$(document).on('click','.prev_caroucel',function(){
    $('#homepage_carousel').carousel('prev');
});
$(document).on('click','.next_caroucel',function(){
    $('#homepage_carousel').carousel('next');
});

