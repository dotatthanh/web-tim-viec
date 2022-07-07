@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lĩnh vực
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Mã</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($categories as $category)
                            <tr class="even gradeC" align="center">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->code }}</td>
                                <td class="center"><form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                            @csrf
                                <input id="delete" type="submit" name="Delete" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                                 <a  href="/admin/categories/edit/{{$category->id}}"><span >Sửa</span></a>
                            </form></td>
                            </tr>
                            @endforeach
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection