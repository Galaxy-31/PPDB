@extends('layouts.master')

@section('title', 'Data Siswa')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-capitalize text-center">Edit Data Siswa</h3>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('dataSiswas.update', $dataSiswa->id) }}" method="POST" class="col-12">
                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="name">NISN</label>
                                    <input value="{{ $dataSiswa->nisn }}" type="text" class="form-control" id="nisn" name="nisn"
                                        placeholder="NISN">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="jk">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-select">
                                        @if($dataSiswa->jk) 
                                            <option value="{{ $dataSiswa->jk }}" readonly hidden>{{ $dataSiswa->jk }}</option>
                                        @endif
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama">Nama</label>
                                    <input value="{{ $dataSiswa->name }}" type="text" class="form-control" id="nama" name="name"
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="asal_sekolah">Asal Sekolah</label>
                                    <input value="{{ $dataSiswa->asal_sekolah }}" type="text" class="form-control" id="asal_sekolah"
                                        name="asal_sekolah" placeholder="Asal Sekolah">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="email">Email</label>
                                    <input value="{{ $dataSiswa->email }}" type="email" class="form-control" id="email"
                                        name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_tlp">No Telepon</label>
                                    <input value="{{ $dataSiswa->no_tlp }}" type="number" class="form-control" id="no_tlp"
                                        name="no_tlp" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_tlp_ibu">No Telepon Ibu</label>
                                    <input value="{{ $dataSiswa->no_tlp_ibu }}" type="number" class="form-control" id="no_tlp_ibu"
                                        name="no_tlp_ibu" placeholder="No Telepon Ibu">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_tlp_ayah">No Telepon Ayah</label>
                                    <input value="{{ $dataSiswa->no_tlp_ayah }}" type="number" class="form-control" id="no_tlp_ayah"
                                        name="no_tlp_ayah" placeholder="No Telepon Ayah">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="referensi">Referensi</label>
                                    <select name="referensi" id="referensi" class="form-select">
                                        @if($dataSiswa->referensi) 
                                            <option value="{{ $dataSiswa->referensi }}" readonly hidden>{{ $dataSiswa->referensi }}</option>
                                        @endif
                                        <option value="Guru/Staf/Laboran/Pegawai Wikrama">Guru/Staf/Laboran/Pegawai Wikrama</option>
                                        <option value="Siswa Wikrama">Siswa SMK Wikrama</option>
                                        <option value="Alumni Wikrama">Alumni SMK Wikrama</option>
                                        <option value="Guru SMP">Guru SMP</option>
                                        <option value="Calon Siswa Wikrama">Calon Siswa SMK Wikrama</option>
                                        <option value="Sosial Media">Sosial Media</option>
                                        <option value="Referensi Langsung">Referensi Langsung</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="status">Status</label>
                                    <select name="status" id="status" class="form-select">
                                        @if($dataSiswa->status) 
                                            <option value="{{ $dataSiswa->status }}" readonly hidden>{{ $dataSiswa->status }}</option>
                                        @endif
                                        <option value="Diterima">Diterima</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
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

