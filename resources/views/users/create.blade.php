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
                        <form action="{{ route('dataSiswas.store') }}" method="POST" class="col-12">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="username">Nama User</label>
                                    <input type="text" class="form-control" id="user" name="user"
                                        placeholder="Nama User">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="password">Password</label>
                                    <input type="password" min="8" class="form-control" id="password"
                                        name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="role">Role</label>
                                    <select name="role" id="role" class="form-select">
                                        <option value="" selected disabled>Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
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

