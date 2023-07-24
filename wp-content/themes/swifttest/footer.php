<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SwiftTest
 */

?>

<footer class="footer" id="contact">
        <div class="footer__inner">
            <div>
                <h2 class="footer__inner-title">
                    Контакти
                </h2>
                <h4>
                    Публічна оферта
                </h4>
            </div>

            <a class="email" href="mailto@nakrutka.top2023mail.com">nakrutka.top2023mail.com</a>
            <div class="tel">
                <a href="tel:+380672840014">+380672840014</a>
                <a href="tel:09003844505">09003844505</a>
            </div>
            <img class="footer__img" src="<?php echo get_template_directory_uri(); ?>./assets/image/footer-img.png" alt="">
        </div>
        <p>
            2023
        </p>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
