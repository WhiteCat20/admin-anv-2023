@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title font-weight-bold">Recent Paper Submissions</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th width="20%">Nama</th>
                                        <th width="60%">Judul</th>
                                        <th width="20%">Download File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Faiz Rahmadani</td>
                                        <td>Rancang Bangun Sistem IoT pada Pengamanan Kucing menggunakan protocol MQTT</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">
                                                <i class="fa fa-download p-1"></i>Download</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Budi Rahmadani</td>
                                        <td>Studi Artifical Intelligence pada Ikan menggunakan Tensorflow dengan 4 Layer
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-danger">
                                                <i class="fa fa-download p-1"></i>Download</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nina Schrodinger</td>
                                        <td>Deteksi Kehamilan Kucing menggunakan Neural Network</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">
                                                <i class="fa fa-download p-1"></i>Download</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Edit Paper</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
    </div>
@endsection
