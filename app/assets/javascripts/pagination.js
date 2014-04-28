$('.pagina').click(function(e){
    e.preventDefault();
});


$('#txtPage').on('keypress', function(){
    $(this).focus();
    console.log($(this).closest('a').prop('href'));
    
});

