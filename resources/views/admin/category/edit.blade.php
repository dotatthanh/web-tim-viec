@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                 
                <div class="row">
                    
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                           
                            <small> Cập nhật</small>
                            
                        </h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <form action="/admin/categories/edit/{{$categories->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Nhập tên lĩnh vực" value="{{$categories->name}}" />
                            </div>
                            <button type="submit" class="btn btn-default">Cập nhật</button>
                        <form>
                         
                    </div>
                   
                </div>
                  
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection