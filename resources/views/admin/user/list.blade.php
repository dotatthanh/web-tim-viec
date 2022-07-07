@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lí tài khoản
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Họ và tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Hành động</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                @if ($user->role_id > 1)  
                                    <tr class="even gradeC" align="center">
                                                                    <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="center"><form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                        <input id="delete" type="submit" name="Delete" class="btn btn-danger" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                                    </form></td>
                                        
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection