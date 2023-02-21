@extends('dashboard.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>About</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('about.create')}}">
                            <button type="submit" class="btn btn-primary float-right">Create About</button>
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
                                <th>Desc EN</th>
                                <th>Desc AR</th>
                                <th style="width: 300px">image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($about as $abouts )

                            <tr>
                                <td>#</td>
                                <td>{{$abouts->getTranslation('desc','en')}}</td>
                                <td>{{$abouts->getTranslation('desc','ar')}}</td>
                                <td>
                                      <img src="{{asset('storage/'.$abouts->image)}}" width="80px" alt="about">
                                 </td>
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
