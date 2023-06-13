<?php
get_header();
$imagepath = wp_get_attachment_image_src(
    get_post_thumbnail_id(),
    'large'
);
?>

<!--------- BANNER IMAGE ----------->

<div class="blog-single-post-wrap">
    <div class="blog-single-post-container">
        <div class="single-post-title">
            <?php echo the_title(); ?>
        </div>
        <div class="single-post-image">
            <img src="<?php echo $imagepath[0] ?>" alt="Image-thumbnail" />
        </div>
        <div class="single-post-content">
            <div class="single-post-desc">
                <?php echo get_the_content(); ?>
                <div class="blog-sidebar-border"></div>
            </div>
            <div class="single-post-sidebar">
                <div class="blog-sidebar-title">Popular Posts</div>
                <div class="blog-sidebar-border"></div>
                <ul class="recent-posts">
                    <?php
                    dynamic_sidebar('sidebar');
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--------- END OF BANNER IMAGE ---------->

<div class="newsletter">
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
                <div class="newsletter-heading">Subscribe to our newsletter</div>
                <div class="newsletter-desc">
                    Be the first to get our latest products or blogs information
                </div>
            </div>

            <form action="#">
                <div class="newsletter-content">
                    <input type="email" class="newsletter-box" placeholder="Enter your email address" />
                    <button class="newsletter-btn">Subscribe</button>
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