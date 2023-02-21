@extends('dashboard.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ( $errors->all() as $error )
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Settings</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form  action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">العنوان بالعربي</label>
                                        <input type="text" name="title_ar" class="form-control" id="title"
                                            placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title English</label>
                                        <input type="text" name="title_en" class="form-control" id="title"
                                            placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">النص بالعربي</label>
                                        <input type="text" name="text_ar" class="form-control" id="title"
                                            placeholder="Enter text">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Text English</label>
                                        <input type="text" name="text_en" class="form-control" id="title"
                                            placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">الوصف بالعربي</label>

                                        <!-- textarea -->
                                        <textarea class="form-control" name="desc_ar" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description English</label>

                                        <!-- textarea -->
                                        <textarea class="form-control" name="desc_en" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
