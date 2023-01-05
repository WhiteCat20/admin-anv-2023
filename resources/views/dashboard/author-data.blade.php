@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title font-weight-bold" id="table-id">Authors Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="table" class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Timestamp</th>
                                        <th>Nama</th>
                                        <th>Asal Institusi</th>
                                        <th>Negara</th>
                                        <th width="40%">Judul</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2022-08-16 04:53:43</td>
                                        <td>Faiz Rahmadani</td>
                                        <td>ECS Laboratory</td>
                                        <td>Indonesia <i class="flag flag-united-states"></i></td>
                                        <td>Rancang Bangun Sistem IoT pada Pengamanan Kucing menggunakan protocol MQTT</td>
                                    </tr>
                                    <tr>
                                        <td>2022-08-18 10:45:20</td>
                                        <td>Nindya Eka Winasis</td>
                                        <td>Vibrastic Laboratory</td>
                                        <td>Indonesia <i class="flag flag-united-states"></i></td>
                                        <td>Deteksi Kehamilan Kucing menggunakan Neural Network</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <button class="btn btn-sm btn-primary" onclick="tableToExcel()">Export</button>
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
    </div>
@endsection
