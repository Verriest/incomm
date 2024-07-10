<?php
if (get_post_type() != 'recette') {
    // Si ce n'est pas un post de type "recette"
    get_template_part('single', get_post_type());
    return;
}

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="recipewrapper">

<h1><?php the_title(); ?></h1>
<figure>
        <?php if (has_post_thumbnail()) : ?>
            <div class="recipe-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
</figure>

<!--<div class="description">
	
     <p> ++ Recette rapide et delicieuse !</p>
	<p> +++ Pas cher ! </p>
    <p> --- ce n'est qu'un test. </p>
	<figure>
		<img src="https://assets.codepen.io/652/tamanna-rumee-nswz6tIpgZk-unsplash.jpg" alt="img test">
	</figure>
        
</div>-->

<div class="recipe_details">
	<ul>
		<li>Temps de cuisson: <?php the_field('temps_de_cuisson'); ?> minutes</li>
	</ul>
</div>
<h2>Les Ingredients</h2>
<ul class="ingredients">
    <?php the_field('liste_des_ingredients'); ?>
</ul>

 <!-- <p class="variation">blablabla</p> -->

<h2>Les Etapes de Preparations</h2>
<ol class="instructions">
    <?php the_field('etapes'); ?>
</ol>

</section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
