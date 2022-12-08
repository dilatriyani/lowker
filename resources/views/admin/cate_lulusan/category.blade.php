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
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card px-3 py-3">
                            <h2 class="h2_font">Add category
                            </h2>

                            <form action="{{ url('/add_category') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <input type="text" name="category" placeholder="write category name">

                                </div>
                                <input type="submit" class="btn btn-primary" name="submit" value="Add Category"></button>
                            </form>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <thead>
                                  <tr class="table-secondary">
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Pendidikan Terakhir</th>
                                    <th style="text-align: center;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($data as $data)
                                    <tr class="">
                                        <th style="text-align: center;">{{ ++$no }}</th>
                                        <th style="text-align: center;">{{$data->category_name}}</th>
                                        <th style="text-align: center;">
                                            <a onclick="return confirm('Aru sure to Delete?')" href="{{url('/delete_category',$data->id)}}" class="btn btn-danger">Delete</a>
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>

</html>
