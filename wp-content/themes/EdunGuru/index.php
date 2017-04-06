<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="wrap">
    <!-- Section: home -->
    <section id="home">
        
      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>

            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?= get_template_directory_uri(); ?>/images/banners/1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
              <!-- MAIN IMAGE -->
              <img src="<?= get_template_directory_uri(); ?>/images/banners/1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']" 
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;">Education
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Education For EveryOne 
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white" 
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                Edunguru makes to you a unique promise, a Tripartite “SEAL OF TRUST�?.

              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="#">View Details</a> 
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?= get_template_directory_uri(); ?>/images/banners/2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
              <!-- MAIN IMAGE -->
              <img src="<?= get_template_directory_uri(); ?>/images/banners/2.jpg"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                id="rs-2-layer-1"
              
                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['28']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Feed Your Knowledge
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                id="rs-2-layer-2"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-20']"
                data-fontsize="['48']"
                data-lineheight="['70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">World Best Online Courses
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-center" 
                id="rs-2-layer-3"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['50']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                The establishment of EDUNGURU is our contribution to carry on the <br> legacy of our country’s traditions.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-2-layer-4"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['115']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Apply Now</a> 
              </div>
            </li>
 

          </ul>
        </div>
        <!-- end .rev_slider -->
      </div>  
    </section>
    <!-- Diver: Video Background  -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="<?= get_template_directory_uri(); ?>/images/bg/bg1.jpg" data-parallax-ratio="0.7">
        <div class="container pt-60 pb-70">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="text-white text-uppercase font-30 font-weight-600 mt-0 mb-20">Message From The Chairman</h3>
                    </div>
                    <div class="col-md-6">
                        <p class="text-white justify lead">Lorem ipsum dolor sit amet, volupt consectetur adipisicing elit. Rem autem voluptatem obcaecat Lorem ipsum dolor sit amet, volupt consectetur adipisicing elit. Rem autem voluptatem obcaecat Lorem ipsum dolor sit amet, volupt
                            Lorem ipsum dolor sit amet, volupt consectetur adipisicing elit. Rem autem voluptatem obcaecat consectetur adipisicing elit. Rem autem voluptatem obcaecatLorem ipsum dolor sit amet, volupt consectetur adipisicing elit.
                            Rem autem voluptatem obcaecat ipsum dolor sit tetur adipisicing elit amet, consec autem atem obcaecati!
                        </p>
                        <div>
                            <span class="item-right text-white">-Mr. Chairman</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <iframe width="560" height="290" src="https://www.youtube.com/embed/x7qPAY9JqE4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-12 text-center pt-70">
                        <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-white">Delivery <span class="text-white"> Methods</span></h2>
                        <img src="<?= get_template_directory_uri(); ?>/images/Parent-Chart.png" alt="" class="img-responsive img-parent-tree">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: About -->
    <section id="about">
        <div class="container pb-70  pt-70">
            <div class="section-content">
                <div class="row mt-10">
                    <div class="col-sm-12 col-md-6 mb-sm-20">
                        <h3 class="text-uppercase mt-0">About <span class="text-theme-color-2">Us </span></h3>

                        <p class="mb-15 justify">
                            In schools and colleges in the present times, we attain a level of literacy on a particular subject but are not educated there in the real sense. Being educated implies the development of one’s entire personality that would make him a better human being.
                            It is the knowledge of life that is of paramount importance to make one a true human being.
                        </p>
                        <p class="mb-10 justify">
                            The establishment of EDUNGURU is our contribution to carry on the legacy of our country’s traditions. Our vision is to provide an outstanding opportunity to one and all, to march ahead in life by accessing quality education, to learn as and when they
                            want and the way they want.
                        </p>

                        <a class="btn btn-colored btn-theme-colored item-right btn-lg text-uppercase font-13 mt-0" href="#">View Details</a>
                    </div>
                    <div class="col-sm-12 col-md-6 mt-0">
                        <div class="video-popup">
                            <a href="#" title="Video">
                                <img alt="" src="<?= get_template_directory_uri(); ?>/images/about/5.jpg" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="divider parallax salient-feature" data-bg-img="<?= get_template_directory_uri(); ?>/images/bg/bg1.jpg" data-parallax-ratio="0.7" style="height:auto !important;">
        <div class="container pt-0 pb-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white-transparent-9 pb-10 p-40">
                        <h2 class="mb-20 mt-30 line-height-1 text-center text-uppercase">Salient <span class="text-theme-color-2"> Features</span></h2>



                        <div class="row">

                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">An experienced Academic Excellence Board</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">Dedicated Student Advisory Council</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">More than 2400 well designed courses and programs</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip ">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">High quality learning content, vetted by experts</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">

                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-5.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">Time to Time Psychometric analysis of the students to assess their strengths and weaknesses</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip ">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">A well-integrated and timely Assessment Engine for reinforcing the learning.</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip ">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-7.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">A Governing council of eminent people from the Academia</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="icon-box p-0 mb-40">
                                    <div class="icon-holder">
                                        <a href="#" class="icon sailent-fetu-border flip">
                                            <img src="<?= get_template_directory_uri(); ?>/images/SALIENT-FEATURES-8.png" alt="">
                                        </a>
                                    </div>
                                    <div class="icon-box-details ml-sm-0">
                                        <h5 class="icon-box-title letter-space-1 font-weight-600 mb-5">Varied delivery platforms - not restricting a user on the basis of gadget that he uses</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: courses  -->
    <section id="courses">
        <div class="container pr-5 pl-5 mt-0 pt-70 pb-10 mb-0">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-color-2"> Courses</span></h2>
                        <!-- Works Filter -->
                        <div class="portfolio-filter text-center mb-40" data-link-with="grid-petcare-gallery">
                            <a href="#" class="active mb-sm-10" data-filter="*">All</a>
                            <a href="#underGraduate" class="" data-filter=".underGraduate">Under Graduate</a>
                            <a href="#graduate" class="" data-filter=".graduate">Graduate</a>
                            <a href="#postGraduate" class="" data-filter=".postGraduate">Post Graduate</a>
                            <a href="#ssc" class="" data-filter=".ssc">SSC</a>
                            <a href="#hsc" class="" data-filter=".hsc">HSC</a>
                            <a href="#english" class="" data-filter=".english">English</a>
                            <a href="#french" class="" data-filter=".french">French</a>
                        </div>
                        <!-- End Works Filter -->

                        <!-- Portfolio Gallery Grid -->
                        <div id="grid-petcare-gallery" class="gallery-isotope grid-4 gutter clearfix">

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item underGraduate">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c1.jpg">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Main & Advanced</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">IIT JEE</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Portfolio Item End -->
                            <!-- Portfolio Item Start -->
                            <div class="gallery-item graduate">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c4.jpg">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Indian Civil Services</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">IAS/IPS</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item postGraduate">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c5.jpg">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Graduate Pharmacy Aptitude Test</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">GPAT</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item ssc">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c6.jpg">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Secondary School Certificate (CBSE)</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">SSC</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item underGraduate" style="position: absolute; left: 290px; top: 0px;">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c2.jpg">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">National Institute of Design</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">NID</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->
                            <!-- Portfolio Item Start -->
                            <div class="gallery-item hsc">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c11.jpg">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Higher Secondary Certificate (CBSE)</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">HSC</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->
                            <!-- Portfolio Item Start -->
                            <div class="gallery-item english">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c7.jpg">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">English Language Teaching</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">Spoken English</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->
                            <!-- Portfolio Item Start -->
                            <div class="gallery-item french">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/lg2.jpg" style="    height: 319px;">
                                            <!--<div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>$500</span> </a>
                                            </div>-->
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">French Language Teaching</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="#">Spoken French</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                        </div>
                        <a class="btn btn-colored btn-theme-colored item-right btn-lg text-uppercase font-13 mt-0" href="#">View All</a>

                        <!-- End Portfolio Gallery Grid -->
                    </div>
                </div>
            </div>
        </div>
    </section
    <!-- Section: governing council -->
    <section>
        <div class="container pt-40 pb-0">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-uppercase">Governing <span class="text-theme-color-2"> Council</span></h2>

                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix members">
                <div class="col-md-12">
                    <div class="owl-carousel-4col" data-nav="true">
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/team/amartya-sen.jpg">
                                    <!--<div class="hover-link">
                                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Amratya Sen </h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c3.jpg">
                                    <!--<div class="hover-link">
                                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Erin Gruwell</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/team/Devang Khakhar.jpg">
                                    <!--<div class="hover-link">
                                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Devang Khakhar</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/c7.jpg">
                                    <!--<div class="hover-link">
                                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Helen Keller</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/team/Anant Pai.jpg">
                                    <!--<div class="hover-link">
                                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Anant Pai </h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/team/B.M. Hegde.jpg">
                                    <!--<div class="hover-link">
                                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">B.M. Hegde</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Acadmic counsil Ends-->
    <section>
        <div class="container pt-40 pb-0">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-uppercase">Academic <span class="text-theme-color-2"> Council</span></h2>

                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix members">
                <div class="col-md-12">
                    <div class="owl-carousel-4col" data-nav="true">
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/team/4.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Anumula Reddy </h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/team/5.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Aman Bansal</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/team/6.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Arpita Aggarwal</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/project/5.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Pooja Singh</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Acadmic counsil Ends-->

    <!--Student counsil Ends-->
    <section>
        <div class="container pt-40 pb-0">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-uppercase">Student <span class="text-theme-color-2"> Council</span></h2>

                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix members">
                <div class="col-md-12">
                    <div class="owl-carousel-4col" data-nav="true">
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/works/7.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5"> Satwat Jagwani</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/works/8.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Nitin Jain</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/works/10.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Vineeta Goyal</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-effect mb-30">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="<?= get_template_directory_uri(); ?>/images/works/12.jpg">
                                </div>
                                <div class="details p-15 pt-10 pb-10">
                                    <h4 class="title mb-5">Chitraang Murdia</h4>
                                    <a class="btn btn-theme-colored btn-sm" href="#">view details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Section: Gallery -->
    <section id="gallery" class="bg-lighter">
        <div class="container pt-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="text-uppercase title line-bottom mt-0 mb-30">Video <span class="text-theme-color-2">Testimonials</span></h3>
                        <!-- Portfolio Gallery Grid -->

                        <div class="gallery-isotope grid-2 gutter-small clearfix" data-lightbox="gallery">

                            <div class="gallery-item">
                                <div class="thumb">
                                    <img alt="project" src="http://placehold.it/155x116" class="img-fullwidth">
                                    <div class="overlay-shade"></div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="<?= get_template_directory_uri(); ?>/images/gallery/11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-video-camera"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item">
                                <div class="thumb">
                                    <img alt="project" src="http://placehold.it/155x116" class="img-fullwidth">
                                    <div class="overlay-shade"></div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="<?= get_template_directory_uri(); ?>/images/gallery/12.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-video-camera"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                        </div>
                        <a class="btn btn-colored mt-20 btn-theme-colored item-right btn-lg text-uppercase font-13 mt-0" href="#">View All</a>
                        <!-- End Portfolio Gallery Grid -->
                    </div>
                    <div class="col-md-5">
                        <h3 class="text-uppercase title line-bottom mt-0">What <span class="text-theme-color-2 font-weight-700">Clients Say ?</span></h3>
                        <div class="bxslider bx-nav-top">
                            <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                                <div class="comment">
                                    <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                                </div>
                                <div class="content mt-20">
                                    <div class="testimonials-details pull-right flip ml-20">
                                        <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith <span class="designation">(cici inc.)</span></h5> 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                                <div class="comment">
                                    <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                                </div>
                                <div class="content mt-20">
                                    <div class="testimonials-details pull-right flip ml-20">
                                        <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith <span class="designation">(cici inc.)</span></h5> 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                                <div class="comment">
                                    <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                                </div>
                                <div class="content"> 
                                    <div class="testimonials-details pull-right flip ml-20">
                                        <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith <span class="designation">(cici inc.)</span></h5> 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Services -->
    <section>
        <div class="container pt-0 pb-0">
            <div class="section-content">
                <div class="row">
                    <div class="footer-box-wrapper equal-height mt-0">
                        <div class="col-sm-4 footer-box-one pr-0 pl-sm-0">
                            <div class="footer-box icon-box media"> <a href="#" class="media-left pull-left mr-30 mr-sm-15"><i class="fa fa-user text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading title">24 Hours Service</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#"><i class="fa fa-arrow-circle-right font-14"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 footer-box-two pl-0 pr-0">
                            <div class="footer-box icon-box media"> <a href="#" class="media-left pull-left mr-30 mr-sm-15"><i class="fa fa-comments-o text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading title">Online Help</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#"><i class="fa fa-arrow-circle-right font-14"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 footer-box-three pl-0 pr-sm-0">
                            <div class="footer-box icon-box media"> <a href="#" class="media-left pull-left mr-30 mr-sm-15"><i class=" fa fa-credit-card text-white"></i></a>
                                <div class="media-body">
                                    <h4 class="media-heading heading title">Online Payment</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#"><i class="fa fa-arrow-circle-right font-14"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- .wrap -->

<?php
get_footer();?>
<script>
  $(function () {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        if($(this).hasClass('clickdisable')){
            //e.preventdefault();
             console.log('test');
            return false;
           
        }
      


        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('fa-plus-circle').removeClass(' fa-minus-circle');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('fa-minus-circle').removeClass('fa-plus-circle');
        }
  
        e.stopPropagation();

    });
});
</script>
