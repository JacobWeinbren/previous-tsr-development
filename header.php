<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Social Review is an inclusive platform which creates a space for grassroots left of centre voices.">
	<link rel="shortcut icon" type="image/jpg" href="<?php echo wp_get_attachment_image_src(28, 'icon')[0] ?>"/>

	<?php wp_head();?>
</head>

<body>

	<div id="navigation">
		<div class="mob-header">
			<a tabindex="0" aria-label="The Social Review Homepage" href="#">
				<img alt="The Social Review Logo" src="<?php echo wp_get_attachment_image_src(26, 'medium')[0] ?>"/>
			</a>
		</div>

		<nav class="navbar">
			<a tabindex="0" aria-label="The Social Review Homepage" title="The Social Review Homepage" href="#" class="nav-item deslogo">
				<img alt="The Social Review Logo" src="<?php echo wp_get_attachment_image_src(26, 'medium')[0] ?>"/>
			</a>
			<a aria-label="Posts tagged under realities" tabindex="0" class="nav-item" href="realities"><b>Realities</b></a>
			<a aria-label="Posts tagged under posibilities" tabindex="0" class="nav-item" href="posibilities"><b>Posibilities</b></a>
			<a aria-label="Podcast information" tabindex="0" class="nav-item" href="podcast"><b>Podcast</b></a>
			<a aria-label="Newsletter information" tabindex="0" class="nav-item" href="newsletter"><b>Newsletter</b></a>
			<a class="nav-item nav-icon" tabindex="0" href="facebook">
				<i class="fab fa-facebook"></i>
				<span class="sr-only">The Social Review Facebook</span>
			</a>
			<a class="nav-item nav-icon"tabindex="0" href="twitter">
				<i class="fab fa-twitter"></i>
				<span class="sr-only">The Social Review Twitter</span>
			</a>
			<a class="nav-item nav-icon" tabindex="0" href="spotify">
				<i class="fab fa-spotify"></i>
				<span class="sr-only">The Social Review Spotify</span>
			</a>
			<a class="nav-item nav-icon" tabindex="0" onclick="toggleSearch();"><i class="fas fa-search"></i>
				<span class="sr-only">Search</span>
			</a>
		</nav>

		<div id="search-bar">
			<label for="nav-search">Search</label>
			<input type="text" name="search" id="nav-search"  placeholder="Articles...">
		</div>
	</div>
	
	<div id="content">