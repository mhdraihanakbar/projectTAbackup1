@include('layouts.sidebar', ['activePage' => 'petugasgudangti'])

@section('user')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Tambah Data Barang Keluar</h2>
                        </div>
                    </div>
                </div>

                <div class="row m-t-25">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">

                            <div class="card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Barang Keluar
                                </div>
                                <form action="/admin/barangkeluar/ti/create" method="post" class="form-horizontal">
                                    <div class="card-body card-block">
                                        {{ csrf_field() }}



                                        {{-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_tipe" class=" form-control-label">Tipe</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="id_tipe" name="id_tipe"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
                                            </div>
                                        </div> --}}



                                        {{-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_tipe" class=" form-control-label">Tipe</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="id_tipe" name="id_tipe"
                                                    placeholder="Enter telp..." class="form-control" required
                                                    @error('id_tipe') is-invalid @enderror"
                                                    value="{{ old('id_tipe', $data->id_tipe) }}">
                                                <span class="help-block">Please
                                                    enter telp supplier</span>
                                            </div>
                                        </div> --}}

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_kodebarang" class=" form-control-label">Kode Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select require name="id_kodebarang" class="form-control">
                                                    <option value="">-- Kode Barang ---</option>
                                                    @foreach ($kodebarang as $data)
                                                        <option value="{{ $data->id }}">{{ $data->kodebarang }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="namabarang" class=" form-control-label">Nama Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="namabarang" name="namabarang" class="form-control"
                                                    readonly>
                                            </div>
                                        </div>

                                        {{-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="namabarang" class=" form-control-label">Nama Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select require name="namabarang" class="form-control">
                                                    <option value="">-- Nama Barang ---</option>
                                                    @foreach ($namabarang as $data)
                                                        <option value="{{ $data->id }}">{{ $data->namabarang }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="tahunperolehan" class=" form-control-label">Tahun
                                                    Perolehan</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="tahunperolehan" name="tahunperolehan"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
                                            </div>
                                        </div> --}}

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="jumlah_pengeluaran" class=" form-control-label">Jumlah
                                                    Pengeluaran</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="jumlah_pengeluaran" name="jumlah_pengeluaran"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
                                            </div>
                                        </div>

                                        {{-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_satuan" class=" form-control-label">Satuan</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="id_satuan" name="id_satuan"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
                                            </div>
                                        </div> --}}



                                        {{-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="id_jenisbarang" class=" form-control-label">Jenis Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="id_jenisbarang" name="id_jenisbarang"
                                                    placeholder="Enter address..." class="form-control" required>
                                                <span class="help-block">Please enter address</span>
                                            </div>
                                        </div> --}}

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

                                {{-- <script>
                                    $(document).ready(function() {
                                        $('select[name="id_kodebarang"]').on('change', function() {
                                            var id_kodebarang = $(this).val();
                                            var csrf_token = $('meta[name="csrf-token"]').attr('content');

                                            if (id_kodebarang) {
                                                $.ajax({
                                                    url: '{{ route('get.barang') }}', // Menggunakan route yang sudah Anda daftarkan
                                                    type: 'POST', // Menggunakan metode POST
                                                    data: {
                                                        id_kodebarang: id_kodebarang,
                                                        _token: csrf_token
                                                    },
                                                    success: function(data) {
                                                        $('input[name="namabarang"]').val(data.namabarang);
                                                    }
                                                });
                                            } else {
                                                $('input[name="namabarang"]').val('');
                                            }
                                        });
                                    });
                                </script> --}}

                                <script>
                                    $(document).ready(function() {
                                        $('select[name="id_kodebarang"]').on('change', function() {
                                            var id_kodebarang = $(this).val();
                                            var csrf_token = $('meta[name="csrf-token"]').attr('content');

                                            if (id_kodebarang) {
                                                $.ajax({
                                                    url: '{{ route('get.barang') }}', // Sesuaikan dengan rute yang Anda miliki
                                                    type: 'POST',
                                                    data: {
                                                        id_kodebarang: id_kodebarang,
                                                        _token: csrf_token
                                                    },
                                                    success: function(data) {
                                                        if (data.namabarang) {
                                                            $('input[name="namabarang"]').val(data.namabarang);
                                                        } else {
                                                            // Barang tidak ditemukan, mungkin ada tindakan tambahan yang perlu Anda lakukan di sini
                                                            $('input[name="namabarang"]').val('Barang tidak ditemukan');
                                                        }
                                                        console.log(data);
                                                    },
                                                    error: function(xhr, textStatus, errorThrown) {
                                                        // Tangani kesalahan jika terjadi
                                                        console.error('Terjadi kesalahan: ' + textStatus);
                                                    }
                                                });
                                            } else {
                                                $('input[name="namabarang"]').val('');
                                            }
                                        });
                                    });
                                </script>




                            </div>
                    </div>
                </div>
            </div>



            @extends('layouts.footer')
