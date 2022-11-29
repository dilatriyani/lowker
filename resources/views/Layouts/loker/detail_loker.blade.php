@extends('Layouts.home_nav')
@include('Layouts.home.header')

<section class="client_section layout_padding">
    <div class="container-fuild">
        <div class="box1 heading_container heading_center">
            <div class="box col-lg-10 mx-auto">
                <div class="img_container">
                    <div class="img-box">
                        <div class="img_box-inner">
                            {{-- gambar Logo PERUSAHAAN YG BUKA LOWONGAN --}}
                            <img src="images/p2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="detail-box">
                    <h5>
                        PT. BRAXY
                    </h5>
                    <h2>
                        Kasir/ Cook helper
                    </h2>
                    <h6>full time</h6>
                </div>
            </div>
        </div>
        <div class=" box2 card px-2">
            <div class=" col-md-12 ml-auto">
                <div class="heading_container remove_line_bt">
                    <h2>
                        Deskripsi Lowongan
                    </h2>
                    <p>
                       PT.BRAXY sedang membutuhkan posisi lowongan kerja sebagai berikut 
                    </p>
                    <ul style="margin-top: 20px;">
                        <b>
                        <li>Kasir</li>
                        <li>Cook helper</li>
                        </b>
                    </ul>
                    <p style="margin-top: 20px;">
                        - Pria/wanitam Maks 27 tahun<br>
                        - Pendidikan Min. SMP<br>
                        - Mampu bekerja Tim<br>
                        - Dapat berkomunikasi dengan baik
                    </p>
                    <p style="margin-top: 20px;">
                        <b>Kirim lamaran & CV ke:</b><br>
                        ptbraxy@gmail.com
                    </p>

                    <p style="margin-top: 20px;">
                        <b>Atau ke alamat kami :</b><br>
                        JL.Umbulharjo No.342 
                    </p>

                    <p style="margin-top: 20px;">
                        <b>Info lebih lanjut</b><br>
                        0898785263546
                    </p>
                </div>
                {{-- linknya di hubungkan ke email atau whatsapp --}}
                <a href="" class="btn btn-info col-sm-3" style="margin-top:30px; "> Lamar kerja
                   
                </a>
            </div>
        </div>
    </div>
   </section> 
   @include('Layouts.home.footer')
</section>
