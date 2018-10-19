
var elem = document.querySelector('.collapsible.expandable');

var instance = M.Collapsible.init(elem, {
  accordion: false
});

var second_menu = document.querySelector('.collapsible.second_menu');
var instance_second_menu = M.Collapsible.init(second_menu, {
  accordion: true
});

$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown({ 
        coverTrigger: false,
        constrainWidth: false
    });
    $('.collapsible').collapsible({
        accordion: false,
    });
});

$(document).on('click','.drilldown',function(){
    $(this).parent().toggleClass('active-drilldown');
});

$(document).on('click','#left_menu_width',function(){
    var ths = $(this);
    ths.addClass('left_menu_min')
    ths.find('.material-icons').text('arrow_forward');
    ths.closest('p').removeClass('right-align').addClass('center-align');
    $('#left_menu').css({'width':'3rem'});
    $('.page_container').css({'padding-left':'3rem'});
    $('footer').css({'padding-left':'3rem'});
});

$(document).on('click','.left_menu_min',function(){
    var ths = $(this);
    ths.removeClass('left_menu_min')
    ths.find('.material-icons').text('arrow_back');
    ths.closest('p').removeClass('center-align').addClass('right-align');
    $('#left_menu').css({'width':'15rem'});
    $('.page_container').css({'padding-left':'15rem'});
    $('footer').css({'padding-left':'15rem'});
});

