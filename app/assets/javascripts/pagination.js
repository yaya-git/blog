
$('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd',
    startView: 'decade',
    minView: 'month' ,
    language: 'es'   
});


if($('#pagination').length > 0)
{
    
  $('#sel-paginate').on('change', function(){
      
      $('#pagination').submit();
      
  });
    
}



