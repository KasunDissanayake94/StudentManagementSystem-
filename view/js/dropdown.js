/**
 * Created by Kasun Dissanayake on 10/6/2017.
 */
$('ul.sf-menu li.dropdown').hover(function() {


    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
