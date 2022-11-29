@extends('Layouts.home_nav')
@include('Layouts.home.header')
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Cari Pekerjaan yang Anda butuhkan
            </h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Lulusan</option>
                    <option value="1">SMP</option>
                    <option value="2">SMA</option>
                    <option value="3">D3</option>
                    <option value="3">D4/S1</option>
                    <option value="3">S2</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Lokasi</option>
                    <option value="1">Yogyakarta</option>
                    <option value="2">Bantul</option>
                    <option value="3">Gunung Kidul</option>
                    <option value="3">Sleman</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Waktu kerja</option>
                    <option value="1">Full Time</option>
                    <option value="2">Part Time</option>
                    <option value="3">Freelance</option>
                </select>
            </div>
        </div>

        <div class="card py-3 px-3 mt-4">
            <div class="card" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/p1.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <div class="py-4">
                                <h2 class="card-title">Barista/Cook Helper/Kasir</h2>
                                <div class="row">
                                    <div class="col-md-3">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        <span class="col-md-8">CV. Braxy</span>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span class="col-md-8">Bantul</span>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>D3</span>
                                    </div>
                                    <div class="col-md-2">
                                        <i class='fa fa-money'></i>
                                        <span>1,2 jt</span>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span>full time</span>
                                    </div>
                                </div>
                            </div>
                            <a href="detail" type="button" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2 mb-1" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/p2.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <div class="py-4">
                                <h2 class="card-title">Barista/Cook Helper/Kasir</h5>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <i class="fa fa-building" aria-hidden="true"></i>
                                            <span class="col-md-8">CV. Braxy</span>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span class="col-md-8">Bantul</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>D3</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class='fa fa-money'></i>
                                            <span>1,2 jt</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>full time</span>
                                        </div>
                                    </div>
                            </div>
                            <a href="detail" type="button" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2 mb-1" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/p4.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <div class="py-4">
                                <h2 class="card-title">Barista/Cook Helper/Kasir</h5>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <i class="fa fa-building" aria-hidden="true"></i>
                                            <span class="col-md-8">CV. Braxy</span>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span class="col-md-8">Bantul</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>D3</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class='fa fa-money'></i>
                                            <span>1,2 jt</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>full time</span>
                                        </div>
                                    </div>
                            </div>
                            <a href="detail" type="button" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2 mb-2" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/p2.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <div class="py-4">
                                <h2 class="card-title">Barista/Cook Helper/Kasir</h5>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <i class="fa fa-building" aria-hidden="true"></i>
                                            <span class="col-md-8">CV. Braxy</span>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span class="col-md-8">Bantul</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>D3</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class='fa fa-money'></i>
                                            <span>1,2 jt</span>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>full time</span>
                                        </div>
                                    </div>
                            </div>
                            <a href="detail" type="button" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('Layouts.home.footer')
