@extends('Layouts.home_nav')
@include('Layouts.home.header')
{{-- <section class="why_section layout_padding">
    <div class="container">
        <div class="box heading_container heading_center mb-2">
            <h2>
                Tentang Kami
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
        </div>
    </div>
   </div>
</section> --}}
<section class="client_section layout_padding">
    <div class="container-fuild">
      <div class="box1 heading_container heading_center mb-2">
         <h2>
             Tentang Kami
         </h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
     </div>
      <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="box col-lg-10 mx-auto">
                  <div class="detail-box">
                     <h5>
                        Apa itu Jogja Lowker?
                     </h5>
                     <p>
                        Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                     </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="box col-lg-10 mx-auto">
                  <div class="detail-box">
                     <h5>
                        Mengapa harus Jogja Lowker?
                     </h5>
                     <p>
                        Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                     </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="box col-lg-10 mx-auto">
                  <div class="detail-box">
                     <h5>
                        Apa kelebihannya?
                     </h5>
                     <p>
                        Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                     </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
          
            </div>
         </div>
       
      </div>
    </div>
</section>
@include('Layouts.home.footer')