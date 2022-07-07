@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Address
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>name</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($addresses as $address)
                            <tr class="even gradeC" align="center">
                            
                                <td>{{ $address->id }}</td>
                                <td>{{ $address->name }}</td>
                                <td class="center"><form action="{{ route('admin.addresses.destroy', $address->id) }}" method="POST">
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