<p>Xin chào bạn!!!</p>
<p>Hệ thống xin thông báo có ứng viên tên <strong>{{$name}}</strong> apply công việc <strong>{{$category}}</strong> trong 
	<a href="{{route('jobDetail', ['id' => $id])}}">bài đăng này</a>.
</p>

<p>Để xem danh sách ứng viên apply: 
	<a href="{{route('user-apply', ['jobID' => $id])}}"></a>
</p>