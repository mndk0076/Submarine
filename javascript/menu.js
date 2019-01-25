jQuery(document).ready(function(){
    $('.content-container').hide();
    
$('h2').click(function(){
    $('.content-container').slideUp(3000);
    $(this).next('.content-container').slideToggle(3000);
});

});