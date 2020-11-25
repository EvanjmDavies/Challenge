<?php get_header(); ?>

<!-- Section 1 - Landing Page -->
<section class="landing_page">
  <div class="wrap">

    <!-- Left Content -->
    <div class="flex land_left wrap_half">
      <div class="wrapper">
        <h1>Here is the main headline</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio in et, lectus sit lorem id integer.</p>
        <a href="#"><button type="button" name="button" class="btn">Get Started</button></a>
      </div>
    </div>

  </div>

  <!-- Right Content -->
    <div class="land_right wrap_half">
      <!-- Img -->
      <div class="flex-parent">
        <img src="wp-content/themes/Landify/img/image.png" alt="">
      </div>
      <!-- Purple Circle -->
      <svg width="610" height="640" viewBox="0 0 610 640" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle opacity="0.5" cx="370" cy="270" r="370" fill="#8C30F5"/>
      </svg>
      <!-- Blue Circle -->
      <svg id='blue_circle' width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="36" cy="36" r="36" fill="#75E3EA"/>
      </svg>
      <!-- Yellow Circle -->
      <svg id='yellow_circle' width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="36" cy="36" r="36" fill="#FFC278"/>
      </svg>
    </div>
</section>



<!-- Section 2 IT'S ALL SO SIMPLE -->

<!-- Here I'm using the 'display: grid' styling to acheive the desired layout -->
<!-- And a little jQuery that changes the img scr to flick between the images -->
<section class="section_2">
  <div class="wrap">
    <h2>It's all so simple.</h2>
    <div class="container-fluid">
      <!-- Img wrapper -->
      <div class="wrapper" data-aos="fade-up" data-aos-duration="1000">
        <img src="wp-content/themes/Landify/img/whatsapp.jpg" alt="" class="featured_image">
      </div>
      <div class="wrapper grid_wrap" data-aos="fade-up" data-aos-duration="1000">
        <!-- PANEL 1 -->
        <a class="flex panel panel-active" data-src="wp-content/themes/Landify/img/whatsapp.jpg">
          <div class="flex-center circle">
            <svg width="7" height="24" viewBox="0 0 7 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 0H7V24H1C0.734784 24 0.480429 23.8946 0.292892 23.7071C0.105356 23.5196 0 23.2652 0 23V1C0 0.734784 0.105356 0.480429 0.292892 0.292892C0.480429 0.105356 0.734784 0 1 0Z" fill="#8C30F5"/>
            </svg>
            <svg width="7" height="24" viewBox="0 0 7 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0H6C6.26522 0 6.51957 0.105356 6.70711 0.292892C6.89464 0.480429 7 0.734784 7 1V23C7 23.2652 6.89464 23.5196 6.70711 23.7071C6.51957 23.8946 6.26522 24 6 24H0V0Z" fill="#2EC5CE"/>
            </svg>
            <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 4H6L3 0L0 4ZM0 8H6L3 12L0 8Z" fill="#D6B1FF"/>
            </svg>
          </div>
          <div>
            <h5>STEP 1</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi .</p>
          </div>
        </a>
        <!-- PANEL 2 -->
        <a class="flex panel" data-src="wp-content/themes/Landify/img/img2.jpg">
          <div class="flex-center circle">
            <img src="wp-content/themes/Landify/img/img4.png" alt="">
          </div>
          <div>
            <h5>STEP 2</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi .</p>
          </div>
        </a>
        <!-- PANEL 3 -->
        <a class="flex panel" data-src="wp-content/themes/Landify/img/img3.jpg">
          <div class="flex-center circle">
            <img src="wp-content/themes/Landify/img/img5.png" alt="">
          </div>
          <div>
            <h5>STEP 3</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi .</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>



<!-- Section 3 SOME COUNT THAT MATTERS -->
<!-- I've introduced Bootstrap in this section for no other reason than to give you a variety of my skillset... and it makes things easy for me ;)  -->

<section class="section_3">
  <div class="wrap">
    <h2>Some count that matters</h2>
    <p>Our achievement in the journey depicted in numbers</p>
      <div class="row">

        <!-- PANEL 1 -->
      <div class="panel col-xs-12 col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <svg width="261" height="291" viewBox="0 0 261 291" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d)">
          <path d="M122.5 12.6188C127.45 9.76068 133.55 9.76068 138.5 12.6188L232.918 67.1312C237.869 69.9893 240.918 75.2714 240.918 80.9876V190.012C240.918 195.729 237.869 201.011 232.918 203.869L138.5 258.381C133.55 261.239 127.45 261.239 122.5 258.381L28.0818 203.869C23.1313 201.011 20.0818 195.729 20.0818 190.012V80.9876C20.0818 75.2714 23.1313 69.9893 28.0818 67.1312L122.5 12.6188Z" fill="white"/>
          </g>
          <defs>
          <filter id="filter0_d" x="0.0817566" y="0.47522" width="260.836" height="290.05" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dy="10"/>
          <feGaussianBlur stdDeviation="10"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0.160784 0 0 0 0 0.160784 0 0 0 0 0.164706 0 0 0 0.07 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
          </filter>
          </defs>
        </svg>
        <div class="panel-text">
          <h3>40+</h3>
          <p>Happy Clients</p>
        </div>
      </div>
      <!-- PANEL 2 -->
      <div class="panel col-xs-12 col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <svg width="261" height="291" viewBox="0 0 261 291" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d)">
          <path d="M122.5 12.6188C127.45 9.76068 133.55 9.76068 138.5 12.6188L232.918 67.1312C237.869 69.9893 240.918 75.2714 240.918 80.9876V190.012C240.918 195.729 237.869 201.011 232.918 203.869L138.5 258.381C133.55 261.239 127.45 261.239 122.5 258.381L28.0818 203.869C23.1313 201.011 20.0818 195.729 20.0818 190.012V80.9876C20.0818 75.2714 23.1313 69.9893 28.0818 67.1312L122.5 12.6188Z" fill="white"/>
          </g>
          <defs>
          <filter id="filter0_d" x="0.0817566" y="0.47522" width="260.836" height="290.05" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dy="10"/>
          <feGaussianBlur stdDeviation="10"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0.160784 0 0 0 0 0.160784 0 0 0 0 0.164706 0 0 0 0.07 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
          </filter>
          </defs>
        </svg>
        <div class="panel-text">
          <h3>540+</h3>
          <p>Happy Clients</p>
        </div>
      </div>
      <!-- PANEL 3 -->
      <div class="panel col-xs-12 col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <svg width="261" height="291" viewBox="0 0 261 291" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d)">
          <path d="M122.5 12.6188C127.45 9.76068 133.55 9.76068 138.5 12.6188L232.918 67.1312C237.869 69.9893 240.918 75.2714 240.918 80.9876V190.012C240.918 195.729 237.869 201.011 232.918 203.869L138.5 258.381C133.55 261.239 127.45 261.239 122.5 258.381L28.0818 203.869C23.1313 201.011 20.0818 195.729 20.0818 190.012V80.9876C20.0818 75.2714 23.1313 69.9893 28.0818 67.1312L122.5 12.6188Z" fill="white"/>
          </g>
          <defs>
          <filter id="filter0_d" x="0.0817566" y="0.47522" width="260.836" height="290.05" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dy="10"/>
          <feGaussianBlur stdDeviation="10"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0.160784 0 0 0 0 0.160784 0 0 0 0 0.164706 0 0 0 0.07 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
          </filter>
          </defs>
        </svg>
        <div class="panel-text">
          <h3>300</h3>
          <p>Happy Clients</p>
        </div>
      </div>
      <!-- PANEL 4 -->
      <div class="panel col-xs-12 col-md-3 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <svg width="261" height="291" viewBox="0 0 261 291" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d)">
          <path d="M122.5 12.6188C127.45 9.76068 133.55 9.76068 138.5 12.6188L232.918 67.1312C237.869 69.9893 240.918 75.2714 240.918 80.9876V190.012C240.918 195.729 237.869 201.011 232.918 203.869L138.5 258.381C133.55 261.239 127.45 261.239 122.5 258.381L28.0818 203.869C23.1313 201.011 20.0818 195.729 20.0818 190.012V80.9876C20.0818 75.2714 23.1313 69.9893 28.0818 67.1312L122.5 12.6188Z" fill="white"/>
          </g>
          <defs>
          <filter id="filter0_d" x="0.0817566" y="0.47522" width="260.836" height="290.05" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
          <feOffset dy="10"/>
          <feGaussianBlur stdDeviation="10"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0.160784 0 0 0 0 0.160784 0 0 0 0 0.164706 0 0 0 0.07 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
          </filter>
          </defs>
        </svg>
        <div class="panel-text">
          <h3>25+</h3>
          <p>Happy Clients</p>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
<!-- End of section 4 -->



<!-- Section 4 PROJECT SELECTS -->

<!-- Here I've used a basic PHP loop to pull in the most recent posts that sit in the category 'Web Apps' -->
<?php
   $the_query = new WP_Query( array(
     'category_name' => 'Web Apps',
      'posts_per_page' => 4,
   ));

   // Using the index value I can add custom styling to each iteration
   $i=1;
?>

<section class="section_4">
  <div class="wrap">
    <h2>Project Selects</h2>
    <div class="container-fluid">
      <div class="row">

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
              <a class="ml-1 bg-col-<?php echo $i;?> panel">
                <?php the_post_thumbnail(); ?>
              </a>
              <h4><?php the_title(); ?></h4>
              <?php the_excerpt(); ?>
            </div>

  <?php $i++;?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No Projects'); ?></p>
<?php endif; ?>
<!-- End of Section 4 -->

      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
