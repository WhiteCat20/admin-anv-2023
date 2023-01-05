@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title font-weight-bold">Recent Payment Submissions</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Timestamp</th>
                                        <th width="20%">Nama Pemilik Rekening</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                        <th>Bukti Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2022-08-16 04:53:43</td>
                                        <td>Faiz Rahmadani</td>
                                        <td>Rp. 200000</td>
                                        <td>Bayar AnV 2023</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">
                                                <i class="fa fa-download p-1"></i>Download</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2022-08-18 10:45:20</td>
                                        <td>Nindya Eka Winasis</td>
                                        <td>Rp. 200000</td>
                                        <td>Bayar AnV 2023</td>
                                        <td><a href="#" class="badge badge-danger">
                                                <i class="fa fa-download p-1"></i>Download</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
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
            <div class="col-auto"></div>
        </div>
    </div>
@endsection
