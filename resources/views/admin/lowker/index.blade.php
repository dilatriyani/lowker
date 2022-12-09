<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.css_script')

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;

        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black
        }


    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.partials.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.partials.header')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    DATA LOWONGAN PEKERJAAN
                                </h4>
                                <a href="#" class="btn btn-md btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    Tambah
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Logo</th>
                                                <th style="text-align: center;">Perusahaan</th>
                                                <th style="text-align: center;">Posisi</th>
                                                <th style="text-align: center;">Email</th>
                                                <th style="text-align: center;">Alamat</th>
                                                <th style="text-align: center;">Telp</th>
                                                <th style="text-align: center;">Deskripsi</th>
                                                <th style="text-align: center;">Lokasi</th>
                                                <th style="text-align: center;">Jabatan</th>
                                                <th style="text-align: center;">Gaji</th>
                                                <th style="text-align: center;">Waktu</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 0;
                                            @endphp
                                            @foreach ($lowker as $low)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td><img src="{{ url('/storage/' .$low->image) }}" style="width:100%;" style="height:100%;"></td>
                                                    <td>{{ $low->perusahaan }}</td>
                                                    <td>{{ $low->posisi_loker }}</td>
                                                    <td>{{ $low->email }}</td>
                                                    <td>{{ $low->alamat }}</td>
                                                    <td>{{ $low->telp }}</td>
                                                    <td>{!! $low->deskripsi !!}</td>
                                                    <td>{{ $low->getkota->category_name }}</td>
                                                    <td>{{ $low->getpendidikan->category_name }}</td>
                                                    <td>{{ $low->gaji }}</td>
                                                    <td>{{ $low->getwaktu_k->category_name }}</td>
                                                    <td >
                                                       <button onclick="return confirm('Aru sure to Delete?')" href="{{url('/delete_catelowker',$low->id)}}" class="btn btn-danger"> <i class='bx bx-trash'></i></button>
                                                       <button onclick="return confirm('Aru sure to Delete?')" href="{{url('/delete_catelowker',$low->id)}}" class="btn btn-info"> <i class='bx bx-edit'></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Tambah -->
                    <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="width: 50%">
                            <div class="modal-content">
                                <div class="modal-header hader">
                                    <h3 class="modal-title" id="exampleModalLabel">
                                        Tambah Data
                                    </h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="image"> Logo Perusahaan </label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>

                                        <div class="form-group">
                                            <label>Perusahaan</label>
                                            <input type="text" name="perusahaan" class="form-control @error('perusahaan') is-invalid @enderror" placeholder="Masukan nama perusahaan" value="{{ old('perusahaan') }}">
                                            @error('perusahaan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Posisi</label>
                                            <input type="text" name="posisi_loker" class="form-control @error('posisi_loker') is-invalid @enderror" placeholder="Posisi yang dibutuhkan" value="{{ old('posisi_loker') }}">
                                            @error('posisi_loker')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label>Gaji</label>
                                            <input type="number" name="gaji" class="form-control @error('gaji') is-invalid @enderror" placeholder="Posisi yang dibutuhkan" value="{{ old('gaji') }}">
                                            @error('gaji')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan email perusahaan" value="{{ old('email') }}">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>alamat</label>
                                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukan alamat perusahaan" value="{{ old('alamat') }}">
                                            @error('alamat')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Lokasi</label>
                                            <div>
                                                <select class="form-select" name="jenis_lokasi" id="jenis_lokasi">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($lokasi as $sdata)
                                                    <option value="{{ $sdata->id }}">{{ $sdata->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Pendidikan</label>
                                            <div>
                                                <select class="form-select" name="jenis_category" id="jenis_category">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($kategori as $sdata)
                                                    <option value="{{ $sdata->id }}">{{ $sdata->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Waktu</label>
                                            <div>
                                                <select class="form-select" name="jenis_waktukerja" id="jenis_waktukerja">
                                                    <option value="">-- Pilih --</option>
                                                    @foreach ($waktu_kerja as $sdata)
                                                    <option value="{{ $sdata->id }}">{{ $sdata->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input type="number" name="telp" class="form-control @error('telp') is-invalid @enderror" placeholder="No telepon perusahaan" value="{{ old('telp') }}">
                                            @error('telp')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                            value="{{ old('deskripsi') }}" placeholder="Masukan deskripsi" id="tambah">
                                            </textarea>
                                            @error('deskripsi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="modal-footer d-md-block">
                                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END -->


                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('tambah');
</script>
</html>
