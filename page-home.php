<body class = "mainPage">
<div class="page">
<?php get_header(); ?>


			<div class="row">
				<div class="column">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/library/images/aboutMe.png" alt=" "></div>
					<h2>ABOUT ME</h2>
					<p>I am a web designer/developer at CALS IT</p>
				</div>

				<div class="column">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/library/images/projects.png" alt=" "></div>
					<h2>PROJECTS</h2>
					<p>Find out more about some of my personal projects</p>
				</div>
				<div class="column">
					<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/library/images/contact.png" alt=" "></div>
					<h2>CONTACT</h2>
					<p>Messege me!</p>
				</div>
			</div>
		<div class="imageFooter">
<img src="<?php echo get_template_directory_uri(); ?>/library/images/hmongSwirl.png" alt=" ">
		</div>
<?php get_footer(); ?>
</div>
<div class="sideMenu">
	  	<div class="sideMenuNav">
    <?php //Get wp_nav
     wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
 </div>
</div>
</body>