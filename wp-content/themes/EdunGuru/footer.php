<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>



<footer id="footer" class="footer bg-black-222" data-bg-img="<?= get_template_directory_uri(); ?>/images/footer-bg.png">
    <div class="container pt-70 pb-40">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="">
                    <h3 class="bg-theme-colored p-15 mt-0 pl-30 mb-0 text-white">Contact Us</h3>
                    <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                    <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-10">
                                    <div class="styled-select">
                                        <select id="booking_service" name="booking_service" class="form-control" required="" aria-required="true">
                                            <option value="">- Contact as -</option>
                                            <option value="Student">Student</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Parent">Parent</option>  
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <textarea id="form_message" name="form_message" class="form-control required" rows="2" placeholder="Your message" aria-required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Submit</button>
                        </div>
                    </form>
                    <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
                    <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                        <label class="display-block" for="mce-EMAIL"></label>
                        <div class="input-group">
                            <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control" data-height="37px" id="mce-EMAIL">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-6 col-md-6"> 
                <h3 class="text-uppercase ml-15 title line-bottom mt-0 text-white">News & <span class="text-theme-color-2 font-weight-700">Alert</span></h3>
                <div class="bxslider bx-nav-top p-0 m-0">
                    <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-20">
                        <div class="pricing table-horizontal maxwidth400">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb">
                                        <img class="img-fullwidth mb-sm-0" src="http://placehold.it/235x160" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 p-10 pl-sm-50">
                                    <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>

                                    <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-30">
                        <div class="pricing table-horizontal maxwidth400">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb">
                                        <img class="img-fullwidth mb-sm-0" src="http://placehold.it/235x160" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 p-10 pl-sm-50">
                                    <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>

                                    <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-30">
                        <div class="pricing table-horizontal maxwidth400">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb">
                                        <img class="img-fullwidth mb-sm-0" src="http://placehold.it/235x165" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 p-10 pl-sm-50">
                                    <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>

                                    <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p>
                                    <a class="font-16  text-white mt-20" href="#">Read More →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-30">
                        <div class="pricing table-horizontal maxwidth400">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb">
                                        <img class="img-fullwidth mb-sm-0" src="http://placehold.it/235x165" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 p-10 pl-sm-50">
                                    <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>

                                    <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p>
                                    <a class="font-16  text-white mt-20" href="#">Read More →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        </div>
    </div>
    <div class="footer-bottom bg-black-333">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-md-6">
                    <p class="font-11 text-black-777 m-0">Copyright &copy;2017 edunguru. All Rights Reserved. Developed by <a href="http://infinisystem.com/">Infini Systems</a></p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-12">
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Help Desk</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>


<!-- external javascripts -->
<script>
var $ = jQuery;
</script>

<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?= get_template_directory_uri(); ?>/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<!-- JS | Custom script for all pages --> 
<script  type="text/javascript"  src="<?= get_template_directory_uri(); ?>/js/custom-default.js"></script>
<script  type="text/javascript"  src="<?= get_template_directory_uri(); ?>/js/custom.js"></script>
<?php // wp_footer(); ?>
</body>
</html>