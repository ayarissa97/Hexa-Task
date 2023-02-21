@extends('dashboard.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Choose</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('choose.create')}}">
                            <button type="submit" class="btn btn-primary float-right">Create Choose</button>
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
                                <th>Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($choose as $chooses )
                            <tr>
                                <td>{{$chooses->id}}.</td>
                                <td>{{$chooses->getTranslation('title','ar')}}</td>
                                <td>{{$chooses->getTranslation('title','en')}}</td>
                                <td>{{$chooses->number}}</td>
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
