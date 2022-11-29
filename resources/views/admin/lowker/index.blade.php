<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.css_script')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">DATA LOWONGAN PEKERJAAN</h4>
                                <a href="{{ route('lowker.create') }}" class="btn btn-md btn-success mb-3">Tambah
                                    Data</a>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Perusahaan</th>
                                                <th>Posisi</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Telp</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($lowkers as $post)
                                                {{-- <tr>
                                                    <td class="py-1">
                                                        <img src="{{ Storage::url('public/lowker/').$post->image }}" class="rounded" style="width: 50px">
                                                    </td>
                                                    <td>{{ $post->perusahaan }}</td>
                                                    <td>{{ $post->posisi_loker }}</td>
                                                    <td>{{ $post->email }}</td>
                                                    <td>{{ $post->alamat }}</td>
                                                    <td>{{ $post->telp }}</td>
                                                    <td>{!! $post->deskripsi !!}</td>
                                                    <td class="text-center">
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                            action="{{ route('lowker.destroy', $post->id) }}"
                                                            method="POST">
                                                            <a href="{{ route('lowker.edit', $post->id) }}"
                                                                class="btn btn-sm btn-primary">EDIT</a>
                                                            @csrf
                                                            @method('DELETE') 
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger">HAPUS</button>
                                                        </form>
                                                    </td>
                                                </tr> --}}
                                                @empty
                                                  <div class="alert alert-danger">
                                                      Data Lowongan Pekerjaan belum Tersedia.
                                                  </div>
                                              @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card border-0 shadow rounded">
                                    <div class="card-body">
                                        <a href="{{ route('lowker.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                                        <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Perusahaan</th>
                                                <th scope="col">Posisi</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Telp</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Aksi</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              @forelse ($lowkers as $post)
                                                <tr>
                                                    <td class="text-center">
                                                        <img src="{{ Storage::url('public/lowker/').$post->image }}" class="rounded" style="width: 150px">
                                                    </td>
                                                    <td>{{ $post->perusahaan }}</td>
                                                    <td>{{ $post->posisi_loker }}</td>
                                                    <td>{{ $post->email }}</td>
                                                    <td>{{ $post->alamat }}</td>
                                                    <td>{{ $post->telp }}</td>
                                                    <td>{!! $post->deskripsi !!}</td>
                                                    <td class="text-center">
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                              @empty
                                                  <div class="alert alert-danger">
                                                      Data Lowongan Pekerjaan belum Tersedia.
                                                  </div>
                                              @endforelse
                                            </tbody>
                                          </table>  
                                          {{ $lowkers->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
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
