/*
* @Author: Trungnn
* @Date:   2018-10-13 23:24:40
* @Last Modified by:   Trungnn
* @Last Modified time: 2018-10-16 06:35:00
*/

jQuery(document).ready(function($) {
	$('#address').change(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			'url': '/findByAddress',
			'type': 'get',
			'data': {'address': $('#address').val()},
			success:function(response){
				var options = {
					data:response.address 
				};

				$("#address").easyAutocomplete(options);
			}
		})
	});

	$('#company').keydown(function(event) {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			'url': '/findByCompany',
			'type': 'get',
			'data': {'company': $('#company').val()},
			success:function(response){
				var options = {
					data:response.company 
				};
				$("#company").easyAutocomplete(options);
			}
		})
	});
	
});