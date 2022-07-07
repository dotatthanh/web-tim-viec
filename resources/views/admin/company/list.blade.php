@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Công ty
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên công ty</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Hành động</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            <tr class="even gradeC" align="center">

                                <td>{{ $company->id }}</td>
                                <td><a href="{{ $company->link }}">{{ $company->name }}</a></td>
                                <td>{{ $company->address->name }}</td>
                                <td class="center"><form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST">
                            @csrf
                                <input id="delete" type="submit" name="Delete" class="btn btn-danger" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                                </form></td>
                                
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection