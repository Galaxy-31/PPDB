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
                                <h3>{{ $totalSiswa }}</h3>

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
                                <h3>{{ $totalUser }}</h3>

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
                <div class="card col-sm-12">
                    <div class="card-body">
                        <h5 class="card-title">
                            <h1 class="m-0">Halo 
                                <span class="text-white bg-primary border border-white rounded px-2">{{ auth()->user()->user }}</span>,
                                <em>apa kabarmu hari ini?</em>
                            </h1>
                        </h5>
                        @role('siswa')
                        <div class="mt-3">
                            <h5>Informasi Calon Siswa</h5>
                            <dl class="row">
                                <dt class="col-sm-4 mt-2"><strong>NISN:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->nisn }}</em></dd>

                                <dt class="col-sm-4 mt-2"><strong>Jenis Kelamin:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->jk }}</em></dd>

                                <dt class="col-sm-4 mt-2"><strong>Nama Siswa:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->name }}</em></dd>

                                <dt class="col-sm-4 mt-2"><strong>Asal Sekolah:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->asal_sekolah }}</em></dd>

                                <dt class="col-sm-4 mt-2"><strong>Email:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->email }}</em></dd>

                                <dt class="col-sm-4 mt-2"><strong>Nomor Telepon:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->no_tlp }}</em></dd>

                                <dt class="col-sm-4 mt-2"><strong>Nomor Telepon Ibu:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->no_tlp_ibu }}</em></dd>

                                <dt class="col-sm-4 mt-2"><strong>Nomor Telepon Ayah:</strong></dt>
                                <dd class="col-sm-8"><em>{{ $data->no_tlp_ayah }}</em></dd>
                            </dl>
                        </div>
                        <p class="data-text">Pastikan semua data anda <strong>benar</strong> <em>sebelum waktu selesai</em></p>
                        <a href="#" class="btn btn-primary">Edit Data</a>
                        @endrole
                    </div>
                </div>
                @role('siswa')
                <div class="card col-sm-12">
                    <div class="card-body">
                        <h5 class="card-title">
                            <h1 class="m-0"> Status Sementara, 
                                <span class="text-white @if($data->status == 'Pending') bg-warning @endif @if($data->status == 'Diterima') bg-success @endif @if($data->status == 'Ditolak') bg-danger @endif border border-white rounded px-2">{{ $data->status }}</span>
                            </h1>
                        </h5>
                    </div>
                </div>
                @endrole
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
