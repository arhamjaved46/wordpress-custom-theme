<!-- 
    Template Name: Contact Us
-->

<?php
get_header();
?>

<div class="contact">
    <div class='container-single contact-container'>
        <div class="contact-heading">
            <div class="contact-title">
                <?php the_title(); ?>
            </div>

            <div class="contact-title-border"></div>
        </div>
        <div class="contact-desc">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<div class="clear"></div>


<!---------- END OF CONTACT US FORM ----------->
<?php
get_footer();
?>