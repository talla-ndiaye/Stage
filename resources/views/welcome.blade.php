<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SENEGALWEB</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!--  les CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css" rel="stylesheet"  >
    <style>
      a,a:hover {
        text-decoration: none;
      }
    </style>
</head>
<body>
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center" style="text-decoration: none">
            <h1>SENEGALWEB<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
            <li><a href="#hero" >Acceuil</a></li>
            <li><a href="#about">A propos</a></li>
            <li><a href="#portfolio">Blogues</a></li>
            <li><a href="#services">Quizz</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Bienvenue Au  <span>SENEGAL</span></h2>
          <p>Plongez au cœur du Sénégal et découvrez son histoire, ses trésors culturels, ses paysages captivants et sa population chaleureuse.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Commencer</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person"></i></div>
              <h4 class="title"><a href="#portfolio" class="stretched-link">Personnage</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="#portfolio" class="stretched-link">Histoire</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="#portfolio" class="stretched-link">Paysage</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="#portfolio" class="stretched-link">Culture</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
</section>
<!-- Fin Hero Section -->

<!-- =======Main ======= -->
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Qui sommes nous ?</h2>
          <p>SENEGALWEB vous propose d'explorer les différentes périodes qui ont façonné ce pays fascinant, des royaumes et empires du Moyen Âge jusqu'aux indépendances et à l'époque contemporaine.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>L'histoire de l'île de Gorée commence en 1444, lorsque le navigateur portugais Dinis Dias pose le pied sur une terre qu'il baptise « Palma ».</h3>
            <img src="assets/img/senegal.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Te navigateur portugais Dinis Dias atteint l'île de Gorée en 1444, qu'il baptise « Palma »1. Les Hollandais s'emparèrent de Gorée en 1588 et la nommèrent Goede Reede, « le bon port », étymon du nom actuel.</p>
            <p>Les Français s'établissent sur l'île le 1er novembre 16772, mais les Anglais leur disputent cette position jusqu'à la Paix d'Amiens en 1802. L'île fut occupée par les Anglais de 1804 à 1817 puis restituée à la France.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                La ville de Dakar (en wolof : Ndakaaru) est la capitale de la République du Sénégal et de la région de Dakar.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Elle compte 1 056 009 habitants.</li>
                <li><i class="bi bi-check-circle-fill"></i> des 3 630 000 habitants (2018).</li>
                <li><i class="bi bi-check-circle-fill"></i>Under the dual action of migratory flows from the countryside and natural growth, the Dakar region developed very quickly.</li>
              </ul>
              <p>
              Elle est ainsi passée de 400 000 habitants en 1970 à 3,6 millions d'habitants en 2018, soit une augmentation de près de 5 % par an. Métropole macrocéphale, elle abrite la moitié de la population urbaine du pays.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/dakar.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://youtu.be/5xw0yvENQmM?si=YcZ-4vfkZUyFDWe1" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- Fin About Us Section -->

    <!-- ======= Partener Section ======= -->
    <section id="clients" class="clients">
      <div class="section-header">
        <h2>Nos Partenaires</h2>
      </div>
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/bakeli.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/defar.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/ucad.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/wave.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/visa.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/mastercard.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/paypal.png" class="img-fluid" alt=""></div>
            

          </div>
        </div>

      </div>
    </section>
    <!-- Fin Clients Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://youtu.be/Ceel2mdRbWo?si=jxFy7pcP04twdh13" class="glightbox play-btn"></a>
        <h3>Casamance</h3>
        <p>Considérée par beaucoup comme la plus belle région du Sénégal, la Casamance, qui tire son nom d'un fleuve, est située au sud-ouest du pays, entre la Gambie et la Guinée-Bissau. Le « grenier du Sénégal » tire ses richesses des terres fertiles et de la végétation tropicale. Son fleuve et ses affluents alimentent les rizières et les villages.</p>
        <a class="cta-btn" href="https://youtu.be/Ceel2mdRbWo?si=jxFy7pcP04twdh13">Voir la video</a>
      </div>
    </section>
    <!-- FIn Call To Action Section -->

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2> Blogues</h2>
          <p>Dans cette section vous y trouverez un ensemble de blogues concernant le senegal</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-app">Personnage</li>
              <li data-filter=".filter-product">Paysage</li>
              <li data-filter=".filter-branding">Histoire</li>
              <li data-filter=".filter-books">Cultures</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/leopolg.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/Leopold.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Leopold Sedar Senghor</a></h4>
                  <p>Né le 9 octobre 1906 à Joal (Sénégal, AOF) et mort le 20 décembre 2001 à... </p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/goree.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Île de Gorée </a></h4>
                  <p>Située au large de Dakar, dans l'océan Atlantique, l'île de Gorée est une étape...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/thiaroye.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Thiaroye 44</a></h4>
                  <p>Que s'est-il passé le 1er décembre 1944 dans le camp militaire de Thiaroye ?</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/peulh.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Peulhs</a></h4>
                  <p>Les Peuls, appelés aussi Foulani, Fulbhés, Fulfulde, Pular ou encore ...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/cad.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Cheikh Anta Diop</a></h4>
                  <p>Cheikh Anta Diop, né le 29 décembre 1923 à Thieytou et mort le 7 février 1986 ...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/lacrose.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Lac rose </a></h4>
                  <p>Le lac Rose, ou lac Rëtba pour les Wolofs, est une lagune côtière fermée,...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/jola.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Le Jola </a></h4>
                  <p>Le navire, qui reliait la région sud de la Casamance à Dakar, a coulé dans la nuit du ...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/serere.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Sereres</a></h4>
                  <p>Les Sérères (ou « Serer », « Sereer », « Serere » et « Seereer » ) sont un peuple d'Afrique ...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/touba.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Serigne Touba</a></h4>
                  <p>Ahmadou Bamba est né à Mbacké-Baol au nord-est du Sénégal, ville fondée par son arrière...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/sine.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Sine-Saloum</a></h4>
                  <p>Le Sine Saloum est une région naturelle qui se trouve au Nord de la Gambie et au sud de ...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/bataille.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Dakar's battle</a></h4>
                  <p>La bataille de Dakar, également appelée l'opération de Dakar, l'expédition de Dakar ou...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/toucouleur.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Toucouleurs</a></h4>
                  <p>Les Toucouleurs (Tukulor, Tekruri) sont une population d'origine et de langue peule ...</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
      
    </section>
    <!-- Fin Portfolio Section -->


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Quizzs</h2>
          <p>Testez vos connaissances sur le Sénégal à travers les différents quiz que nous vous proposons</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Paysage</h3>
              <p>Pensez-vous connaître le Sénégal comme votre poche ? Démontrez votre expertise en participant à notre quizz sur le paysage Senegalais !</p>
              <a href="/paysage" class="readmore stretched-link">Jouer au quizz <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Culture</h3>
              <p>Pensez-vous connaître le Sénégal comme votre poche ? Démontrez votre expertise en participant à notre quizz sur la culture Senegalaise !</p>
              <a href="/culture" class="readmore stretched-link">Jouer au quizz <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>histoire</h3>
              <p>Pensez-vous connaître le Sénégal comme votre poche ? Démontrez votre expertise en participant à notre quizz sur l'histoire du Senegal !</p>
              <a href="/histoire" class="readmore stretched-link">Jouer au quizz <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <h3>Education</h3>
              <p>Pensez-vous connaître le Sénégal comme votre poche ? Démontrez votre expertise en participant à notre quizz sur l'education Senegalaise !</p>
              <a href="/education" class="readmore stretched-link">Jouer au quizz <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <h3> Personnages</h3>
              <p>Pensez-vous connaître le Sénégal comme votre poche ? Démontrez votre expertise en participant à notre quizz sur nos personnages historique !</p>
              <a href="/personnage" class="readmore stretched-link">Jouer au quizz <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3>Sport</h3>
              <p>Pensez-vous connaître le Sénégal comme votre poche ? Démontrez votre expertise en participant à notre quizz sportif!</p>
              <a href="/sport" class="readmore stretched-link">Jouer au quizz <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section>
    <!-- Fin Our Services Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2> Blogues recentes</h2>
          <p>Soyez le premier dès maintenenat a consulter nos blogues les plus récenctes rediger par nos experts </p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Religion</p>

              <h2 class="title">
                <a href="blog-details.html">the impact of Mouridism in Senegal</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Aissatou Diop</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">June 11, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">will Senegal team will qualify to Fifa world cup 2026 ?</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Sarah Ndiaye</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 15, 2025</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Education</p>

              <h2 class="title">
                <a href="blog-details.html">the minister of education banned saabar in all schools in Senegal </a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Pape Aly Niang</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section>
    <!-- Fin Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>
            Besoin de nous contacter ? Pas de problème, nous sommes là pour vous !</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Localisation:</h4>
                  <p>AV Cheikh Anta Diop, UCAD ,Pavillon A</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>test@ucad.edu.dn</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Tel:</h4>
                  <p>+221 332221100</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Disponiblité:</h4>
                  <p>Lun-Sam: 8h-20h</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom complet ..." required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Mail" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Votre Message ici..." required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
    <!-- Fin Contact Section -->
</main>
<!-- Fin #main -->



<footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Senegal</span>
          </a>
          <p>SENEGALWEB vous propose d'explorer les différentes périodes qui ont façonné ce pays fascinant, des royaumes et empires du Moyen Âge jusqu'aux indépendances et à l'époque contemporaine.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Liens</h4>
          <ul>
            <li><a href="#">Acceuil</a></li>
            <li><a href="#about">A propos</a></li>
            <li><a href="#portfolio">Blogues</a></li>

          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Quizz</h4>
          <ul>
            <li><a href="#services">culture</a></li>
            <li><a href="#services">Histoire</a></li>
            <li><a href="#services">Sport</a></li>
            <li><a href="#services">Paysage</a></li>
            <li><a href="#services">Personnage</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contactez-Nous</h4>
          <p>
            AAV Cheikh Anta Diop<br>
             UCAD <br>
             Pavillon A<br><br>
            <strong>Tel:</strong> +221 332221100<br>
            <strong>Mail:</strong> test@ucad.edu.sn<br>
          </p>

        </div>

      </div>
    </div>
</footer>
  <!-- Fin Footer -->

<!-- Scripts -->

<script src="{{ asset('js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.min.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
</body>
</html>
