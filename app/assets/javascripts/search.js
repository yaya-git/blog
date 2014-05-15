$('.dropdown-toggle').dropdown();

$('#btn-search').bind('click', function(event){
    
    event.preventDefault();
    
    var avanzado = $('#avanzado');
    var search = $(this);
    var advancedHover = 'advanced-hover';
    var advanceSearch = $('.advanceSearch');
    
//    $('.advanceSearch').slideToggle('normal');
    
    if(!search.hasClass(advancedHover)) 
    {
        avanzado.val('1');
        search.addClass(advancedHover);
        advanceSearch.show();
    }
    else
    {
        search.removeClass(advancedHover);
        avanzado.val('0');
        advanceSearch.hide();
    }
});
    



