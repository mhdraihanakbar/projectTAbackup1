@include('layouts.sidebar', ['activePage' => 'barangmasuk'])

@section('user')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Tambah Data Barang Masuk</h2>
                        </div>
                    </div>
                </div>

                <div class="row m-t-25">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">

                            <div class="card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Barang Masuk
                                </div>
                                <form action="/admin/barangmasuk/create" method="post" class="form-horizontal">
                                    <div class="card-body card-block">
                                        {{ csrf_field() }}




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="kodebarang" class=" form-control-label">Kode Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="kodebarang" name="kodebarang"
                                                    value="{{ $generatedCode }}" class="form-control" readonly>
                                                <input type="hidden" name="hidden_kodebarang" value="{{ $generatedCode }}">
                                                <span class="help-block">Kode barang</span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="namabarang" class=" form-control-label">Nama Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="namabarang" name="namabarang"
                                                    placeholder="Enter Name..." class="form-control" required>
                                                <span class="help-block">Please enter name of Nama Barang</span>
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_tipe" class=" form-control-label">Tipe
                                                    Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select require name="id_tipe" class="form-control">
                                                    <option value="">-- Pilih Tipe Barang ---</option>
                                                    @foreach ($tipe as $data)
                                                        <option value="{{ $data->id }}">{{ $data->namatipe }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="tahunperolehan" class=" form-control-label">Tahun
                                                    Perolehan</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="tahunperolehan" name="tahunperolehan"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="jumlah" class=" form-control-label">Jumlah</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="jumlah" name="jumlah"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_satuan" class=" form-control-label">Satuan</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select require name="id_satuan" class="form-control">
                                                    <option value="">-- Pilih Satuan ---</option>
                                                    @foreach ($satuan as $data)
                                                        <option value="{{ $data->id }}">{{ $data->namasatuan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_jurusan" class=" form-control-label">Jurusan</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select require name="id_jurusan" class="form-control">
                                                    <option value="">-- Pilih Jurusan ---</option>
                                                    @foreach ($jur as $data)
                                                        <option value="{{ $data->id }}">{{ $data->namajurusan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_jenisbarang" class=" form-control-label">Jenis
                                                    Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select require name="id_jenisbarang" class="form-control">
                                                    <option value="">-- Pilih Jenis Barang ---</option>
                                                    @foreach ($jb as $data)
                                                        <option value="{{ $data->id }}">{{ $data->jenisbarang }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>



            @extends('layouts.footer')
