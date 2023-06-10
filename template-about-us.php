<!-- 
    Template Name: About Us
-->
<?php
get_header();
?>

<div class="welcome-about">
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
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 115"
                preserveAspectRatio="none">
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