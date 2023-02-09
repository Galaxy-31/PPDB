@extends('layouts.master')

@section('title', 'Data Siswa')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-capitalize text-center">Create User</h3>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('dataSiswas.update', $dataSiswa) }}" method="POST" class="col-12">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="name">NISN</label>
                                    <input type="text" class="form-control" id="nisn" name="nisn"
                                        placeholder="NISN">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="jk">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jk" name="jk"
                                        placeholder="Jenis Kelamin">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="Nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" class="form-control" id="asal_sekolah"
                                        name="asal_sekolah" placeholder="Asal Sekolah">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_tlp">No Telepon</label>
                                    <input type="number" class="form-control" id="no_tlp"
                                        name="no_tlp" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_tlp_ibu">No Telepon Ibu</label>
                                    <input type="number" class="form-control" id="no_tlp_ibu"
                                        name="no_tlp_ibu" placeholder="No Telepon Ibu">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_tlp_ayah">No Telepon Ayah</label>
                                    <input type="number" class="form-control" id="no_tlp_ayah"
                                        name="no_tlp_ayah" placeholder="No Telepon Ayah">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="referensi">Referensi</label>
                                    <input type="number" class="form-control" id="referensi"
                                        name="referensi" placeholder="Referensi">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

