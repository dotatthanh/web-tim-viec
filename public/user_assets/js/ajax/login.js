/*
* @Author: Trungnn
* @Date:   2018-10-12 22:36:04
* @Last Modified by:   Trungnn
* @Last Modified time: 2018-10-15 14:59:00
*/
jQuery(document).ready(function() {
	$("#forgot-password").click(function(event) {
		/* Act on the event */
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			'url': '/forgot-password',
			'type': 'put',
			'data': {'email': $('#email_forgot').val()},
			success:function(data){
				if(data.error==false){
					$('#alert-error').hide();
					$('#modal_forgot_password').modal('toggle');
					$('#alert-success').show().text(data.message);
				}
				else{

					$('#alert-error').show().html(data.message);
				}
			}
		})
		
	});
});