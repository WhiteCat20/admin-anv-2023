@extends('layout.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title font-weight-bold">Sponsorhip Partners</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kontak</th>
                                        <th>Institusi</th>
                                        <th>Paket yang dipilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Faiz Rahmadani</td>
                                        <td>082213574819</td>
                                        <td>Teknik Fisika</td>
                                        <td>Silver</td>
                                    </tr>
                                    <tr>
                                        <td>Nina Schrodinger</td>
                                        <td>9999999999</td>
                                        <td>Persatuan Kucing TF</td>
                                        <td>Gold</td>
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
        </div>
    </div>
@endsection
