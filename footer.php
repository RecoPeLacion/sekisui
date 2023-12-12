<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
$logo = esc_attr( get_option( 'logo_url' ) );

?>

	</main>

	
	<footer class="Footer">
		<div class="FooterContainer">
			<div class="FooterRow">
				<div class="FooterCol">
					<div class="FooterLogo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
					</div>
				</div>
				<div class="FooterCol">
					<div class="FoooterListRow">
						<div class="FooterListCol">
							<ul>
								<li>
									<a href="#">会社概要</a>
								</li>
							</ul>
						</div>
						<div class="FooterListCol">
							<ul>
								<li>
									<a href="#">利用規約</a>
								</li>
								<li class="HideMobile">
									<a href="#">プライバシーポリシー</a>
								</li>
								<li class="HideMobile">
									<a href="#">個人情報保護方針</a>
								</li>
								<li>
									<a href="#">運営会社</a>
								</li>
							</ul>
							<ul class="FooterSocial">
								<li>
									<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <g clip-path="url(#clip0_396_9)">
    <path d="M15.7508 0.960938H18.8175L12.1175 8.61927L20 19.0384H13.8283L8.995 12.7184L3.46333 19.0384H0.395L7.56167 10.8468L0 0.961771H6.32833L10.6975 6.73844L15.7508 0.960938ZM14.675 17.2034H16.3742L5.405 2.7001H3.58167L14.675 17.2034Z" fill="#1079C2"/>
  </g>
  <defs>
    <clipPath id="clip0_396_9">
      <rect width="20" height="20" fill="white"/>
    </clipPath>
  </defs>
</svg>
									</a>
								</li>
								<li>
									<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M13.397 20.9972V12.8012H16.162L16.573 9.59217H13.397V7.54817C13.397 6.62217 13.655 5.98817 14.984 5.98817H16.668V3.12717C15.8486 3.03936 15.025 2.99696 14.201 3.00017C11.757 3.00017 10.079 4.49217 10.079 7.23117V9.58617H7.332V12.7952H10.085V20.9972H13.397Z" fill="#1079C2"/>
</svg>
									</a>
								</li>
								<li>
									<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
  <path d="M11.469 5C7.918 5 5 7.914 5 11.469V20.531C5 24.082 7.914 27 11.469 27H20.531C24.082 27 27 24.086 27 20.531V11.47C27 7.918 24.086 5 20.531 5H11.469ZM11.469 7H20.531C21.1181 6.99921 21.6996 7.11427 22.2421 7.33857C22.7847 7.56288 23.2777 7.89204 23.6928 8.30718C24.108 8.72232 24.4371 9.21529 24.6614 9.75785C24.8857 10.3004 25.0008 10.8819 25 11.469V20.531C25.0008 21.1181 24.8857 21.6996 24.6614 22.2421C24.4371 22.7847 24.108 23.2777 23.6928 23.6928C23.2777 24.108 22.7847 24.4371 22.2421 24.6614C21.6996 24.8857 21.1181 25.0008 20.531 25H11.47C10.8828 25.0009 10.3012 24.886 9.75855 24.6617C9.21587 24.4375 8.72278 24.1083 8.30753 23.6932C7.89228 23.278 7.56304 22.785 7.33867 22.2424C7.1143 21.6998 6.99921 21.1182 7 20.531V11.47C6.99908 10.8828 7.11404 10.3012 7.33829 9.75855C7.56254 9.21587 7.89167 8.72278 8.30682 8.30753C8.72198 7.89228 9.215 7.56304 9.75762 7.33867C10.3002 7.1143 10.8818 6.99921 11.469 7ZM21.906 9.188C21.7869 9.18747 21.6688 9.21054 21.5587 9.25589C21.4485 9.30123 21.3484 9.36795 21.2642 9.45218C21.1799 9.53642 21.1132 9.6365 21.0679 9.74666C21.0225 9.85682 20.9995 9.97487 21 10.094C21 10.598 21.402 11 21.906 11C22.0252 11.0007 22.1434 10.9777 22.2536 10.9324C22.3639 10.8871 22.4641 10.8204 22.5485 10.7362C22.6328 10.6519 22.6996 10.5518 22.745 10.4416C22.7904 10.3313 22.8135 10.2132 22.813 10.094C22.8135 9.97479 22.7904 9.85666 22.745 9.74643C22.6996 9.6362 22.6328 9.53607 22.5485 9.45182C22.4641 9.36758 22.3639 9.30088 22.2536 9.2556C22.1434 9.21031 22.0252 9.18734 21.906 9.188ZM16 10C12.7 10 10 12.7 10 16C10 19.3 12.7 22 16 22C19.3 22 22 19.3 22 16C22 12.7 19.3 10 16 10ZM16 12C18.223 12 20 13.777 20 16C20 18.223 18.223 20 16 20C13.777 20 12 18.223 12 16C12 13.777 13.777 12 16 12Z" fill="#1079C2"/>
</svg>
									</a>
								</li>
								<li>
									<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_396_15)">
    <path d="M12 4C12.855 4 13.732 4.022 14.582 4.058L15.586 4.106L16.547 4.163L17.447 4.224L18.269 4.288C19.161 4.35628 20.0004 4.73695 20.6395 5.36304C21.2786 5.98913 21.6764 6.82054 21.763 7.711L21.803 8.136L21.878 9.046C21.948 9.989 22 11.017 22 12C22 12.983 21.948 14.011 21.878 14.954L21.803 15.864C21.79 16.01 21.777 16.151 21.763 16.289C21.6764 17.1796 21.2784 18.0112 20.6391 18.6373C19.9999 19.2634 19.1602 19.6439 18.268 19.712L17.448 19.775L16.548 19.837L15.586 19.894L14.582 19.942C13.7218 19.9794 12.861 19.9987 12 20C11.139 19.9987 10.2782 19.9794 9.418 19.942L8.414 19.894L7.453 19.837L6.553 19.775L5.731 19.712C4.83895 19.6437 3.99955 19.2631 3.36047 18.637C2.72139 18.0109 2.32357 17.1795 2.237 16.289L2.197 15.864L2.122 14.954C2.04554 13.9711 2.00484 12.9858 2 12C2 11.017 2.052 9.989 2.122 9.046L2.197 8.136C2.21 7.99 2.223 7.849 2.237 7.711C2.32354 6.8207 2.72122 5.98942 3.36009 5.36334C3.99897 4.73727 4.83813 4.3565 5.73 4.288L6.551 4.224L7.451 4.163L8.413 4.106L9.417 4.058C10.2775 4.02063 11.1387 4.0013 12 4ZM12 6C11.175 6 10.326 6.022 9.5 6.056L8.522 6.103L7.583 6.158L6.701 6.218L5.893 6.281C5.46833 6.31113 5.06804 6.49065 4.76309 6.78773C4.45814 7.08481 4.26822 7.48026 4.227 7.904C4.11 9.113 4 10.618 4 12C4 13.382 4.11 14.887 4.227 16.096C4.312 16.968 5.004 17.646 5.893 17.719L6.701 17.781L7.583 17.841L8.522 17.897L9.5 17.944C10.326 17.978 11.175 18 12 18C12.825 18 13.674 17.978 14.5 17.944L15.478 17.897L16.417 17.842L17.299 17.782L18.107 17.719C18.5317 17.6889 18.932 17.5094 19.2369 17.2123C19.5419 16.9152 19.7318 16.5197 19.773 16.096C19.89 14.887 20 13.382 20 12C20 10.618 19.89 9.113 19.773 7.904C19.7318 7.48026 19.5419 7.08481 19.2369 6.78773C18.932 6.49065 18.5317 6.31113 18.107 6.281L17.299 6.219L16.417 6.159L15.478 6.103L14.5 6.056C13.6671 6.02017 12.8336 6.0015 12 6ZM10 9.575C9.99994 9.47726 10.0237 9.38099 10.0694 9.29455C10.115 9.20812 10.181 9.13413 10.2618 9.07903C10.3425 9.02394 10.4354 8.98939 10.5326 8.97841C10.6297 8.96742 10.728 8.98033 10.819 9.016L10.9 9.056L15.1 11.48C15.1836 11.5283 15.2544 11.596 15.3063 11.6774C15.3581 11.7589 15.3896 11.8517 15.3979 11.9478C15.4062 12.044 15.3912 12.1408 15.3542 12.23C15.3171 12.3192 15.2591 12.3981 15.185 12.46L15.1 12.52L10.9 14.945C10.8154 14.994 10.72 15.0216 10.6223 15.0253C10.5246 15.0291 10.4274 15.0089 10.3393 14.9665C10.2511 14.9241 10.1747 14.8608 10.1166 14.7821C10.0585 14.7034 10.0205 14.6117 10.006 14.515L10 14.425V9.575Z" fill="#1079C2"/>
  </g>
  <defs>
    <clipPath id="clip0_396_15">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
									</a>
								</li>
							</ul>
							<ul class="HideDesk">
								<li>
									<a href="#">プライバシーポリシー</a>
								</li>
								<li>
									<a href="#">個人情報保護方針</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<?php wp_footer(); ?>
	<?php 
		$custom_js = get_option( 'theme_js' );
		if(!empty($custom_js)) {
			?>
				<?php echo '<script>'. $custom_js. '</script> '; ?>
			<?php
		}
	?>
	</body>
</html>