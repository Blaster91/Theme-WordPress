<?php get_header(); ?>
  <!-- Header image -->
  <header id="header">
    <section id="logo" class="col-12 p-5">
        <img src="<?php bloginfo('template_directory'); ?>/img/header.png"/>
    </section>
  </header>

  <main>
    <!-- Menu -->
    <section id="menu" class="bg-light">
      <nav class="container navbar navbar-expand-lg bg-transparent navbar-dark">
        <a href="#menu">
          <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo"/>
        </a>

        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="row py-3 collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <?php

            $args = array(
    'menu_class' => 'nav navnav',
    'menu' => '(your_menu_id)'
);
            wp_nav_menu($args,
            array(
              'theme_location' => 'ul',
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarCollapse',
        'menu_class'      => 'nav-item',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '<ul class="nav justify-content-end w-100 %2$s">%3$s</ul>',
        'depth'           => 0
            ));

             ?>

                <li class="nav-item"><a class="nav-link fas fa-search fa-flip-horizontal" href="#" style="color:#00a99d;"></a></li>
          </ul>
        </div>
      </nav>
    </section>
    <!-- What we offer -->
    <section id="offer" class="pt-5">
      <div class="text-center">
        <h1 class="h3"><img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="hideSmall" /> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" /> <b>WHAT WE <span class="titleBlue">OFFER</span></b> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" class="rotate180" /> <img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="rotate180 hideSmall" /></h1>
        <p class="txt-light-grey">We offer our customers the best services & solutions, this is our main services list</p>
      </div>

      <div class="container">
        <div class="row d-flex justify-content-center">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="card card-article">
              <?php the_post_thumbnail(); ?>
              <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php  the_excerpt(); ?></p>
                <a class="button-article-card" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><button type="button" class="btn btn-white font-weight-bold smallText">READ MORE</button></a>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          <?php endwhile; else : ?>
          <p>Sorry, no posts were found!</p>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <!-- Section icon_1 -->
    <div class="section-nul text-center position-relative mt-5">
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_bg_icon_1.png" />
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_icon_1.png" />
    </div>

    <!-- Amazing features -->
    <section id="feature" class="bg-dark-grey">
      <div class="container">
        <div class="text-center text-light py-5">
          <h1 class="h3"><img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" /> <b>AMAZING <span class="titleBlue">FEATURES</span></b> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" class="rotate180" /></h1>
            <p class="txt-title-grey">With unlimited features that we offer, we promise it's possible to make eveything that was impossible for you !</p>
          </div>

          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="row">
                <div class="col-12 col-xl-12 col-md-4">
                  <div class="row">
                    <div class="col-2 px-0 text-center">
                      <img src="<?php bloginfo('template_directory'); ?>/img/icon_g_1.png" />
                    </div>
                    <div class="col-10">
                      <p class="font-weight-bold mb-0 text-white">RESPONSIVE & MULTIPURPOSE</p>
                      <p class="text-justify txt-title-grey mediumText">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum.</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-xl-12 col-md-4 m-top">
                  <div class="row">
                    <div class="col-2 px-0 text-center">
                      <img src="<?php bloginfo('template_directory'); ?>/img/icon_g_2.png" />
                    </div>
                    <div class="col-10">
                      <p class="font-weight-bold mb-0 text-white">EASY CUSTOMIZATION</p>
                      <p class="text-justify txt-title-grey mediumText">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum.</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-xl-12 col-md-4 m-top">
                  <div class="row">
                    <div class="col-2 px-0 text-center">
                      <img src="<?php bloginfo('template_directory'); ?>/img/icon_g_3.png" />
                    </div>
                    <div class="col-10">
                      <p class="font-weight-bold mb-0 text-white">UNLIMITED FEATURES</p>
                      <p class="text-justify txt-title-grey mediumText">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-8 hideSmall">
              <img  src="<?php bloginfo('template_directory'); ?>/img/ecran.png" />
            </div>
          </div>
        </div>
    </section>

    <!-- 6 block information -->
    <section id="information">
      <div class="container mediumText">
        <div class="row py-5">
          <div class="col-12 col-sm-6 col-md-4 px-4 my-4" onmouseenter="overFeature(this)" onmouseleave="leaveFeature(this)">
            <div class="row">
              <div class="col-2 px-0 text-center img-element">
                <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_2.png" />
                <img class="img_feature_1" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_1.png" />
                <img class="logo_feature" src="<?php bloginfo('template_directory'); ?>/img/icon_1.png" />
              </div>
              <div class="col-10">
                <p class="font-weight-bold mb-0 txt-title-grey">RESPONSIVE & MULTIPURPOSE</p>
                <p class="txt-light-grey smallText">Desktops, Tablets & Phones</p>
                <p class="text-justify">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum fringilla accumsan. Praesent arcu turpis.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 px-4 my-4" onmouseenter="overFeature(this)" onmouseleave="leaveFeature(this)">
            <div class="row">
              <div class="col-2 px-0 text-center img-element">
                <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_2.png" />
                <img class="img_feature_1" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_1.png" />
                <img class="logo_feature" src="<?php bloginfo('template_directory'); ?>/img/icon_2.png" />
              </div>
              <div class="col-10">
                <p class="font-weight-bold mb-0 txt-title-grey">EASY CUSTOMIZATION</p>
                <p class="txt-light-grey smallText">One Click Demo Content Installation</p>
                <p class="text-justify">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum fringilla accumsan. Praesent arcu turpis.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 px-4 my-4" onmouseenter="overFeature(this)" onmouseleave="leaveFeature(this)">
            <div class="row">
              <div class="col-2 px-0 text-center img-element">
                <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_2.png" />
                <img class="img_feature_1" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_1.png" />
                <img class="logo_feature" src="<?php bloginfo('template_directory'); ?>/img/icon_4.png" />
              </div>
              <div class="col-10">
                <p class="font-weight-bold mb-0 txt-title-grey">UNLIMITED FEATURES</p>
                <p class="txt-light-grey smallText">Shortcodes, Typography & Different Layouts</p>
                <p class="text-justify">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum fringilla accumsan. Praesent arcu turpis.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 px-3 my-4" onmouseenter="overFeature(this)" onmouseleave="leaveFeature(this)">
            <div class="row">
              <div class="col-2 px-0 text-center img-element">
                <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_2.png" />
                <img class="img_feature_1" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_1.png" />
                <img class="logo_feature" src="<?php bloginfo('template_directory'); ?>/img/icon_5.png" />
              </div>
              <div class="col-10">
                <p class="font-weight-bold mb-0 txt-title-grey">CLEAN & MODULAR CODING</p>
                <p class="txt-light-grey smallText">100% Clean, Valid & Well-Commented Coding</p>
                <p class="text-justify">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum fringilla accumsan. Praesent arcu turpis.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 px-4 my-4" onmouseenter="overFeature(this)" onmouseleave="leaveFeature(this)">
            <div class="row">
              <div class="col-2 px-0 text-center img-element">
                <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_2.png" />
                <img class="img_feature_1" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_1.png" />
                <img class="logo_feature" src="<?php bloginfo('template_directory'); ?>/img/icon_6.png" />
              </div>
              <div class="col-10">
                <p class="font-weight-bold mb-0 txt-title-grey">THE BEST E-COMMERCE SOLUTIONS</p>
                <p class="txt-light-grey smallText">WooCommerce Fully Integration</p>
                <p class="text-justify">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum fringilla accumsan. Praesent arcu turpis.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 px-4 my-4" onmouseenter="overFeature(this)" onmouseleave="leaveFeature(this)">
            <div class="row">
              <div class="col-2 px-0 text-center img-element">
                <img class="mt-4" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_2.png" />
                <img class="img_feature_1" src="<?php bloginfo('template_directory'); ?>/img/bg_feature_1.png" />
                <img class="logo_feature" src="<?php bloginfo('template_directory'); ?>/img/icon_3.png" />
              </div>
              <div class="col-10">
                <p class="font-weight-bold mb-0 txt-title-grey">AWESOME FRIENDLY SUPPORT</p>
                <p class="txt-light-grey smallText">Free Lifetime Support & Updates</p>
                <p class="text-justify">Proin in magna a ipsum viverra scelerisque eu nec turp, Nunc vestibulum fringilla accumsan. Praesent arcu turpis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section icon_2 -->
    <div class="section-nul text-center position-relative mt-4">
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_bg_icon_1.png" />
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_icon_2.png" />
    </div>

    <!-- Skills -->
    <section id="skill" class="bg-dark-grey">
      <div class="text-center pt-5">
        <h1 class="h3 text-light"><img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" /> <b>OUR POWERFUL <span class="titleBlue">SKILLS</span></b> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" class="rotate180" /></h1>
          <p class="txt-title-grey">With unlimited features that we offer, we promise it's possible to make eveything that was impossible for you !</p>
        </div>

      <div class="container pb-5">
      	<div class="row">
          <div class="mt-5 col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="progress mx-auto" data-value='80'>
              <span class="progress-left">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="h2 font-weight-bold text-light">80<span class="size-50">%</span></div>
              </div>
            </div>

            <p class="text-center mt-3 txt-light-grey font-weight-bold smallText">WEB DESIGN</p>
          </div>

          <div class="mt-5 col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="progress mx-auto" data-value='92'>
              <span class="progress-left">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="h2 font-weight-bold text-light">92<span class="size-50">%</span></div>
              </div>
            </div>

            <p class="text-center mt-3 txt-light-grey font-weight-bold smallText">WEB DEVELOPMENT</p>
          </div>

          <div class="mt-5 col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="progress mx-auto" data-value='68'>
              <span class="progress-left">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="h2 font-weight-bold text-light">68<span class="size-50">%</span></div>
              </div>
            </div>

            <p class="text-center mt-3 txt-light-grey font-weight-bold smallText">SPEED OPTIMIZATION</p>
          </div>

          <div class="mt-5 col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="progress mx-auto" data-value='100'>
              <span class="progress-left">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="h2 font-weight-bold text-light">100<span class="size-50">%</span></div>
              </div>
            </div>

            <p class="text-center mt-3 txt-light-grey font-weight-bold smallText">CUSTOMER SUPPORT</p>
          </div>

          <div class="mt-5 col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="progress mx-auto" data-value='83'>
              <span class="progress-left">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="h2 font-weight-bold text-light">83<span class="size-50">%</span></div>
              </div>
            </div>

            <p class="text-center mt-3 txt-light-grey font-weight-bold smallText">MARKETING</p>
          </div>

          <div class="mt-5 col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="progress mx-auto" data-value='50'>
              <span class="progress-left">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar border-light-blue"></span>
              </span>
              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                <div class="h2 font-weight-bold text-light">50<span class="size-50">%</span></div>
              </div>
            </div>

            <p class="text-center mt-3 txt-light-grey font-weight-bold smallText">ADVERTISEMENT</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Samples -->
    <section id="sample">
      <div class="text-center py-5 col-12">
        <p class="h3"><img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="hideSmall" /> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" /> <b>SAMPLE <span class="titleBlue">WORKS</span></b> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" class="rotate180" /> <img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="rotate180 hideSmall" /></p>
          <p class="txt-light-grey">Let's take a loot at some of the best of our works here, we love them and hope you too</p>
              <div class="container-fluid">
               <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 portfolio">
                  <div class="container-fluid hov">
                    <div class="row iconsPortf">
                      <div class="pos test">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-link"></div>
                        </a>
                      </div>
                      <div class="pos search">
                        <a href="#sample">
                          <img src="<?php bloginfo('template_directory'); ?>/img/backicon.png">
                          <div class="centered fas fa-search"></div>
                        </a>
                      </div>
                    </div>
                    <div class="row infosPortf">
                      <div class="col-12">
                        <p class="bold">Name of portfolio</p>
                        <p>group / type</p>
                        <p>♥ 150</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><br/>

              <div>
                <a href="#sample" id="viewAW">VIEW ALL WORKS</a>
              </div>
    </section>

    <!-- Section icon_3 -->
    <div class="section-nul text-center position-relative">
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_bg_icon_1.png" />
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_icon_3.png" />
    </div>

    <!-- Facts -->
    <section id="fact" class="bg-dark-grey">
      <div class="text-center pt-5">
        <h1 class="h3 text-light"><img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" /> <b>COMPANY <span class="titleBlue">FACTS</span></b> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" class="rotate180" /></h1>
        <p class="txt-title-grey">We do love to work and increase our counter numbers, this is what we've done till now</p>
      </div>

      <div class="container">
        <div class="row text-center txt-interval-grey">
          <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <p class="mb-0"><span class="shape">&#9632;</span> <span data-value="218" class="largeTitle text-light countNumber">0</span> <span class="shape">&#9632;</span></p>
            <p class="mb-2">—————&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/img/facts_icon_1.png" />&nbsp;&nbsp;&nbsp;—————</p>
            <p class="smallText font-weight-bold"><b>COMPLETED PROJECTS</b></p>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 mb-3">
            <p class="mb-0"><span class="shape">&#9632;</span> <span data-value="360" class="largeTitle text-light countNumber">0</span> <span class="shape">&#9632;</span></p>
            <p class="mb-2">—————&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/img/facts_icon_2.png" />&nbsp;&nbsp;&nbsp;—————</p>
            <p class="smallText font-weight-bold"><b>HOURS OR WORK / MONTH</b></p>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 mb-3">
            <p class="mb-0"><span class="shape">&#9632;</span> <span data-value="135" class="largeTitle text-light countNumber">0</span> <span class="shape">&#9632;</span></p>
            <p class="mb-2">—————&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/img/facts_icon_1.png" />&nbsp;&nbsp;&nbsp;—————</p>
            <p class="smallText font-weight-bold"><b>SOLVED TICKETS</b></p>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 mb-3">
            <p class="mb-0"><span class="shape">&#9632;</span> <span data-value="174" class="largeTitle text-light countNumber">0</span> <span class="shape">&#9632;</span></p>
            <p class="mb-2">—————&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/img/facts_icon_1.png" />&nbsp;&nbsp;&nbsp;—————</p>
            <p class="smallText font-weight-bold"><b>SATISFIED CLIENTS</b></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Satisfied ? -->
    <section id="opinion" class="bg-light-blue">
      <div class="container font-weight-bold">
        <div class="row py-5">
          <div class="col-12 col-xl-8 text-light centered-S">ARE YOU SATISFIED WITH UNLIMITED FEATURES THAT WE OFFER ?</div>
          <div class="col-6 col-xl-2 mt-2 largerMT-S">
            <button type="button" class="btn btn-light font-weight-bold mt-n3 txt-interval-grey smallText float-right">PURCHASE IT NOW</button>
          </div>
          <div class="col-6 col-xl-2 mt-2 largerMT-S">
            <button type="button" class="btn btn-light font-weight-bold mt-n3 txt-interval-grey smallText float-left">CONTACT US NOW</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Members -->
    <section id="member" class="pt-5">
      <div class="text-center">
        <h1 class="h3"><img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="hideSmall" /> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" /> <b><span class="titleBlue">TEAM</span> MEMBERS</b> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" class="rotate180" /> <img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="rotate180 hideSmall" /></h1>
        <p class="txt-title-grey">We're some creative people with powerful knowledge & awesome skills behind the scene bringing you the bests</p>
      </div>

      <div class="container">
        <div class="row text-center">
          <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <div class="card p-0">
              <img src="<?php bloginfo('template_directory'); ?>/img/member_1.jpg" class="card-img-top">
              <div class="text-center">
                <button class="btn bg-light-blue text-light font-weight-bold mt-n3">ALEXIS SIMPSON</button>
              </div>
              <p class="mt-3 mb-0">CEO & Developer</p>
              <hr />
              <p class="txt-interval-grey mb-1 smallText">a.simpson@unique.com</p>
              <p class="txt-interval-grey mb-2 smallText">*1 911 (77) 222-1111</p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <div class="card p-0">
              <img src="<?php bloginfo('template_directory'); ?>/img/member_1.jpg" class="card-img-top">
              <div class="text-center">
                <button class="btn bg-light-blue text-light font-weight-bold mt-n3">STEVEN COLE</button>
              </div>
              <p class="mt-3 mb-0">User Interface Designer</p>
              <hr />
              <p class="txt-interval-grey mb-1 smallText">s.cole@unique.com</p>
              <p class="txt-interval-grey mb-2 smallText">*1 911 (77) 222-1111</p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <div class="card p-0">
              <img src="<?php bloginfo('template_directory'); ?>/img/member_1.jpg" class="card-img-top">
              <div class="text-center">
                <button class="btn bg-light-blue text-light font-weight-bold mt-n3">FRANK PIENER</button>
              </div>
              <p class="mt-3 mb-0">Sales Manager</p>
              <hr />
              <p class="txt-interval-grey mb-1 smallText">f.piener@unique.com</p>
              <p class="txt-interval-grey mb-2 smallText">*1 911 (77) 222-1111</p>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <div class="card p-0">
              <img src="<?php bloginfo('template_directory'); ?>/img/member_1.jpg" class="card-img-top">
              <div class="text-center">
                <button class="btn bg-light-blue text-light font-weight-bold mt-n3">ASHLEY LENNON</button>
              </div>
              <p class="mt-3 mb-0">IT Specialist</p>
              <hr />
              <p class="txt-interval-grey mb-1 smallText">a.lennon@unique.com</p>
              <p class="txt-interval-grey mb-2 smallText">*1 911 (77) 222-1111</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section icon_4 -->
    <div class="section-nul text-center position-relative mt-5">
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_bg_icon_2.png" />
      <img class="position-absolute" src="<?php bloginfo('template_directory'); ?>/img/s_icon_4.png" />
    </div>

    <!-- Commentary -->
    <section class="bg-light-blue">
      <div class="container">
        <div class="row pt-5 text-center">
          <div class="commentary d-block">
            <button type="button" class="btn btn-light txt-light-grey font-weight-bold mt-2"><span class="txt-light-blue">ALEXIS SIMPSON</span> - CEO & Developer</button>
            <p class="my-4 h5 text-white">ˮLorem ipsum dolor sit amet, laudantium, totam rem. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo consequat magna, id molestie ipsum volutpat quis.ˮ</p>
          </div>

          <div class="commentary d-none">
            <button type="button" class="btn btn-light txt-light-grey font-weight-bold mt-2"><span class="txt-light-blue">STEVEN COLE</span> - User Interface Designer</button>
            <p class="my-4 h5 text-white">ˮLorem ipsum dolor sit amet, laudantium, totam rem. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo consequat magna, id molestie ipsum volutpat quis.ˮ</p>
          </div>

          <div class="commentary d-none">
            <button type="button" class="btn btn-light txt-light-grey font-weight-bold mt-2"><span class="txt-light-blue">FRANK PIENER</span> - Sales Manager</button>
            <p class="my-4 h5 text-white">ˮLorem ipsum dolor sit amet, laudantium, totam rem. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo consequat magna, id molestie ipsum volutpat quis.ˮ</p>
          </div>

          <div class="commentary d-none">
            <button type="button" class="btn btn-light txt-light-grey font-weight-bold mt-2"><span class="txt-light-blue">ASHLEY LENNON</span> - IT Specialist</button>
            <p class="my-4 h5 text-white">ˮLorem ipsum dolor sit amet, laudantium, totam rem. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo consequat magna, id molestie ipsum volutpat quis.ˮ</p>
          </div>
        </div>

        <div class="row justify-content-md-center pb-5 text-center">
          <div class="col-12">
            <div class="button-commentary rotate180" onclick="showCommentaries(1)">►</div>
            <div class="button-commentary bg-light-grey" onclick="showCommentaries(2)">►</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Marks -->
    <section id="mark" class="bg-dark-grey">
      <div class="container text-center py-5">
        <div class="row">
            <div id="myCarousel" class="carousel" data-ride="carousel">
              <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
                <div class="button-commentary rotate180">►</div>
              </a>
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                      <div class="col-lg-2 bg-grey-color p-4 m-2">
                          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo_client_1.png">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-lg-2 bg-grey-color p-4 m-2">
                          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo_client_2.png">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-lg-2 bg-grey-color p-4 m-2">
                          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo_client_3.png">
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-lg-2 bg-grey-color p-4 m-2">
                          <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo_client_4.png">
                      </div>
                  </div>
              </div>
              <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                <div class="button-commentary">►</div>
              </a>
            </div>
        </div>
      </div>
    </section>

    <!-- Prices -->
    <section id="price">
      <div class="container">
          <div class="text-center pt-5">
            <h1 class="h3"><img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="hideSmall" /> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" /> <b>REAL CHEAP <span class="titleBlue">PRICES</span></b> <img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" class="rotate180" /> <img src="<?php bloginfo('template_directory'); ?>/img/doubleLines.png" class="rotate180 hideSmall" /></h1>
              <p class="txt-title-grey">We offer all our services in real low prices in comparaison with similar companies</p>
            </div>

           <div class="text-center row pb-5">
             <div class="col-12 col-sm-6 col-lg-3 my-5">
               <div class="border rounded">
                 <div class="text-center">
                   <button type="button" class="btn bg-dark-grey text-light font-weight-bold mt-n3">STANDARD PLAN</button>
                 </div>
                 <p class="mt-2">$ <b class="priceSub">19.<span class="cents">99</span></b>Monthly</p>
                 <hr />
                 <p>5 Projects</p>
                 <p>5 GB Storage</p>
                 <p>Unlimited Users</p>
                 <p>10 GB Bandwitch</p>
                 <p>Enhanced Security</p>
                 <hr />
                 <div class="text-center mb-3">
                   <button type="button" class="btn bg-light-blue text-light font-weight-bold">SIGN UP NOW</button>
                 </div>
               </div>
             </div>

             <div class="col-12 col-sm-6 col-lg-3 my-5">
               <div class="border rounded">
                 <div class="text-center">
                   <button type="button" class="btn bg-light-blue text-light font-weight-bold mt-n3">PREMIUM PLAN</button>
                 </div>
                 <p class="mt-2">$ <b class="priceSub">29.<span class="cents">99</span></b>Monthly</p>
                 <hr />
                 <p>10 Projects</p>
                 <p>15 GB Storage</p>
                 <p>Unlimited Users</p>
                 <p>20 GB Bandwitch</p>
                 <p>Enhanced Security</p>
                 <hr />
                 <div class="text-center mb-3">
                   <button type="button" class="btn bg-light-blue text-light font-weight-bold">SIGN UP NOW</button>
                 </div>
               </div>
             </div>

             <div class="col-12 col-sm-6 col-lg-3 my-5">
               <div class="border rounded">
                 <div class="text-center">
                   <button type="button" class="btn bg-dark-grey text-light font-weight-bold mt-n3"><img src="<?php bloginfo('template_directory'); ?>/img/star.png" /> ADVANCED PLAN <img src="<?php bloginfo('template_directory'); ?>/img/star.png" /> </button>
                 </div>
                 <p class="mt-2">$ <b class="priceSub">49.<span class="cents">99</span></b>Monthly</p>
                 <hr />
                 <p>15 Projects</p>
                 <p>30 GB Storage</p>
                 <p>Unlimited Users</p>
                 <p>50 GB Bandwitch</p>
                 <p>Enhanced Security</p>
                 <hr />
                 <div class="text-center mb-3">
                   <button type="button" class="btn bg-light-blue text-light font-weight-bold">SIGN UP NOW</button>
                 </div>
               </div>
             </div>

             <div class="col-12 col-sm-6 col-lg-3 my-5">
               <div class="border rounded">
                 <div class="text-center">
                   <button type="button" class="btn bg-dark-grey text-light font-weight-bold mt-n3">ULTIMATE PLAN</button>
                 </div>
                 <p class="mt-2">$ <b class="priceSub">99.<span class="cents">99</span></b>Monthly</p>
                 <hr />
                 <p>Unlimited Projects</p>
                 <p>Unlimited  Storage</p>
                 <p>Unlimited Users</p>
                 <p>Unlimited Bandwitch</p>
                 <p>Enhanced Security</p>
                 <hr />
                 <div class="text-center mb-3">
                   <button type="button" class="btn bg-light-blue text-light font-weight-bold">SIGN UP NOW</button>
                 </div>
               </div>
             </div>
           </div>
      </div>
    </section>

    <!-- Purchase -->
    <section id="purchase" class="bg-light-grey">
      <div class="container font-weight-bold">
        <div class="row py-5">
          <div class="col-12 col-xl-10 text-light centered-S h3">UNIQUE! We Do <span class="txt-light-blue">&#9829;</span> It And Hope You Too</div>
          <div class="col-12 col-xl-2 mt-2 largerMT-S text-center">
            <button type="button" class="btn bg-light-blue text-light font-weight-bold mt-n3 txt-interval-grey mediumText float-middle">PURCHASE IT NOW</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Media links -->
    <section id="media_link" class="bg-dark-grey">
      <div class="container-fluid">
        <div class="text-center">
          <img id="logoMedia" src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="center-block" alt="logo"/>
            <div id="iconMedia" class="row py-5 justify-content-center">

              <div>
                <a href="#media_link" class="fab fa-facebook-f"></a>
                <a href="#media_link" class="fab fa-twitter"></a>
                <a href="#media_link" class="fab fa-pinterest-p"></a>
              </div>

              <div>
                <a href="#media_link" class="fas fa-rss"></a>
                <a href="#media_link" class="fab fa-vimeo-v"></a>
                <a href="#media_link" class="fab fa-youtube"></a>
              </div>

              <div>
                <a href="#media_link" class="fab fa-linkedin-in"></a>
                <a href="#media_link" class="fab fa-dribbble"></a>
                <a href="#media_link" class="fab fa-stumbleupon"></a>
              </div>

            </div>
        </div>
      </div>
    </section>

    <!-- Map -->
    <section id="contact" class="position-relative">
      <div class="containerfluid">
        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-74.21813964843751%2C40.54276511228886%2C-73.76495361328126%2C40.76702162667872&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/>
      </div>

      <div id="contactForm" class="position-absolute bg-light rounded p-3 border">
        <div><input type="text" name="name" placeholder="Name" class="form-control rounded" /></div>
        <div><input type="text" name="mail" placeholder="Email" class="form-control rounded mt-2" /></div>
        <div><textarea name="message" placeholder="Message" class="form-control rounded noresize mt-2"></textarea></div>
        <div class="text-center"><button class="btn bg-light-blue rounded mt-2 font-weight-bold smallText w-100 text-light">SUBMIT MESSAGE</button></div>
      </div>
    </section>
  </main>

    <!-- Footer -->
    <footer id="footer">
      <section id="copyright" class="col-12">
        <p>Copyright © 2014 Startuprr, All Rights Reserved.</p>
      </section>
    </footer>

    <!-- Cookie bar -->
    <div class="containerfluid bg-light-blue mediumText" id="cookieBar">
      <div class="row">
        <div class="col-9 col-sm-10 text-center font-weight-bold">En poursuivant votre navigation, vous acceptez le dépôt de cookies tiers afin de vous proposer des contenus et services adaptés à vos centres d'intérêts.</div>
        <div class="col-3 col-sm-2 text-left">
          <button class="btn bg-light btn-sm mt-2 font-weight-bold" onClick="acceptCookie()">Accepter</button>
        </div>
      </div>
    </div>



<?php get_footer(); ?>
