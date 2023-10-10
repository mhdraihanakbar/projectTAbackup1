@include('layouts.sidebar', ['activePage' => 'jurusan'])

@section('user')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Data Jurusan</h2>
                            <a href="/admin/jurusan/add">
                                <button type="button" class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                            </a>
                        </div>
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
                                        <center>nama jurusan</center>
                                    </th>

                                    <th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($jurusan as $data)
                                    <tr>
                                        <td>
                                            <center>{{ $no++ }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $data->namajurusan }}</center>
                                        </td>

                                        <td>
                                            <div class="table-data-feature">
                                                <a href="/admin/jurusan/edit/{{ $data->id }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="/admin/jurusan/delete/{{ $data->id }}">
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
