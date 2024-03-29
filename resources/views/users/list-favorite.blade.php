@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	<div class="container">
		<h2 class="section-title">Danh sách công việc yêu thích</h2>
		<table class="table table-hover" style="width: 100%;">
			<thead>
				<tr>
					<th style="width: 5%">STT</th>
					<th style="width: 45%">Tiêu đề</th>
					<th style="width: 35%">Tên công ty</th>
					<th style="width: 15%">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($listJob as $key => $favorite)
				<tr id="tr{{ $favorite->id }}">
					<td>{{ $key+1 }}</td>
					<td>{{ $favorite->title }}</td>
					<td>{{ $favorite->company->name }}</td>
					<td>
						<a href="/job-detail/{{ $favorite->id }}"><span class="label label-success">Chi tiết</span></a>
						<span class="label label-warning delete" id="{{ $favorite->id }}" style="cursor:pointer" onclick="deleteFavorite({{ $favorite->id }})">Xóa</span>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="col-md-12">
			<div class="showing pull-left">
				<a href="#">Hiện thị
					<span>{{ $listJob->firstItem() }} - {{   $listJob->lastItem() }}</span> trong tổng số {{ $listJob->total() }} tin</a>
				</div>
				<div class="pagination pull-right">
					{!! $listJob->links() !!}
				</div>
			</div>
		</div>

		
	</div>
</section>
<!-- Find Job Section End -->
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
<script type="text/javascript">
	function deleteFavorite(id) {
		if (confirm("Bạn có chắc chắn muốn xóa") == true) {
			/* Act on the event */
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				'url': '/delete-job-favorite',
				'type': 'delete',
				'data': {'idJob': id},
				success:function(data){
					if(data.message == true){
						$('#tr'+data.idJob).remove();
					}
					
				}
			})
		}
	}
</script>
@endsection
