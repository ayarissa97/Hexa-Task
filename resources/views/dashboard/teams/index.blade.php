@extends('dashboard.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Teams</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('team.create')}}">
                            <button type="submit" class="btn btn-primary float-right">Create Teams</button>
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
                                <th>Title AR</th>
                                <th>Title EN</th>
                                <th>Desc AR</th>
                                <th>Desc EN</th>
                                <th style="width: 100px">image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team )

                            <tr>
                                <td>{{$team->id}}.</td>
                                <td>{{$team->getTranslation('title','en')}}</td>
                                <td>{{$team->getTranslation('title','ar')}}</td>
                                <td>{{$team->getTranslation('desc','en')}}</td>
                                <td>{{$team->getTranslation('desc','ar')}}</td>

                                <td>     <img src="{{asset('storage/'.$team->image)}}" width="60px" alt=""></td>
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
