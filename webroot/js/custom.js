$(document).ready(function(){
    $('.overall-rating').each(function() {
        if (parseFloat($(this).find('#avgrat').text()) > 4) $(this).find('#avgrat').css("background-color", "#007400");
        else if (parseFloat($(this).find('#avgrat').text()) > 3) $(this).find('#avgrat').css("background-color", "#98bf6a");
        else if (parseFloat($(this).find('#avgrat').text()) > 2) $(this).find('#avgrat').css("background-color", "#e57a00");
        else if (parseFloat($(this).find('#avgrat').text()) > 1) $(this).find('#avgrat').css("background-color", "#a3171a");
        else if (parseFloat($(this).find('#avgrat').text()) > 0) $(this).find('#avgrat').css("background-color", "gray");
    });
});