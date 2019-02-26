$(document).ready(function(){
  //form validation


// alert('d')
$('#t-cross').click(function(){
	$('#addCondidate').css({"display":"none"})
})
$('#addCondidate-btn').click(function(){
	console.log('dd');
	// $('#addCondidate').css({"display":"block"})
	$('#addCondidate').toggle(1000,1000);
})

  $('#validate').submit(function(e){
  	e.preventDefault();
    if(true)
    	$(this).unbind(e);
  	
  });

      $('#caddCondidate').click = function() {
        $(document).scrollTo('#addCondidate-d');
    }


  $('input[type="checkbox"]').on('change', function() {
   $('input[type="checkbox"]').not(this).prop('checked', false);
});

  	$('#message').html('').css('color', 'blue');
	$('#message1').html('').css('color', '#f7b7bf');

	$('#passconfm, #pass').on('keyup', function () {
		if ($('#pass').val() == $('#passconfm').val()) {
			$('#message').html('Matching').css('color', 'green');
			$('#message1').html('Matching').css('color', 'green');
		} else {
			$('#message').html('Not Matching').css('color', 'red');
			$('#message1').html('Not Matching').css('color', 'red');
		}

	});
	
	


});