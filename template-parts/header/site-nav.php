<?php require get_template_directory() . "/link-configs.php" ?>

<span id="mobileMenu" class="material-icons-round text-[#4D4D4D] hover:text-black md:hidden" role="button">menu</span>

<div id="site-navigation-container" class="hidden md:block absolute max-h-[calc(100vh-90px)] md:static top-[90px] bottom-0 left-0 right-0 border-t md:border-t-0 border-gray-300 overflow-auto md:overflow-visible">
	<div class="bg-white">
		<nav
			id="site-navigation"
			class="
				hidden mx-auto flex-col p-4 space-y-7 text-base text-black
				md:flex md:flex-row md:items-center md:mx-0 md:p-0 md:space-y-0 md:space-x-5 lg:space-x-7"
			role="navigation"
			aria-label="navigation"
		>
			<a href="<?php esc_attr_e($LINKS["about-us"]); ?>" class="hover:text-[#017381]">About Us</a>

			<a href="<?php esc_attr_e($LINKS["whitney-johnson"]); ?>" class="hover:text-[#017381]">Whitney Johnson</a>

			<span id="servicesNav" class="flex items-center hover:text-[#017381] cursor-pointer peer">
				<span class="flex-grow">Services</span>
				<!-- Two icons so we can modify the arrow on mobile via JS, but leave it alone on desktop -->
				<span class="material-icons-round mobileIcon md:hidden">keyboard_arrow_down</span>
				<span class="material-icons-round hidden md:inline">keyboard_arrow_down</span>
			</span>
			<?php get_template_part( 'template-parts/header/nav-services-dropdown' ); ?>

			<a href="<?php esc_attr_e($LINKS["podcast"]); ?>" class="hover:text-[#017381]">Podcast</a>

			<span id="resourcesNav" class="relative hover:text-[#017381] cursor-pointer group focus:outline-none">
				<span class="flex items-center">
					<span class="flex-grow">Resources</span>
					<!-- Two icons so we can modify the arrow on mobile via JS, but leave it alone on desktop -->
					<span class="material-icons-round mobileIcon md:hidden">keyboard_arrow_down</span>
					<span class="material-icons-round hidden md:inline">keyboard_arrow_down</span>
				</span>
				<?php get_template_part( 'template-parts/header/nav-resources-dropdown' ); ?>
			</span>

			<?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Request a Demo", "js-hook" => "fireContactModal", "contact-reason" => "S Curve Insight Platform", "addt-styles" => "block md:hidden lg:block")); ?>
		</nav>
	</div>
</div>
