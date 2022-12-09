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
                        <div class="card" style="background-color: rgb(62, 62, 62)">
                            <div class="card-body">
                                <h4 class="card-title">DATA USER</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th style="color: rgb(215, 204, 204);">No</th>
                                                <th style="color: rgb(215, 204, 204);">Nama</th>
                                                <th style="color: rgb(215, 204, 204);">Email</th>
                                                <th style="color: rgb(215, 204, 204);">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 0;
                                            @endphp
                                           @foreach ($user as $data_pekerja)
                                                <tr style="text-align: center">
                                                    <td style="color: rgb(215, 204, 204);">{{ ++$no }}</td>
                                                    <td style="color: rgb(215, 204, 204);">{{ $data_pekerja->name }}</td>
                                                    <td style="color: rgb(215, 204, 204);">{{ $data_pekerja->email }}</td>
                                                    <td class="td" style="text-align: center">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data_pekerja->id}}" class="btn btn-primary">
                                                            Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach ($user as $data_pekerja)
                    <div class="modal fade" id="exampleModal{{ $data_pekerja->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="width: 45%">
                            <div class="modal-content">
                                <div class="modal-header hader">
                                    <h2 class="modal-title" id="exampleModalLabel">Data User</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="modal-content-detail">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label text-right">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" value="{{ $data_pekerja->name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label text-right"> Email </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" value="{{ $data_pekerja->email }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</html>
