<?php require('../inc/_site-header.php'); ?>
<?php require('../inc/_page-header-inner.php'); ?>

<link type="text/css" rel="stylesheet" href="css/styles.css" />

<section class="page-title peace">
	<h2>Peace</h2>
	<h4>An Earth-centric Facebook profile photo generator</h4>
</section>

<section class="peace">
	<h3>What is this?</h3>

	<div class="explain">
		<p>
			There are a lot of horrifying things going on in the world right now.  I love the support 
			so many people are showing for the folks in France through Facebook profile pictures.  However, 
			there are so many other people in other countries all over the world who are going through 
			horrifying events as well, but not getting as much press. I am not going to get on a political 
			soapbox here, but if you have no idea what I am talking about, 
			<a href="http://www.cnn.com/world" target="_blank">read</a>
			<a href="http://www.bbc.com/news" target="_blank">more</a>
			<a href="http://www.aljazeera.com/topics/regions/middleeast.html" target="_blank">news</a>.
		</p>

		<p>
			I believe the we should be showing support for people in all countries all over the world and
			the best way to visually represent that is with the Earth.
		</p>

		<p>
			So, I created a generator to add an image of the Earth over your existing Facebook profile picture.
			Feel free to use this tool if you so choose.  This tool will download your new profile photo to
			your computer.  You will need to actually update your Facebook photo yourself (for now - this
			is a quick and dirty beta version and is still under development).
		</p>
	</div>

	<p class="example">
		<img src="img/example-earth.jpg" />
	</p>
</section>

<section class="start peace">
	<div>
		<h3>OK, let's get started!</h3>

		<p>
			<a href="#" class="button" id="startBtn">
				<i class="fa fa-map"></i> Generate my profile photo!
			</a>
		</p>

		<p>
			<strong>Note:</strong> 
			This tool will ask you for permission to connect to your Facebook account and access your 
			profile photo.  This tool will not post anything to your Facebook account, nor will it access
			any other information.
		</p>
	</div>
</section>

<section class="results">
	<div>
		<h3>My generated profile photo</h3>

		<canvas id="myCanvas"></canvas>

		<div class="assets">
			<img id="overlay" src="img/earth.png" />
		</div>

		<p>
			<a href="#" class="button" id="downloadBtn" target="_blank">
				<i class="fa fa-download"></i> Download my photo!
			</a>
		</p>
	</div>
</section>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/fbInit.js"></script>
<script src="js/scripts.js"></script>

<?php require('../../inc/_page-footer.php'); ?>
<?php require('../../inc/_site-footer.php'); ?>