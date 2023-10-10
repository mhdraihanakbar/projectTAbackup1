@include('layouts.sidebar', ['activePage' => 'user'])

@section('user')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Data User</h2>
                            <a href="/admin/user/add">
                                <button type="button" class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add user</button>
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
                                        <center>name</center>
                                    </th>
                                    <th>
                                        <center>email</center>
                                    </th>
                                    <th>
                                        <center>role</center>
                                    </th>
                                    <th>
                                        <center>jurusan</center>
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($user as $data)
                                    <?php
                                    $role = DB::table('roles')->find($data->id_role);
                                    $jurusan = DB::table('jurusan')->find($data->id_jurusan);
                                    ?>
                                    <tr>
                                        <td>
                                            <center>{{ $no++ }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $data->name }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $data->email }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $role->namarole }}</center>
                                        </td>
                                        <td>
                                            <center>
                                                @if ($jurusan)
                                                    {{ $jurusan->jurusan }}
                                                @endif
                                            </center>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
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
