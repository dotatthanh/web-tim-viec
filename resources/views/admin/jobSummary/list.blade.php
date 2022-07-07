@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Công việc
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr >
                                <th class="text-center">ID</th>
                                <th class="text-center">Tiêu đề</th>
                                <th class="text-center">Lĩnh vực</th>
                                <th class="text-center">Người đăng</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)

                                <tr class="even gradeC" align="center">
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->title }}</td>
                                    <td>{{ $job->category->name}}</td>
                                    <td>{{ $job->user->name}}</td>
                                    <td class="center"><form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST">
                                @csrf
                                    <input id="delete" type="submit" name="Delete" class="btn btn-danger" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                                </form>
                                    <a href="/job-detail/{{ $job->id }}" class="btn-info">Chi tiết</a>
                                </td>
                                    
                                </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <script >
        </script>

@endsection