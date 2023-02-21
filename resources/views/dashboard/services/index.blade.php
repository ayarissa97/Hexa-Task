@extends('dashboard.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('services.create')}}">
                            <button type="submit" class="btn btn-primary float-right">Create Services</button>
                             </a>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->

        </section>
        <div class="content">

        <section class="pt-3">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>العنوان بالعربي</th>
                                <th>Title description</th>
                                <th>الوصف بالعربي</th>
                                <th>Description English</th>
                                <th style="width: 100px">image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($service as $services )
                            <tr>
                                <td>{{$services->id}}.</td>
                                <td>{{$services->getTranslation('title','ar')}}</td>
                                <td>{{$services->getTranslation('title', 'en')}}</td>
                                <td>{{$services->getTranslation('desc','ar')}}</td>
                                <td>{{$services->getTranslation('desc', 'en')}}</td>

                                {{-- <td>{{$services->title}}</td>
                                <td>{{$services->desc}}</td> --}}
                                <td>     <img src="{{asset('storage/'.$services->image)}}" width="60px" alt=""></td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
        </div>
    </section>
    </div>
    </div>
@endsection
