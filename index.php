<?php
get_header();

$cat = get_categories(
    array('taxonomy' => 'category')
);

?>

<div class='blog'>
    <div class="container container-blog">
        <div class='blog-heading-detail'>
            <div>
                <div class="blog-title">The School Fundraising Blog</div>
                <div class="blog-title-border"></div>
            </div>
            <div class='blog-heading-desc'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
        </div>

        <div class='blog-categories'>
            <?php
            foreach ($cat as $catvalue) {
                ?>
                <div class="blog-cat-1"><a href='<?php echo get_category_link($catvalue->term_id); ?>'><?php echo $catvalue->name; ?></div></a>
            <?php } ?>
        </div>

        <div class='blog-items'>

            <?php
            while (have_posts()) {
                the_post();

                $imagepath = wp_get_attachment_image_src(
                    get_post_thumbnail_id(),
                    'large'
                );
                ?>
                <div class="single-blog-post">
                    <div class="single-blog-post-img">
                        <img src="<?php echo $imagepath[0]; ?>"
                            class="single-blog-post-thumbnail" alt="blog-thumbnail" />
                        <div class="single-blog-post-cat">
                            <?php echo the_category(); ?>
                        </div>
                    </div>

                    <div class="single-blog-post-content">
                        <div class="single-blog-post-date"><?php echo get_the_date(); ?></div>

                        <div class="single-blog-post-title">
                            <?php the_title(); ?>
                        </div>

                        <div class="single-blog-post-desc">
                            <?php echo get_the_content(); ?>
                        </div>

                        <div class="single-blog-post-readmore">
                            <a href="<?php the_permalink(); ?>">Read more >></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
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