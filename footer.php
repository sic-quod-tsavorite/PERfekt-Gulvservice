<footer id="footer">
        <div id="footer-left">
            <?php
				// Site title or logo.
				twentytwenty_site_logo();
			?>
        </div>

        <div id="footer-center">
        </div>

        <div id="footer-right">
            <p><b>Kontakt info</b></p>
            <a href="mailto:per@perfektgulvservice.dk" title="e-mail"><i class="fa fa-envelope" aria-hidden="true" style="margin: 0 4px 0 0;" ></i>per@perfektgulvservice.dk</a>
            <br>
            <a href="tel:+4528113930" title="telefon"><i class="fa fa-phone-square" aria-hidden="true" style="margin: 0 4px 0 0;"></i>+45 28 11 39 30</a>
            <br>
            <a href="https://www.facebook.com/PERfektGulvservice/" title="Facebook side" target="_blank">
            <i class="fa fa-facebook-square" aria-hidden="true" style="margin: 0 4px 0 0;"></i>Find mig på Facebook 
            </a>
        </div>

        <?php wp_nav_menu(array("theme_location" => "footer-menu"))   ?>
</footer>
<?php wp_footer() ?>

</body>

</html>