<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vetclinic
 */

get_header(); ?>

    <!-- Page Banner -->
    <div class="container-fluid no-padding page-banner">
        <!-- Container -->
        <div class="container">
            <!-- Banner Heading -->
            <div class="banner-heading">
                <h3>404 - Error</h3>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">404</li>
                </ol>
            </div><!-- Banner Heading /- -->
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- Error Section -->
    <div class="container-fluid no-padding error-section">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <h2>Sorry,<span>The Page You Requested Was Not Found</span></h2>
            <img src="http://localhost/vetclinic/wp-content/themes/vetclinic/images/icon/error.jpg" alt="error-img"/>
            <div class="error-box">
                <a href="#" title="Go To Home">go to homepage</a>
                <a href="#" title="Go To Previous Page">go to previous page</a>
            </div>
        </div>
        <div class="section-padding"></div>
    </div><!-- Error Section /- -->

    <!-- Newsletter -->
    <div id="newsletter-section" class="newsletter-section container-fluid no-padding">
        <!-- Container -->
        <div Class="container">
            <div class="row">
                <form>
                    <h3>Subscribe Our Newsletter</h3>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div><!-- /input-group -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your E-mail">
                    </div><!-- /input-group -->
                    <input type="submit" value="Go" />
                </form>
            </div>
        </div><!-- Container -->
    </div><!-- Newsletter /- -->

<?php
get_footer();
