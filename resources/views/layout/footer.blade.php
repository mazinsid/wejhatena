   <!--=====================================
                    FOOTER PART PART
        =======================================-->
   <footer class="footer-part">
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                   <div class="footer-content">
                       <h3>أتصل بنا</h3>
                       <ul class="footer-address">
                           <li>
                               <i class="fas fa-map-marker-alt"></i>
                               <p>الشرقيه <span>الهفوف</span></p>
                           </li>
                           <li>
                               <i class="fas fa-envelope"></i>
                               <p>support@ex.com <span>info@ex.com</span></p>
                           </li>
                           <li>
                               <i class="fas fa-phone-alt"></i>
                               <p>050000000 <span>05000000</span></p>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                   <div class="footer-content">
                       <h3>روابط سريعه</h3>
                       <ul class="footer-widget">
                           <li><a href="#">الفائات</a></li>
                           <li><a href="#">المدن</a></li>
                           <li><a href="#">الحساب</a></li>

                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                   <div class="footer-content">
                       <h3>معلومات</h3>
                       <ul class="footer-widget">
                           <li><a href="#">من نحنا</a></li>
                           <li><a href="#">طرق الدفع</a></li>
                           <li><a href="#">اتصل بنا</a></li>
                       </ul>
                   </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                   <div class="footer-info">
                       <a href="#"><img src="images/logo2.jpeg" alt="logo"></a>
                       <ul class="footer-count">
                           <li>
                               <h5>929,238</h5>
                               <p>مجموع المسخدمين</p>
                           </li>
                           <li>
                               <h5>242,789</h5>
                               <p>مجموع الاعلانات</p>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-12">
                   <div class="footer-card-content">
                       <div class="footer-payment">
                           <a href="#"><img src="{{ asset('images/pay-card/01.jpg') }}" alt="01"></a>
                           <a href="#"><img src="{{ asset('images/pay-card/02.jpg') }}" alt="02"></a>
                           <a href="#"><img src="{{ asset('images/pay-card/03.jpg') }}" alt="03"></a>
                           <a href="#"><img src="{{ asset('images/pay-card/04.jpg') }}" alt="04"></a>
                       </div>
                       <div class="footer-option">
                           {{-- <button type="button" data-toggle="modal" data-target="#language"><i class="fas fa-globe"></i>English</button>
                                <button type="button" data-toggle="modal" data-target="#currency"><i class="fas fa-dollar-sign"></i>USD</button> --}}
                       </div>
                       <div class="footer-app">
                           <a href="#"><img src="{{ asset('images/play-store.png') }}" alt="play-store"></a>
                           <a href="#"><img src="{{ asset('images/app-store.png') }}" alt="app-store"></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="footer-end">
           <div class="container">
               <div class="footer-end-content">
                   <p>All Copyrights Reserved &copy; 2021 - Developed by <a href="#">mazin</a></p>
                   <ul class="footer-social">
                       <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                       <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                   </ul>
               </div>
           </div>
       </div>
   </footer>
   <!--=====================================
                    FOOTER PART END
        =======================================-->


   <!--=====================================
                  CURRENCY MODAL PART START
        =======================================-->
   <div class="modal fade" id="currency">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4>Choose a Currency</h4>
                   <button class="fas fa-times" data-dismiss="modal"></button>
               </div>
               <div class="modal-body">
                   <button class="modal-link active">United States Doller (USD) - $</button>
                   <button class="modal-link">Euro (EUR) - €</button>
                   <button class="modal-link">British Pound (GBP) - £</button>
                   <button class="modal-link">Australian Dollar (AUD) - A$</button>
                   <button class="modal-link">Canadian Dollar (CAD) - C$</button>
               </div>
           </div>
       </div>
   </div>
   <!--=====================================
                  CURRENCY MODAL PART END
        =======================================-->


   <!--=====================================
                  LANGUAGE MODAL PART END
        =======================================-->
   <div class="modal fade" id="language">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4>Choose a Language</h4>
                   <button class="fas fa-times" data-dismiss="modal"></button>
               </div>
               <div class="modal-body">
                   <button class="modal-link active">English</button>
                   <button class="modal-link">bangali</button>
                   <button class="modal-link">arabic</button>
                   <button class="modal-link">germany</button>
                   <button class="modal-link">spanish</button>
               </div>
           </div>
       </div>
   </div>
   <!--=====================================
                   LANGUAGE MODAL PART END
        =======================================-->


   <!--=====================================
                    JS LINK PART START
        =======================================-->
   <!-- VENDOR -->
   <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
   <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
   <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/vendor/slick.min.js') }}"></script>

   <!-- CUSTOM -->
   <script src="{{ asset('js/custom/slick.js') }}"></script>
   <script src="{{ asset('js/custom/main.js') }}"></script>

   {{--  --}}
   <script type="application/javascript" src="{{asset('js/dropzone.js')}}" defer> </script>
   <script type="application/javascript" src="{{asset('js/bootstrap-select.js')}}" defer> </script>
   <script type="application/javascript" src="{{asset('js/slick.js')}}" defer> </script>
   <script type="application/javascript" src="{{asset('js/main.js')}}" defer> </script>
   <script type="application/javascript" src="{{asset('js/animation.js')}}" defer> </script>
