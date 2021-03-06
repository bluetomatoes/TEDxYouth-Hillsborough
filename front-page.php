				<?php get_header(); ?>

	

				<section class="flexslider row">

					<ul class="slides">

						<li>

							<a href="/event-details" title="Watch the livestream on may 24th"><img src="/assets/homepage_livestream.jpg" alt="Watch the livestream on may 25th" width="200" height="200" /></a>

						</li>				

					</ul>

				</section>

				

				<section class="featuredSpeakers row">
					<div class="device">
					    <a class="arrow-left" href="#"></a> 
					    <a class="arrow-right" href="#"></a>
					    <div class="swiper-container">
					      <div class="swiper-wrapper">
					        <div class="swiper-slide"> <img src="img/slider1-1.png"> </div>
					        <div class="swiper-slide"> <img src="img/slider1-2.png"> </div>
					        <div class="swiper-slide">
					          <div class="content-slide">
					            <p class="title">Slide with HTML</p>
					          </div>
					        </div>
					      </div>
					    </div>
					    <div class="pagination"></div>
					  </div>
					  <script src="js/jquery-1.10.1.min.js"></script>
					  <script src="js/idangerous.swiper-2.1.min.js"></script>
					  <script>
					  var mySwiper = new Swiper('.swiper-container',{
					    pagination: '.pagination',
					    loop:true,
					    grabCursor: false,
					    paginationClickable: true
					  })
					  $('.arrow-left').on('click', function(e){
					    e.preventDefault()
					    mySwiper.swipePrev()
					  })
					  $('.arrow-right').on('click', function(e){
					    e.preventDefault()
					    mySwiper.swipeNext()
					  })
					  </script>
					<div class="row">
						<div class="four columns">
							<h2>Featured 2014 Speakers</h2>
						</div>
						<div class="eight columns">
							<p>Our 2014 team has been hard at work curating a list of speakers that we think will educate, inspire, and motivate. Take a peek at our 2014 speaker lineup to date. <a href="/speakers" class="readMore">View our speaker archive.</a></p>
						</div>

					</div>
					<div class="row">
				
					<aside class=" four columns speakerDetails">
						<div id="speakerImgWrapper">
							<img width="400" height="300" src="/assets/Desert-400x300.jpg" class="attachment-speaker_full wp-post-image" alt="Alt Text">						</div>
						
																													
					</aside>
					
					<div class="eight columns entry-content">
				<h2 class="entry-title">Marc Tarpenning</h2>
						<p>Marc Tarpenning Speaker Bio</p>
						
											
					</div> <!-- entry-content -->
					
				</div>

					<?php

						$args = array(			  		

			  				'post_type' => 'speakers',

			  				'taxonomy' => 'tedxyouthhillsboroughYear',

			  				'term' => '2014',

			  				'posts_per_page' => -1,

			  				'orderby' => 'title',

			  				'order' => 'ASC'

							);

						query_posts($args);

					?>



					<?php /* Start loop */ ?>

					<ul class="row clearfix">

					<?php while (have_posts()) : the_post(); ?>

						<li class="four columns">

							<a href="<?php the_permalink(); ?>" class="speakerLink">

								<?php the_post_thumbnail('wide_thumb', array(

									'alt' => ''.get_the_title().'',

									'title' => ''.get_the_title().'' 

								)); ?>

								<h3><?php the_title(); ?></h3>

							</a>

						</li>

					<?php endwhile; // End the loop ?>

					</ul>

					<?php wp_reset_query(); ?>

					

					<a href="/speakers" class="sectionCTA row">view all the <span class="tedx">TEDx</span><span class="yyc">YYC</span> speakers</a>

				

				</section>

									

				<section class="recentNews row">

				

					<h2>Recent News</h2>

					

					<?php

						$args = array(

			  				'posts_per_page' => 3,

			  				'year' => '2012'

							);

						query_posts($args);

					?>

					

					<div class="row">

						<?php while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" class="four columns">

							<header>

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<p>Posted on: <?php the_time('F jS, Y') ?></p>

							</header>

							<?php the_excerpt(); ?>

							<a href="<?php the_permalink(); ?>" class="readMore">Read More</a>

						</article>

						<?php endwhile; // End the loop ?>

						<?php wp_reset_query(); ?>

					</div>

					

					<a href="/news" class="sectionCTA row">read all the <span class="tedx">TEDx</span><span class="yyc">YYC</span> news</a>

					

				</section>

				

				<section class="videoPicks row">

					

					<div class="row">

				

						<div class="three columns">

							<h2>TED Video Picks</h2>

							<p>We are big supporters of sharing and collaboration, and want to know where you get your inspiration. <a href="mailto:info@tedxyyc.com?subject=TED Video Pick Suggestion&body=Here's my TED Video Pick suggestion and why…" class="readMore">Submit your favourite TED talk.</a></p>

						</div>

						

						<?php

						$args = array(

							'post_type' => 'videopick',

			  				'posts_per_page' => 3

							);

						query_posts($args);

						?>

						<?php while (have_posts()) : the_post(); ?>

						<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" class="videoPick three columns">

							<?php the_post_thumbnail('video_thumb', array(

									'alt' => ''.get_the_title().'',

									'title' => ''.get_the_title().'' 

								)); ?>

							<h3><?php the_title(); ?></h3>

						</a>

						<?php endwhile; // End the loop ?>

						<?php wp_reset_query(); ?>

					

					</div>

					

					<a href="/ted-video-picks/" class="sectionCTA row">view all the favourite <span class="tedx">TED</span> talks</a>

					

				</section>

				

				<section class="whatisTED row">

				

					<h2>What is TEDx?</h2>

					<p>In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDxYouth@Hillsborough, where x = independently organized TED event. At our TEDxYouth@Hillsborough event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized. <a href="/about" class="readMore">Learn more about TEDxYouth@Hillsborough.</a></p>

					

					<a href="http://www.ted.com/tedx" class="sectionCTA row">learn more about the <span class="tedx">TEDx</span> program</a>

					

				</section>



				<?php get_footer(); ?>