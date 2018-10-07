
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
});

