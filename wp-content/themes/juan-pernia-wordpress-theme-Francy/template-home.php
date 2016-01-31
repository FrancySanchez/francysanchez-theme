<?php
/*
Template Name: Home Template
*/
?>
<div class="hero_juan">
	
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-7 col-sm-10">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-justified hidden-xs" role="tablist">
					<li class="active">
						<a href="#summary" role="tab" data-toggle="tab">Summary</a>
					</li>
					<li >
						<a href="#skills" role="tab" data-toggle="tab">Key skills</a>
					</li>
					
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active hero_content" id="summary">
						
						<h1>Hi there! I'm Juan</h1>
						<p>I am an experienced front-end developer passionate about building user experiences that deliver results while meeting the project 	requirements.
						</p>
						<p>During the last 7 years I have worked and led teams in a wide range of online projects for the Swiss, Spanish, American and Latin american markets.
						</p>
						<p>From the very scratch I build functional user interfaces through planing, wire framing, prototyping, developing, testing and optimising.
						</p>
					</div>
					<div class="tab-pane  hero_content" id="skills">
						
						
						<p>Here are the skills that I consider my main strengths
						</p>
						<div class="progress margin_top_medium">
							<div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
								UI Design
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active progress-bar-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
								HTML / CSS / LESS
							</div>
						</div>
						<div class="progress ">
							<div class="progress-bar progress-bar-striped active progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
								jQuery
							</div>
						</div>
						<div class="progress ">
							<div class="progress-bar progress-bar-striped active progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
								Project Management
							</div>
						</div>
						<div class="progress ">
							<div class="progress-bar progress-bar-striped active progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
								Teamwork
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-1 col-sm-2  hidden-xs">
				<div class="contact-links">
					<a href="https://www.linkedin.com/in/juanrules" target="_blank" title="LinkedIn"><span class="icon-linkedin"> </span></a>
					
					<a href="http://twitter.com/juanrules" target="_blank" title="Twitter"><span class="icon-twitter"> </span></a>
					<a href="http://facebook.com/juanrules" target="_blank" title="Facebook"><span class="icon-facebook"> </span></a>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- PORTFOLIO ON -->
<div class="section_header visible-desktop visible-tablet">
	<div class="container">
		<div class="row">
			<div class="pull-left margin_right margin_left">
				<h3>Portfolio <small>- English & Spanish</small> </h3>
			</div>
			<div class="col-md-8">
				<p class="lead"> </p>
			</div>
		</div>
	</div>
</div>
<div class="container" >
	<div class="row">
		<?php
		// the query
		$the_query = new WP_Query( 'category_name=portafolio' ); ?>
		<?php if ( $the_query->have_posts() ) : ?>
		<!-- pagination here -->
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="col-md-4 item">
			<article <?php post_class(); ?>>
				<?php // Checking for a post thumbnail
				if ( has_post_thumbnail() ) ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="show_modal_post" >
					<?php the_post_thumbnail('large');?>
				</a>
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="text-muted meta">
						<i class="glyphicon glyphicon-calendar"></i> 
						<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>

					</div>
				</header>
				<footer>
					<?php //the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
				</footer>
			</article></div>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<!-- pagination here -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<!-- PORTFOLIO OFF -->
	<!-- BLOG ON-->
	<div class="section_header visible-desktop visible-tablet">
		<div class="container">
			<div class="row">
				<div class="pull-left margin_right margin_left">
					<h3>Blog - <small>Spanish</small></h3>
				</div>
				<div class="col-md-8">
					<p class="lead"> Escribo sobre música, redes sociales, diseño web y viajes .</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container" >
		<div class="row">
			<?php
			// the query
			$the_query = new WP_Query( 'category_name=blog' ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<!-- pagination here -->
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post() ; $count++; ?>
			<div class="col-md-4 item"><article <?php post_class(); ?>>
				<?php // Checking for a post thumbnail
				if ( has_post_thumbnail() ) ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="show_modal_post" >
					<?php the_post_thumbnail('large');?>
				</a>
				
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<div class="text-muted meta">
						<i class="glyphicon glyphicon-calendar"></i> 
						<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>

					</div>
				</header>
				
				<footer>
					<?php //the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
				</footer>
			</article></div>

<?php  if ( 0 == $count%3 ) {
        echo '</div><div class="row">';
    } ?>

			<?php endwhile; ?>
			<!-- end of the loop -->
			<!-- pagination here -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<!-- BLOG OFF-->
	<?php //while (have_posts()) : the_post(); ?>
	<?php //get_template_part('templates/page', 'header'); ?>
	<?php //get_template_part('templates/content', 'page'); ?>
	<?php //endwhile; ?>