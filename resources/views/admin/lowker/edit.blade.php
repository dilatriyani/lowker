<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admin.partials.css_script')
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
                    {{-- @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif --}}
                    <div class="col-10 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Data</h4>
                                <p class="card-description"> Basic form elements </p>
                                <form action="{{ route('lowker.update', $post->id) }}" method="POST" enctype="multipart/form-data"
                                    class="forms-sample">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label class="font-weight-bold">GAMBAR</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image">
                                        <!-- error message untuk title -->
                                        @error('image')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Perusahaan</label>
                                        <input type="text"
                                            class="form-control @error('perusahaan') is-invalid @enderror"
                                            name="perusahaan" value="{{ old('perusahaan', $post->perusahaan) }}"
                                            placeholder="Masukkan Judul Nama Perusahaan ">

                                        <!-- error message untuk title -->
                                        @error('perusahaan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Posisi</label>
                                        <textarea type="text" class="form-control @error('posisi_loker') is-invalid @enderror" name="posisi_loker"
                                            value="{{ old('posisi_loker', $post->posisi_loker) }}" placeholder="Masukkan Posisi Lowongan kerja "></textarea>

                                        <!-- error message untuk title -->
                                        @error('posisi_loker')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email', $post->email) }}"
                                            placeholder="Masukkan Email Perusahaan Pemasang Lowongan ">

                                        <!-- error message untuk title -->
                                        @error('email')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Alamat</label>
                                        <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                            value="{{ old('alamat', $post->alamat) }}" placeholder="Masukkan Alamat Perusahaan pemasang lowongan "></textarea>

                                        <!-- error message untuk title -->
                                        @error('alamat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Telp</label>
                                        <input type="number" class="form-control @error('telp') is-invalid @enderror"
                                            name="telp" value="{{ old('telp', $post->telp) }}"
                                            placeholder="Masukkan Nomor Telp Perusahaan pemasang lowongan ">

                                        <!-- error message untuk title -->
                                        @error('telp')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold" id="deskripsi">Deskripsi</label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                                            placeholder="Masukkan deskripsi kriteria pelamar">{{ old('deskripsi', $post->deskripsi) }}</textarea>

                                        <!-- error message untuk content -->
                                        @error('deskripsi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>
</body>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script> --}}

</html>
