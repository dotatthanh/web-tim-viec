@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	<div class="container">
		<h2 class="section-title">Danh sách tin tuyển dụng của bạn</h2>
		<table class="table table-hover" style="width: 100%;">
			<thead>
				<tr>
					<th style="width: 85%">Tiêu đề</th>
					<th style="width: 15%">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($listRecruit as $recruit)
				<tr id="tr{{ $recruit->id }}">{{-- expr --}}
					<td>{{ $recruit->title }}</td>
					<td>
						<a href="/job-detail/{{ $recruit->id }}"><span class="label label-success">Chi tiết</span></a>
						<span class="label label-warning delete" id="{{ $recruit->id }}" style="cursor:pointer" onclick="return confirm('Bạn có chắc chắn muốn xóa')">Xóa</span>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>



	</div>
</section>
<!-- Find Job Section End -->
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
<script>
	$(document).ready(function() {
		$('.delete').click(function(event) {
			/* Act on the event */
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				'url': '/delete-recruit',
				'type': 'delete',
				'data': {'idJob': $(this).attr('id')},
				success:function(data){
					if(data.message == true){
						$('#tr'+data.idJob).remove();
					}

				}
			})
		});  
	});
</script>
@endsection
