@include('layouts.sidebar', ['activePage' => 'petugasgudangti'])

@section('user')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Data Barang Keluar</h2>
                            <a href="/admin/barangkeluar/ti/add">
                                <button type="button" class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                            </a>
                        </div>
                        <br>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>

                <!-- DATA TABLE-->
                <div class="row m-t-25">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>
                                        <center>no</center>
                                    </th>
                                    <th>
                                        <center>nama barang</center>
                                    </th>
                                    <th>
                                        <center>tipe</center>
                                    </th>
                                    <th>
                                        <center>kode barang</center>
                                    </th>
                                    <th>
                                        <center>tahun perolehan</center>
                                    </th>
                                    <th>
                                        <center>jumlah pengeluaran</center>
                                    </th>
                                    <th>
                                        <center>sisa stok</center>
                                    </th>
                                    <th>
                                        <center>satuan</center>
                                    </th>
                                    <th>
                                        <center>jenis barang</center>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($dbkel_ti as $data)
                                    <?php
                                    // $tb = DB::table('tipe')->find($data->id_tipe);
                                    // $sat = DB::table('satuan')->find($data->id_satuan);
                                    // $stok = DB::table('dbmas_ti')->find($data->sisastok);
                                    $jb = DB::table('jenisbarang')->find($data->id_jenisbarang);
                                    ?>
                                    <tr>
                                        <td>
                                            <center>{{ $no++ }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $data->namabarang }}</center>
                                        </td>
                                        {{-- <td>
                                            <center>{{ $tb->namatipe }}</center>
                                        </td> --}}
                                        <td>
                                            <center>{{ $data->id_kodebarang }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $data->tahunperolehan }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $data->jumlah_pengeluaran }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $data->sisastok }}</center>
                                        </td>

                                        {{-- <td>
                                            <center>{{ $jb->jenisbarang }}</center>
                                        </td> --}}
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="/admin/supplier/edit/{{ $data->id }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="/admin/supplier/delete/{{ $data->id }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END DATA TABLE-->

                @extends('layouts.footer')
