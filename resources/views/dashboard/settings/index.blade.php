@extends('dashboard.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('settings.create')}}">
                            <button type="submit" class="btn btn-primary float-right">Create Settings</button>
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
                                        <th>Text AR</th>
                                        <th>Text EN</th>
                                        <th>Descrption AR</th>
                                        <th>Descrption EN</th>
                                        <th style="width: 40px">image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{$setting->id }}.</td>


                                            <td>{{$setting->getTranslation('title','ar')}}</td>
                                            <td>{{$setting->getTranslation('title','en')}}</td>

                                            <td>{{$setting->getTranslation('text','ar') }}</td>
                                            <td>{{$setting->getTranslation('text','en')}}</td>

                                            <td>{{$setting->getTranslation('desc','ar') }}</td>
                                            <td>{{$setting->getTranslation('desc','en')}}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $setting->image) }}" width="30px"
                                                    alt="setting">
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
