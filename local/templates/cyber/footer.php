<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>

<footer class="footer">
	<section class="section">
		<div class="footer__container">
			<div class="footer__block">
				<div class="footer__logo">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/Logo.png" alt="">
				</div>
				<div class="footer__subtitle">We are a residential interior design firm located in Portland. Our
					boutique-studio offers more than</div>
				<div class="footer__socials">
					<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/footer-logo/Facebook.svg" alt=""></a>
					<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/footer-logo/Instagram.svg" alt=""></a>
					<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/footer-logo/Tiktok.svg" alt=""></a>
					<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/footer-logo/Twitter.svg" alt=""></a>
				</div>
			</div>

			<div class="footer__block">
				<div class="footer__heading">Services</div>
				<ul class="footer__menu">
					<li><a href="#">Bonus program</a></li>
					<li><a href="#">Gift cards</a></li>
					<li><a href="#">Credit and payment</a></li>
					<li><a href="#">Service contracts</a></li>
					<li><a href="#">Non-cash account</a></li>
					<li><a href="#">Payment</a></li>
				</ul>
			</div>
			<div class="footer__block">
				<div class="footer__heading">Assistance to the buyer</div>
				<ul class="footer__menu">
					<li><a href="#">Find an order</a></li>
					<li><a href="#">Terms of delivery</a></li>
					<li><a href="#">Exchange and return of goods</a></li>
					<li><a href="#">Guarantee</a></li>
					<li><a href="#">Frequently asked questions</a></li>
					<li><a href="#">Terms of use of the site</a></li>
				</ul>
			</div>
		</div>
	</section>
</footer>

</div>
</body>

<script>
	// Header animation menu
	document.querySelector('.header').classList.add('visible');
</script>

<?php
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/page-specific.js');
?>

</html>