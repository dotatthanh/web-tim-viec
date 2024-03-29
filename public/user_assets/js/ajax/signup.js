/*
* @Author: Trungnn
* @Date:   2018-10-09 10:02:22
* @Last Modified by:   Trungnn
* @Last Modified time: 2018-11-23 15:53:56
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
			'url':'/sign',
			'type':'POST',
			'data':{
				'role':$('[name="role"]:radio:checked').val(),
				'fullName':$('#mem_name').val(),
				'email':$('#emailid').val(),
				'password':$('#password').val(),
				'cpassword': $('#cpassword').val(),
				'company_id':$('#company_id').val(),

				'category_id':$('select[name="category_id"]').val(),
				'address_id':$('select[name="address_id"]').val(),
				'experience':$('input[name="experience"]').val(),
				'education':$('input[name="education"]').val(),
				'sex':$('input[name="sex"]:checked').val(),
				'age':$('input[name="age"]').val(),
			},
			success:function(data){
				if (data.error == true) {
					var error;
					// $('#alert_danger').show();
					// $('#alert_success').hide();

					if(data.message.fullName != undefined){
						error = data.message.fullName[0];
					}
					else if (data.message.email != undefined) {
						error = data.message.email[0];
					}
					else if (data.message.password != undefined) {
						error = data.message.password[0];
					}
					else if (data.message.cpassword != undefined) {
						error = data.message.cpassword[0];
					}
					else if(data.message.errorCompany != undefined){
						error = data.message.errorCompany[0];
					}
					else if(data.message.errorCategory != undefined){
						error = data.message.errorCategory[0];
					}
					else if(data.message.errorAddress != undefined){
						error = data.message.errorAddress[0];
					}
					else if(data.message.errorExperience != undefined){
						error = data.message.errorExperience[0];
					}
					else if(data.message.errorEducation != undefined){
						error = data.message.errorEducation[0];
					}
					else if(data.message.errorAge != undefined){
						error = data.message.errorAge[0];
					}

					swal({
						title: "Thông báo!",
						text: "Đăng kí thất bại. " + error,
						icon: "error",
						button: "Đóng",
					});
				} 
				else {
					swal({
						title: "Thông báo!",
						text: "Đăng kí thành công! Hệ thống sẽ chuyển tới trang Đăng nhập",
						icon: "success",
						button: "Xác nhận",
					})
					.then((confirmed) => {
						if (confirmed) {
							window.location.href = '/login';
						}
					});
				}
			}
		});
	});
});