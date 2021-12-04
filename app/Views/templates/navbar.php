 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg fixed-top navbar-light">
     <div class="container">

         <!-- Text Logo - Use this if you don't have a graphic logo -->
         <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Pavo</a> -->

         <!-- Image Logo -->
         <a class="navbar-brand logo-image" href="/"><img src="/template-styling/images/logo.svg" alt="alternative"></a>

         <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
             <span class="navbar-toggler-icon"></span>
         </button>
         <style>
             a {
                 cursor: pointer;
             }
         </style>

         <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a class="nav-link
                     <?php if ($active == "home") {
                            echo "active";
                        }; ?>
                     
                     " href="/">Home <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link"
                     <?php if ($active == "layanan") {
                            echo "active";
                        }; ?>
                     href="/layanan">Layanan</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link"
                     <?php if ($active == "article") {
                            echo "active";
                        }; ?>
                     href="/article">Article</a>
                 </li>
                 <li class=" nav-item">
                         <a class="nav-link">Tentang</a>
                 </li>
             </ul>
             <span class="nav-item ml-5">
                 <a class="booking-btn" href="/booking">Booking</a>
             </span>
         </div> <!-- end of navbar-collapse -->
     </div> <!-- end of container -->
 </nav> <!-- end of navbar -->
 <!-- end of navigation -->