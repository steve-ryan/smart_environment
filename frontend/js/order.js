$(document).on('click','button.remove-item',function(){
$(this).closest('tr').remove();
return false;
});
