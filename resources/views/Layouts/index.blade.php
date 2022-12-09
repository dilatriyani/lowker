<!DOCTYPE html>
<html>
   <head>

      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <title>Jogja Lowker</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html"><img width="150" src="https://www.jogjalowker.co.id/wp-content/themes/Web/images/logo.png" alt="#" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="form_iklan">Form Iklan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kontak">Kontak</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Tentang kami <span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="tentang">Tentang kami</a></li>
                                    <li><a href="kebijakan">Kebijakan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pasang_lowongan">Pasang Lowongan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

         <!-- end header section -->
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="images/photo1.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Bingung mau cari kerja?
                                    </span>
                                    <h2>
                                      <span>
                                         Jogja lowker solusinya!!!
                                      </span>
                                    </h2>
                                 </h1>

                                 <p>
                                    Cari kerja gaperlu ribet, karna jogja lowker merupakan portal pencari kerja yang mudah dan aman.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Selengkapnya
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Pasang Iklan Lowongan pekerjaan
                                    </span>
                                 </h1>
                                 <p>
                                   Promosikan lowongan pekerjaan perusahaan Anda, agar lebih cepat menemukan pegawai sesuai kriteria yang di butuhkan.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Pasang Sekarang
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>

         <!-- end slider section -->
      </div>

      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
           <div class="heading_container heading_center">
               <h2>
                   Cari Pekerjaan yang Anda butuhkan
                   <p class="lead">Jangan lupa untuk bergabung juga dengan ratusan ribu komunitas job seeker di sosial media Jogjalowker.</p>
               </h2>
           </div>
           <div class="row mt-4">
              <div class="col-md-3 col-sm-6 col-xs-12">
                   <select class="form-select" aria-label="Default select example">
                       <option selected>Lulusan</option>
                       <option value="1">SMP</option>
                       <option value="2">SMA</option>
                       <option value="3">D3</option>
                       <option value="3">D4/S1</option>
                       <option value="3">S2</option>
                   </select>
               </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                   <select class="form-select" aria-label="Default select example">
                       <option selected>Lokasi</option>
                       <option value="1">Yogyakarta</option>
                       <option value="2">Bantul</option>
                       <option value="3">Gunung Kidul</option>
                       <option value="3">Sleman</option>
                   </select>
               </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                   <select class="form-select" aria-label="Default select example">
                       <option selected>Waktu kerja</option>
                       <option value="1">Full Time</option>
                       <option value="2">Part Time</option>
                       <option value="3">Freelance</option>
                   </select>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                   <button class="btn btn-success btn-block">Cari Lowongan</button>
               </div>
           </div>

           <div class="card px-3 py-3 mt-4">
           <div class="card mt-2 mb-2" style="max-width: 100%;">
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

           <div class="card mb-2" style="max-width: 100%;">
               <div class="row g-0">
                   <div class="col-md-4">
                       <img src="{{ asset('images/p2.jpg') }}" class="img-fluid rounded-start" alt="...">
                   </div>
                   <div class="col-md-8">
                       <div class="card-body ">
                           <div class="mt-2 px-2">
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
           <div class="text-center">
               <a href="/loker" class="btn btn-info col-sm-4 mb-2 mt-3">Lihat Semua Lowongan</a>
           </div>

           </div>
         </div>
   </section>

      <!-- end product section -->
      <!-- client section -->
      <section class="client_section layout_padding">
         <div class="container-fuild">
            <div class=" box ">
               <h2>
                  Mitra Kami
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/p1.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/p2.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/p3.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- end client section -->
      <!-- footer start -->
      @include('Layouts.home.footer')
      <!-- footer end -->

      <!-- jQery -->
      <script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('home/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('home/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('home/js/custom.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>
