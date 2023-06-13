<?php $logoimg = get_header_image(); ?>
<!----------- FOOTER ----------->
<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-logo grid-item-1">
            <div class="footer-logo-title">
                Monday - Friday 9:30AM TO 5PM
            </div>
            <img src="<?php echo $logoimg; ?>" class="footer-logo-img" alt="logo" />
        </div>

        <div class="footer-item-1 grid-item-2">
            <div class="footer-title">
                OUR PROJECTS
            </div>
            <?php
            if (has_nav_menu('our-projects')) {
                wp_nav_menu(array('theme_location' => 'our-projects', 'menu_class' => 'nav-links'));
            }
            ?>


        </div>

        <div class="footer-item-1 grid-item-3">

            <div class="footer-title">
                ABOUT US
            </div>
            <?php
            if (has_nav_menu('about-us')) {
                wp_nav_menu(array('theme_location' => 'about-us', 'menu_class' => 'nav-links'));
            }
            ?>


        </div>

        <div class="footer-item-1 grid-item-4">

            <div class="footer-title">
                IMPORTANT LINKS
            </div>

            <?php
            if (has_nav_menu('important-links')) {
                wp_nav_menu(array('theme_location' => 'important-links', 'menu_class' => 'nav-links'));
            }
            ?>

        </div>
</footer>
<div class="footer-small">
    <div class="container footer-small-container">
        <div class="footer-small-heading">
            Fundraisers for Schools is a Trading Name of <a href="https://daltondesigns.co.uk" class=""> Dalton
                Designs UK Ltd </a> ©
            2023. All Rights Reserved. Company Number: 10962991
        </div>

        <div class="footer-small-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/footer-img.svg" class="footer-small-img"
                alt="footer-img" />
        </div>
    </div>
</div>
<!---------- END OF FOOTER ---------->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/custom.js"></script>
</body>

</html>