<!-- 
    Template Name: Homepage
-->

<?php
get_header();
?>

<section class="slider">
    <div class="container slider-container">
        <?php
        echo do_shortcode('[smartslider3 slider="3"]');
        ?>
    </div>
</section>

<div style="margin-left: 1rem; margin-right:1rem">
    <div class="container shipping-flex">
        <section class="shipping">
            <div class="shipping-1">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="shipping-svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                </div>

                <div>
                    <div class="shipping-title">FREE SHIPPING</div>
                    <div class="shipping-heading shipping-heading-width">
                        Free shipping on all orders over £150.
                    </div>
                </div>
            </div>

            <div class="shipping-1">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="shipping-svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.121 7.629A3 3 0 009.017 9.43c-.023.212-.002.425.028.636l.506 3.541a4.5 4.5 0 01-.43 2.65L9 16.5l1.539-.513a2.25 2.25 0 011.422 0l.655.218a2.25 2.25 0 001.718-.122L15 15.75M8.25 12H12m9 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div>
                    <div class="shipping-title">FUNDRAISERS</div>
                    <div class="shipping-heading">
                        Easily raise money for your school!
                    </div>
                </div>
            </div>

            <div class="shipping-1">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="shipping-svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                </div>

                <div>
                    <div class="shipping-title">
                        FREE DESIGN KITS
                    </div>
                    <div class="shipping-heading">
                        Easily raise money for your school!
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<div class="our-projects">
    <div class="container">
        <div class="our-projects-title">
            Our Fundraising Projects
        </div>

        <div class="our-projects-wrap">
            <?php
            $wpnew = array(
                'post_type' => 'ourprojects',
                'post_status' => 'publish'
            );

            $projectsquery = new Wp_Query($wpnew);
            $i = 0;
            while ($projectsquery->have_posts()) {
                $projectsquery->the_post();
                $i++;
                $imagepath = wp_get_attachment_image_src(
                    get_post_thumbnail_id(),
                    'large'
                );
                ?>
                <div class="our-projects-item-<?php echo $i; ?>">
                    <a href="<?php the_permalink(); ?>" class="our-projects-content">
                        <img src="<?php echo $imagepath[0] ?>" class="our-projects-image" alt="image"
                            class="our-projects-image" />
                        <div class="our-projects-heading">
                            <?php the_title(); ?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="clear-both"></div>
<div class="welcome">
    <div class="container welcome-container">
        <div>
            <div class='welcome-heading'>Welcome to Fundraisers for Schools!</div>
            <div class='welcome-desc'>Fundraisers for Schools aims to make the task of raising funds for your school as
                easy as possible. We
                provide the product ideas (from Mugs and Coasters to Drawstring PE Bags and Badges), the Design Kits
                (free of charge) and the Order Forms – all that you need to do is post the Design Kits back to us to
                process once they have been filled out by the students!
                <br><br>
                We hand-print all of our products and are able to turn orders around in a matter of weeks, sometimes in
                as little as two weeks! Also, we don’t have any minimum order quantities so there’s no need to worry
                about meeting any minimum order sizes!
                <br><br>
                Our pricing structure allows your organisation to make significant profits per item and we always
                endeavour to deliver all orders to you for free*. Give us a call on <b>0330 229 0546</b> today in order
                to
                discuss your individual needs and also to order your <b>FREE</b> Design Pack.
            </div>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/8.jpg" class="welcome-image" alt="image">
        </div>
    </div>
</div>

<div class='newsletter'>
<section class="newsletter-wave" style="
        background: rgb(236, 9, 140);
        background: linear-gradient(
          0deg,
          rgba(236, 9, 140, 1) 0%,
          rgba(130, 2, 99, 1) 33%,
          rgba(135, 2, 101, 1) 55%,
          rgba(236, 9, 140, 1) 100%
        );
      ">
    <div class="container newsletter-container">
        <div>
            <div class="newsletter-heading">
                Subscribe to our newsletter
            </div>
            <div class="newsletter-desc">
                Be the first to get our latest products or blogs information
            </div>
        </div>

        <form action="#">
            <div class="newsletter-content">
                <input type="email" class="newsletter-box" placeholder="Enter your email address" />
                <button class="newsletter-btn">
                    Subscribe
                </button>
            </div>
        </form>
    </div>

    <div class="custom-shape-divider-top-1685310700">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 115" preserveAspectRatio="none">
            <path
                d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                class="shape-fill"></path>
        </svg>
    </div>
</section>
</div>

<?php
get_footer();
?>