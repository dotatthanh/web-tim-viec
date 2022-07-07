@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	<div class="container">


		<div class="row">
			<div class="col-md-12">
				<div class="job-list">
					<div class="thumb">
						<a href="job-details.html">
							<img src="{{ $jobSummary->company->logo }}" alt="" class="image-100-100">
						</a>
					</div>
					<div class="job-list-content">
						@if (isset($jobSummary))
						{{-- expr --}}
						<div class="alert alert-success " id="alert_success_cv" role="alert" >
							Gửi CV thành công. 
						</div>
						<div class="alert alert-danger " id="alert_danger_cv" role="alert">
							Gửi CV thất bại.
						</div>
						<h4>
							<a href="" >{{ $jobSummary->title }}</a><br>
							<i class="ti-briefcase"></i><a href="{{ $jobSummary->company->link }}" style="color: blue">  {{ $jobSummary->company->name }}</a><br>
							<p  class="info-job-basic">
								<b>Địa điểm: </b> <span >{{ $jobSummary->address->name }}</span><br>
								<b>Mức lương: </b> <span >{{ $jobSummary->detail->salary }}</span><br>
								<b>Hạn nộp hồ sơ: </b> <span >{{ $jobSummary->detail->expiration_date }}</span><br>
								<b>Lĩnh vực: </b><a href="/category/{{$jobSummary->category->id}}"> <span >{{ $jobSummary->category->name}}</span></a><br>
								<div>
									@if ((Auth::check()) && (Auth::user()->role->id == 3))
									<a data-toggle="modal" href='#modal_cv' class="btn btn-info"><i class="ti-bookmark"></i> Ứng tuyển ngay</a> 
									@endif
								</div>
							</p>

							<div class="info-job-quick">
								<b>Thông tin tuyển dụng nhanh</b><hr>

								<div class="col-sm-6" style=""><b>Kinh nghiệm: </b><span>{{ $jobSummary->detail->experience}}</span></div>
								<div class="col-sm-6" ><b>Giới tính: </b><span>{{ $jobSummary->detail->gender}}</span></div>
								<div class="col-sm-6" ><b>Bằng cấp: </b><span>{{ $jobSummary->detail->education}}</span></div>
								<div class="col-sm-6" ><b>Chức vụ: </b><span>{{ $jobSummary->detail->position}}</span></div>
								<div class="col-sm-6" ><b>Số lượng cần tuyển: </b><span>{{ $jobSummary->detail->quantity}}</span></div>
								<div class="col-sm-6" ><b>Tuổi: </b><span>{{ $jobSummary->detail->age}}</span></div>


							</div>

							<div class="info-job-descripton" >
								<b>Mô tả công việc</b><hr>

								<div>{!! $jobSummary->detail->job_description !!}</div>

							</div>

							<div class="info-job-benefit" >
								<b>Quyền lợi</b><hr>

								<div>{!! $jobSummary->detail->benefit !!}</div>

							</div>

							<div class="info-job-other_requirement" >
								<b>Yêu cầu khác</b><hr>

								<div>{!! $jobSummary->detail->other_requirement !!}</div>

							</div>
						</h4>


					</div>
					@endif
					<div class="plugin_cmt">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=384385535379831&autoLogAppEvents=1';
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-comments" data-href="{{ $url }}" data-numposts="5" data-width="1000px"></div>
					</div>
				</section>
				<!-- Find Job Section End -->

				<div class="modal fade" id="modal_cv">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h2 class="modal-title">Gửi CV cho nhà tuyển dụng</h2>
							</div>
							<div class="modal-body">
								<form action="" role="form" enctype="multipart/form-data">
									<input type="hidden" value="{{ $jobSummary->id }}" id="job_id">
									@if (Auth::check())
										<input type="hidden" value="{{ Auth::user()->id }}" id="user_id">
									@endif
									<div class="file has-name">
										<label class="file-label">
											<input class="file-input" type="file" name="cv" id="cv">
										</label>
									</div>

									

									<button type="button" id="upload_cv" class="btn btn-primary margin-top30">Gửi CV</button>
								</form>
							</div>
							
						</div>
					</div>
				</div>

				<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>   
				<script>
					
					$(document).ready(function() {

						$('#upload_cv').click(function(event) {
							/* Act on the event */

							$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});
							var formData = new FormData();
							formData.append("job_id",$("#job_id").val());
							formData.append("user_id",$("#user_id").val());
							formData.append("cv",document.getElementById("cv").files[0]);
							$.ajax({
								'url': '/send-cv',
								'type': 'post',
								'data': formData,
								processData : false,
								contentType : false,
								success:function(data){
									console.log(data);
									if(data.error == false){
										$('#alert_success_cv').show();
										$('#alert_danger_cv').hide();
										
										$('#modal_cv').modal('hide');
									}
									else{
										if (data.message.cvExist != undefined) {
											$('#alert_danger_cv').text(data.message.cvExist[0]);
											$('#alert_danger_cv').show();
											$('#alert_success_cv').hide();
											$('#modal_cv').modal('hide');
										}
									}
								},

								error:function(data){
									$('#alert_danger_cv').show();
									$('#alert_success_cv').hide();
									$('#modal_cv').modal('hide');
								},
							})
						});  
					})

				</script>
				@endsection
