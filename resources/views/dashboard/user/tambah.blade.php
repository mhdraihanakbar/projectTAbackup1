@include('layouts.sidebar', ['activePage' => 'user'])

@section('user')


    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Data User</h2>
                        </div>
                    </div>
                </div>

                <div class="row m-t-25">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">

                            <div class="card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Data User
                                </div>
                                <form action="/admin/user/create" method="post" class="form-horizontal">
                                    <div class="card-body card-block">

                                        {{ csrf_field() }}
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="name" class=" form-control-label">Nama</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name" name="name"
                                                    placeholder="Enter Name..." class="form-control" required>
                                                <span class="help-block">Please enter your name</span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email" class=" form-control-label">Email</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email" name="email"
                                                    placeholder="Enter Email..." class="form-control" required>
                                                <span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="password" class=" form-control-label">Password</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="password" id="password" name="password"
                                                    placeholder="Enter Password..." class="form-control" required>
                                                <span class="help-block">Please enter your password</span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_role" class=" form-control-label">Role</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select require name="id_role" class="form-control">
                                                    <option value="">-- Pilih Role ---</option>
                                                    @foreach ($role as $data)
                                                        <option value="{{ $data->id }}">{{ $data->namarole }}</option>
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
