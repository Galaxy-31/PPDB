@extends('layouts.master')

@section('title', 'Data Siswa')

@section('content')
    <div class="card my-3">
        <div class="card-body">
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header py-3 bg-transparent">
                            <h3 class="text-capitalize">Data Siswa</h3>
                        </div>
                        <div class="card-body p-3">                
                            <table id="example" class="table hover order-column row-border" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama</th>
                                        <th>Asal Sekolah</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>No Telepon Ibu</th>
                                        <th>No Telepon Ayah</th>
                                        <th>Referensi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@section('scripts')
<script type="text/javascript">
    $(function() {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: "{{ route('dataSiswas.index') }}",
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "nisn",
                    name: "nisn"
                },
                {
                    data: "jk",
                    name: "jk"
                },
                {
                    data: "name",
                    name: "name"
                },
                {
                    data: "asal_sekolah",
                    name: "asal_sekolah"
                },
                {
                    data: "email",
                    name: "email"
                },
                {
                    data: "no_tlp",
                    name: "no_tlp"
                },
                {
                    data: "no_tlp_ibu",
                    name: "no_tlp_ibu"
                },
                {
                    data: "no_tlp_ayah",
                    name: "no_tlp_ayah"
                },
                {
                    data: "referensi",
                    name: "referensi"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#example').on('click', '.delete[data-remote]', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = $(this).data('remote');
            // confirm then
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#example').DataTable().draw(false);
            });
        });
    });
</script>
@endsection