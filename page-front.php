<?php 
/**
 * Template name: Strona główna
 */

$g_phone = get_field( 'gymbox_phone_no' );
$g_formated_phone = str_replace( ' ', '', $g_phone);


get_header( ); ?>

<header class="header">
    <section class="contact-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8 py-2 text-right bg-red">
                    <a href="mailto:<?php the_field( 'gymbox_email_address' ); ?>" class="d-none d-lg-inline-block address-link email">
                        <?php the_field( 'gymbox_email_address' ); ?>
                    </a>
                    <a href="tel:<?php echo $g_formated_phone; ?>" class="address-link phone ml-lg-5">
                        <?php echo $g_phone; ?>
                    </a>
                </div>
                <div class="d-none d-lg-flex col-lg-4 py-2 bg-black">
					<a href="https://www.facebook.com/gymboxcross" class="social-icons fb"><?php echo file_get_contents( esc_url( URI . '/assets/img/gymbox_f_logo.svg' ) ); ?></a>
					<a href="https://www.instagram.com/gymbox_opole/" class="social-icons instagram ml-3"><?php echo file_get_contents( esc_url( URI . '/assets/img/instagram-logo.svg' ) ); ?></a>
                </div>
            </div>
        </div>
	</section>
	<div class="container py-3 py-lg-4 nav-container">
		<div class="row">
			<div class="d-none d-lg-block col-lg-2">
				<a href="#start">
					<img src="<?php echo esc_url( URI . '/assets/img/gymbox_logo.png' ); ?>" alt="Gymbox Opole logo" title="Gymbox Opole logo" class="img-fluid">
				</a>
			</div>
			<div class="d-none d-lg-flex col-lg-10 justify-content-end">
				<?php 
				 wp_nav_menu( array(
					'menu' => 'main_menu',
					'menu_class' => 'navbar-nav',
					'container' => 'nav',
					'container_class' => 'navbar',
					'container_id' => 'gymboxNavbar'
				 ) );
				
				?>
			</div>
		</div>
	</div>
</header>
<section id="start" class="section-start">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-12 position-relative">
				<div class="sheduler-container px-3 py-4">
					<div class="row">
						<div class="col-12">
							<h4 class="sheduler-title fc-black fw-500 fs-30 text-uppercase text-center">
								Aktualnie trenujemy
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="scheduler-row now fs-24 fc-white px-4 py-3 text-uppercase text-center"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mt-4">
							<h4 class="sheduler-title fc-black fw-500 fs-30 text-uppercase text-center">
								Następnie
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="scheduler-row next fs-24 fc-white px-4 py-3 text-uppercase text-center"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mt-3 sheduler-title fc-black fw-500 fs-26 text-center">
							Aktualny trening znajdziesz na grupie: 
								<a href="https://www.facebook.com/groups/1117809865019746" class="fs-22 link-black-red">
									facebook.com/Gymbox Cross Box Opole Community.
								</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> <!-- /start -->
<section class="advertising">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 d-flex flex-column align-items-center">
				<h3 class="section-title fs-32 text-center slideout">
					Zwiększ swoją<br/> <span class="fs-42 fc-red text-uppercase">siłę</span>
				</h3>
				<div class="advertising-img strength"></div>
			</div>
			<div class="col-12 col-lg-4 my-5 my-lg-0 d-flex flex-column align-items-center">
				<h3 class="section-title fs-32 text-center slideout">
					Popraw sowją <span class="fs-42 fc-red text-uppercase">sprawność</span>
				</h3>
				<div class="advertising-img efficency"></div>
			</div>
			<div class="col-12 col-lg-4 d-flex flex-column align-items-center">
				<h3 class="section-title fs-32 text-center slideout">
					Pracuj nad <span class="fs-42 fc-red text-uppercase">kondycją</span>
				</h3>
				<div class="advertising-img condition"></div>
			</div>
		</div>
	</div>
</section> <!-- /advertising -->
<section id="grafik" class="section_schedule fc-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="section-title fs-36 text-center text-uppercase slidein">
					grafik
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<h3 class="section-title fs-22 slideout">Klub jest czynny 7 dni w tygodniu od: <?php the_field( 'open_hours_from' ); ?> do: <?php the_field( 'open_hours_to' ); ?>.</h3>
				<h3 class="section-title fs-22 slideout">Zapraszamy wszystkich chętnych na zajęcia!</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12 d-none d-lg-block">
				<?php get_template_part( 'template-parts/table', 'scheduler' ); ?>
			</div>
			<div class="col-12 d-lg-none mt-5">
				<?php get_template_part( 'template-parts/accordion', 'scheduler' ); ?>
			</div>
		</div>
	</div>
</section> <!-- /scheduler -->
<section id="cennik" class="price-list">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="section-title fs-36 text-center text-uppercase slidein">
					cennik
				</h2>
			</div>
		</div>
		<div class="row justify-content-lg-center">
			<div class="col-12 col-lg-6">
				<?php get_template_part( 'template-parts/table', 'pricelist' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-4">
				<h3 class="section-title fs-22 text-center slidein">
					Akceptujemy karty sportowe
				</h3>
			</div>
		</div>
		<div class="row my-2">
			<div class="col-12 col-lg-4 text-center">
				<img src="<?php echo esc_url( URI . '/assets/img/karta_multi.jpeg' ); ?>" alt="Karty sportowe Multi Sport" title="Karty sportowe Multi Sport" class="img-fluid">
			</div>
			<div class="col-12 col-lg-4 text-center my-5 my-lg-0">
				<img src="<?php echo esc_url( URI . '/assets/img/ok_system.png' ); ?>" alt="Karty sportowe OK System" title="Karty sportowe OK System" class="img-fluid">
			</div>
			<div class="col-12 col-lg-4 text-center">
				<img src="<?php echo esc_url( URI . '/assets/img/karta_multi_a.jpeg' ); ?>" alt="Karty sportowe Multi Sport Active" title="Karty sportowe Multi Sport Active" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-4">
				<h3 class="section-title fs-22 text-center slidein">
					Akceptujemy karty płatnicze
				</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-10 col-lg-4 my-2">
				<img src="<?php echo esc_url( URI . '/assets/img/cards.jpg' ); ?>" alt="Karty płatnicze" title="Karty płatnicze" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-4">
				<h3 class="section-title fs-22 text-center slidein">
					Wspierają nas
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12 my-2 text-center">
				<img src="<?php echo esc_url( URI . '/assets/img/sfd-blue.png' ); ?>" alt="SFD Logo" title="SFD Logo" class="img-fluid">
			</div>
		</div>
	</div> <!-- container -->
</section> <!-- /pricelist -->
<section id="kontakt" class="contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 col-lg-3 mb-4">
				<img src="<?php echo URI . '/assets/img/gymbox_logo.png'; ?>" alt="Gymbox logo" title="Gymbox logo" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-12 fc-white text-center fs-24-32 fw-700">
				ul. <?php the_field( 'gymbox_address_str' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 fc-white text-center fs-24-32 fw-700">
				<span><?php the_field( 'gymbox_address_zip_code' ); ?></span> <span><?php the_field( 'gymbox_address_city' ); ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a href="<?php echo $g_formated_phone; ?>" class="address-link contact phone fs-24-32"><?php the_field( 'gymbox_phone_no' ); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a href="mailto:<?php the_field( 'gymbox_email_address' ); ?>" class="address-link contact email fs-24-32"><?php the_field( 'gymbox_email_address' ); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div id="gmap-container" class="mt-5"></div>
			</div>
		</div>
	</div> <!-- /container -->
</section> <!-- /constact -->
<?php get_footer( ); ?>