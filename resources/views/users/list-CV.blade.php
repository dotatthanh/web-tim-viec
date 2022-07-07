@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	@if(session('success'))
		<div class="alert alert-success">{{session('success')}}</div>
	@endif
	@if (session('error'))
		<div class="alert alert-danger">{{session('error')}}</div>
	@endif
	<div class="container">
		<h2 class="section-title">Danh sách ứng viên công việc mã ID {{ $jobID }}</h2>
		<input type="hidden" value="{{ $jobID }}">
		<table class="table table-hover" style="width: 100%;">
			<thead>
				<tr>

					<th style="width: 35%">Tên ứng viên</th>
					<th style="width: 35">Email</th>

					<th style="width: 30%">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($listCV as $CV)
				<tr id="tr{{ $CV->id }}">{{-- expr --}}
					<td>{{ $CV->name }}</td>
					<td >{{ $CV->email }}</td>
					<td>
						<a href="{{ $CV->getCV->cv }}"><span class="label label-success">Xem CV</span></a>
						<a class="contact" id="{{ $CV->email }}"  href="javascript:;"><span class="label label-primary" >Liên hệ</span></a>
					</td>
				</tr>
				@endforeach

			</tbody>

		</table>
		<div class="col-md-12">
			<div class="showing pull-left">
				<a href="#">Hiện thị
					<span>{{ $listCV->firstItem() }} - {{   $listCV->lastItem() }}</span> trong tổng số {{ $listCV->total() }} tin</a>
				</div>
				<div class="pagination pull-right">
					{!! $listCV->links() !!}
				</div>
			</div>
		</div>


	</div>
	<div class="modal fade" id="modal_id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="{{route('reply')}}" method="POST" role="form">
						{!! csrf_field() !!}
						<h3>Liên hệ</h3>

						<div class="form-group">
							<label for="">Người nhận</label>
							<input type="email" class="form-control" name="email" id="email" value="" readonly>
							<label for="">Nội dung</label>
							<textarea name="content_email" id="content_mail"></textarea>
							<input type="hidden" id="jobID" value="{{$jobID}}">
						</div>

						<button type="submit" class="btn btn-primary">Liên hệ</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- Find Job Section End -->
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<script>
	CKEDITOR.replace( 'content_mail' );
	$(document).ready(function() {

		$('.contact').click(function(event) {
			/* Act on the event */

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			var formData = new FormData();
			var email = $(this).attr('id');
			$('#email').val(email);
			$('#modal_id').modal('show');
			
			
		});
	});
	</script>
	@endsection
