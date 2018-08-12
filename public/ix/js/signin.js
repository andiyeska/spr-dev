$(function() {

    $('#signin-form-link').click(function(e) {
		$("#signin-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#signin-form").fadeOut(100);
		$('#signin-form-link').removeClass('active');
		$('.panel').css('width: 150%;');
		$(this).addClass('active');
		e.preventDefault();
	});

});

$(document).ready(function() {
	$('#pw1').on('input propertychange paste', function() {
		$pw1 = $(this).val();

		if($pw1.length < 8) {
			$('.pw').addClass('has-error');
			$('.pw-length-alert').show();
			$('.pw-alert').hide();
			$('#register-submit').prop('disabled', true);
		} else {
			$('.pw').removeClass('has-error');
			$('.pw-length-alert').hide();
			pwCheck();
		}

	});
	$('#pw2').on('input propertychange paste', function() {
		pwCheck();
	});

	function pwCheck() {
		$pw1 = $('#pw1').val();
		$pw2 = $('#pw2').val();

		if($pw1.length >= 8) {
			if($pw1 != $pw2) {
				$('.pw').addClass('has-error');
				$('.pw-alert').show();
				$('#register-submit').prop('disabled', true);
			} else {
				$('.pw-alert').hide();
				$('.pw').removeClass('has-error');
				$('#register-submit').prop('disabled', false);
			}
		}
	}

	$("#phone").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

	$('#phone').on('input propertychange paste', function() {
		$phone = $(this).val()
		if($phone.length < 9 || $phone.length > 12) {
			$('.phone-alert').show();
			$('.phone').addClass('has-error');
			$('#register-submit').prop('disabled', true);
		} else {
			$('.phone-alert').hide();
			$('.phone').removeClass('has-error');
			$('#register-submit').prop('disabled', false);
		}
	});

});