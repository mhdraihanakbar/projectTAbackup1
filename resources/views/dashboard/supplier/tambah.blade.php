@include('layouts.sidebar', ['activePage' => 'supplier'])

@section('user')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Tambah Data Supplier</h2>
                        </div>
                    </div>
                </div>

                <div class="row m-t-25">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">

                            <div class="card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Data Supplier
                                </div>
                                <form action="/admin/supplier/create" method="post" class="form-horizontal">
                                    <div class="card-body card-block">
                                        {{ csrf_field() }}
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="nama" class=" form-control-label">Nama Supplier</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nama" name="nama"
                                                    placeholder="Enter Name..." class="form-control" required>
                                                <span class="help-block">Please enter name of supplier</span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="notelp" class=" form-control-label">Nomor Telp</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="notelp" name="notelp"
                                                    placeholder="Enter telp..." class="form-control" required>
                                                <span class="help-block">Please enter telp supplier</span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="alamat" class=" form-control-label">Alamat</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="alamat" name="alamat"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
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
