@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            @role('admin')
            <div class="row">
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ 0 }}</h3>

                            <p>Siswa Terdaftar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ url('dataSiswas') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ 0 }}</h3>

                            <p>User</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ url('users') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            @endrole
            <!-- /.row -->
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halo {{ auth()->user()->user }}, apa kabarmu hari ini?</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            Status {{ auth()->user()->status }}
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
