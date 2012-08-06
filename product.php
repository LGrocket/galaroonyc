<?php
	include_once "includes/header.php";
?>
<body class="product">
<?php
	include_once "includes/nav.php";
?>
<header>
</header>
<div class="main clearfix">
	<div class="galleriffic">
		<div class="gallery">
			<div id="loading"></div>
		</div>
		<div id="thumbs">
			<ul class="thumbs noscript">
			  <li>
					<a class="thumb" href="img/gallery/full/Chair02.png" title="Chair02">
						 <img src="img/gallery/thumbs/Chair02_thumb.png" alt="Chair02" />
					</a>
			  </li>
			<li>
				<a class="thumb" href="img/gallery/full/Chair03.png" title="Chair03">
					<img src="img/gallery/thumbs/Chair03_thumb.png" alt="Chair03" />
				</a>
			</li>
			<li>
				<a class="thumb" href="img/gallery/full/Chair04.png" title="Chair04">
					<img src="img/gallery/thumbs/Chair04_thumb.png" alt="Chair04" />
				</a>
			</li>
			<li>
				<a class="thumb" href="img/gallery/full/Chair05.png" title="Chair05">
					<img src="img/gallery/thumbs/Chair05_thumb.png" alt="Chair05" />
				</a>
			</li>
			<li>
				<a class="thumb" href="img/gallery/full/Chair08.png" title="Chair08">
					<img src="img/gallery/thumbs/Chair08_thumb.png" alt="Chair08" />
				</a>
			</li>
			<li>
				<a class="thumb" href="img/gallery/full/Chair09.png" title="Chair09">
					<img src="img/gallery/thumbs/Chair09_thumb.png" alt="Chair09" />
				</a>
			</li>
			<li>
				<a class="thumb" href="img/gallery/full/Chair10.png" title="Chair10">
					<img src="img/gallery/thumbs/Chair10_thumb.png" alt="Chair10" />
				</a>
			</li>
			<li>
				<a class="thumb" href="img/gallery/full/Chair11.png" title="Chair11">
					<img src="img/gallery/thumbs/Chair11_thumb.png" alt="Chair11" />
				</a>
			</li>
			</ul>
		</div>
		<div id="slideshow"></div>
	</div>
<div class="list">
	<h3>Designed expressly for use with Chiavari chairs<sup>*</sup>:</h3>
	<ul>
	  <li>Cushion dimensions; 15 &frac34;" x 16" x 2"</li>
	  <li>Pocket dimension: 16" x 8" deep</li>
	  <li>Inverted box pleat and piping details</li>
	  <li>High quality, upholstery-grade bengaline silk fabric</li>
	  <li>High-density, high purity foam</li>
	  <li>Heavy duty polyester thread ensures ties won't rip off</li>
	  <li>Zipper and Velcro-free design; nothing to break or stick</li>
	  <li>Colors and fabrics can be customized</li>
	  <li>Made in USA</li>
	</ul>
	<aside>
		<p><sup>*</sup>GalaRoo NYC is currently developing pocketed seat cushion slipcovers for other popular special event chair models. Stay tuned or contact us for details.</p>
	</aside>
</div>
</div>
<footer>
<?php
	include_once "includes/footer.php";
?>
<script src="js/libs/jquery.galleriffic.js"></script>
<script src="js/libs/jquery.opacityrollover.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		// Initially set opacity on thumbs and add
		// additional styling for hover effect on thumbs
		var onMouseOutOpacity = 0.67;
		$('#thumbs ul.thumbs li').opacityrollover({
			mouseOutOpacity:   onMouseOutOpacity,
				mouseOverOpacity:  1.0,
				fadeSpeed:         'fast',
				exemptionSelector: '.selected'
		});

		// Initialize Advanced Galleriffic Gallery
		var gallery = $('#thumbs').galleriffic({
			delay:                     2500,
				numThumbs:                 15,
				preloadAhead:              10,
				maxPagesToShow:            7,
				imageContainerSel:         '#slideshow',
				controlsContainerSel:      '#controls',
				captionContainerSel:       '#caption',
				loadingContainerSel:       '#loading',
		});
	});
</script>
</footer>
</body>
</html>
