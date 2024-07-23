$(document).ready(function(){
	$("#Addproduct").submit(function (e) {
        e.preventDefault();
  var formData = new FormData(this);
  var name=$('#name').val();
  var slug=$('#slug').val();
  var price=$('#price').val();
  var size=$('#size').val();
  var description=$('#description').val();
  var profile=$('#file').val();
  if(name == ''){
	$('.name_error').html('name is required');
	return false ;
  }else {
	$('.name_error').html('');
  }
  if(slug == ''){
	$('.slug_error').html('slug is required');
	return false ;
  }else {
	$('.slug_error').html('');
  }
  if(price == ''){
	$('.price_error').html('price is required');
	return false ;
  }else {
	$('.price_error').html('');
  }
  if(size == ''){
	$('.size_error').html('size is required');
	return false ;
  }else {
	$('.size_error').html('');
  }
  if(description == ''){
	$('.description_error').html('description is required');
	return false ;
  }else {
	$('.description_error').html('');
  }
  if(profile == ''){
	$('.file_error').html('Profile is required');
	return false ;
  }else {
	$('.file_error').html('');
  }
  $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
            $.ajax({
                type:'POST',
                url:"/Addproduct", 
                data: formData,
                processData: false,
                 contentType: false,
                success: function (data) {
                    console.log(data);
                   
                      $("#Addproduct").trigger('reset');
                },
                
            });
  });
});