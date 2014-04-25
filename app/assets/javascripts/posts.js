function bindPostEvents(){
    
    $('#posts').validate({
        rules:{
            title:{
                required: true
            },
            content: {
                required:true
            }
        },
        messages:{
            title:{
                required:'Requerido'
            },
            content: {
                required:'Requerido'
            }
        },
        submitHandler: function(form) {
            
            var button = $('#post-save');
            
            $(form).ajaxSubmit({
                beforesend: function(){
                    button.text('Guardando...').addClass('disabled');
                },
                success: function(response){
                    if(response.success === false)
                    {
                        alert('Hubo un error');
                    }
                    
                    if(response.request === 'POST')
                    {
                        form.reset();
                    }
                },
                complete: function(){
                  button.prop('disabled', false);
                },
                dataType: 'json'
            });
        }
    });
}

if($('#posts').length > 0){
    bindPostEvents();
}
