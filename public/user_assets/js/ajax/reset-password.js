/*
* @Author: Trungnn
* @Date:   2018-10-10 10:48:47
* @Last Modified by:   Trungnn
* @Last Modified time: 2018-10-15 14:58:49
*/
$(document).ready(function(){
	$('#submit').click(function(event) {
		/* Act on the event */

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			'url':'/change-password',
			'type':'put',
			'data':{
				'cuPassword':$('#cu_password').val(),
				'nPassword':$('#n_password').val(),
				'cPassword':$('#c_password').val(),
				
			},
			success:function(data){
				if (data.error == true) {
					$('#alert_success').hide();
					$('#alert_danger').show();
					if(data.message.errorPassword != undefined){
						$('#error').text(data.message.errorPassword[0]);
					}
					else if (data.message.cuPassword != undefined) {
						$('#error').text(data.message.cuPassword[0]);
					}
					else if (data.message.nPassword != undefined) {
						$('#error').text(data.message.nPassword[0]);
					}
					else if (data.message.cPassword != undefined) {
						$('#error').text(data.message.cPassword[0]);
					}
				} else {
					$('#alert_success').show();
					$('#alert_danger').hide();
					$('#cu_password').text();
					$('#n_password').text();
					$('#c_password').text();
				}
			}
		});
	});
});