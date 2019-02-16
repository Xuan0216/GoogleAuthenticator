jQuery(function($) {
	/*
	| ----------------------------------------------------------------------------------
	| Contact us form validation
	| ----------------------------------------------------------------------------------
	*/
	$('#contact-form').on('submit', function(e) {
		e.preventDefault();
		// we clear error messages
		$(this).find('.error').removeClass('error');
		$(this).find('.err_msg').fadeOut(200);
		
		// validate form
		var validation = validate_contact(e);
		
		for (var i = 0; i < validation.length; i++) 
		{
			$(validation[i]).addClass('error');
		}
		
		if ( validation.length ) 
		{
			$('body, html').animate( { 'scrollTop': $(validation[0]).offset().top - 100 }, 'easeInCube', function() {
				$(this).select();
			});
			return false;
		}
		else
		{
			submit_form(e);
			return true;
		}
	});
	
	function validate_contact(e) {
		var $form = $(e.target);
		var rule, val, bad_fields = new Array();
		$form.find('input, textarea').each(function() {
			rule = $(this).data('validate');
			if ( ! rule ) return;
			
			val = $(this).val();
			if ( ! val.match(rule) )
			{
				bad_fields.push(this);
			}
		});
		return bad_fields;
	}
	
	
	/*
	| ----------------------------------------------------------------------------------
	| Contact us form submit
	| ----------------------------------------------------------------------------------
	*/
	function submit_form(e) {
		var $form = $(e.target),
			$btn = $form.find('button'),
			btn_text = $btn.text();
		$.ajax({
			url: 'inc/phpmailer/contact.php',
			data: $form.serialize(),
			dataType: 'json',
			type: 'POST',
			beforeSend: function() {
				$('#contact_fail .alert-inner').empty();
				$('#contact_fail').hide();
				$btn.attr('disabled', 'disabled').addClass('btn-disabled').css('cursor', 'wait').text('Sending...');
			},
			success: function(result) {
				if ( typeof result.success == 'undefined' )
				{
					// form is not valid, display errors
					for ( var x in result )
					{
						$('#contact_fail .alert-inner').append('<p>' + result[x] + '</p>');
					}
					$('#contact_fail').fadeIn();
				}
				else
				{
					// form sent successfully and without errors
					$('#contact_success').fadeIn(700, function() {
						var $this = $(this);
						setTimeout(function() {
							$this.fadeOut();
						}, 5000);
					});
				}
			},
			complete: function() {
				$btn.removeAttr('disabled', 'disabled').removeClass('btn-disabled').css('cursor', 'pointer').html(btn_text);
			},
			error: function(jqXHR, textStatus, errorThrown) {
				switch (jqXHR.status)
				{
					case 404:
						alert("We're Sorry... The file you are looking for is not found :(");
						break;
					case 500,200:
						$('#contact_fail .alert-inner').append("<p>Oops, something went wrong and we couldn't send your message :(</p>");
						$('#contact_fail').fadeIn();
						break;
					default:
						console.log(jqXHR, textStatus, errorThrown);
				}
			}
		});
	}
});