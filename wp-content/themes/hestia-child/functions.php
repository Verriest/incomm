<?php



// CODE pour crée par exemple Un champ CPT Recettes 
// je passe par le plugin ACF pour plus de comprehension et ne pas encombré le function.php

// function create_recettes_cpt() {
//     $labels = array(
//         'name' => _x('Recettes', 'Post Type General Name', 'textdomain'),
//         'singular_name' => _x('Recette', 'Post Type Singular Name', 'textdomain'),
//         'menu_name' => __('Recettes', 'textdomain'),
//         'all_items' => __('Toutes les Recettes', 'textdomain'),
//         'add_new_item' => __('Ajouter une nouvelle Recette', 'textdomain'),
//         'edit_item' => __('Modifier la Recette', 'textdomain'),
//         'new_item' => __('Nouvelle Recette', 'textdomain'),
//         'view_item' => __('Voir la Recette', 'textdomain'),
//         'search_items' => __('Rechercher une Recette', 'textdomain'),
//         'not_found' => __('Aucune Recette trouvée', 'textdomain'),
//         'not_found_in_trash' => __('Aucune Recette trouvée dans la corbeille', 'textdomain'),
//     );

//     $args = array(
//         'label' => __('Recettes', 'textdomain'),
//         'labels' => $labels,
//         'supports' => array('title', 'editor', 'thumbnail'),
//         'hierarchical' => false,
//         'public' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'menu_position' => 5,
//         'show_in_admin_bar' => true,
//         'show_in_nav_menus' => true,
//         'can_export' => true,
//         'has_archive' => true,
//         'exclude_from_search' => false,
//         'publicly_queryable' => true,
//         'capability_type' => 'post',
//         'rewrite' => array('slug' => 'recettes'),
//     );

//     register_post_type('recettes', $args);
// }
// add_action('init', 'create_recettes_cpt');


// Fonction pour générer la liste des recettes
function afficher_liste_recettes() {
    $args = array(
        'post_type' => 'recette', 
        'posts_per_page' => -1 
    );

    $query = new WP_Query($args);

    $output = '<div class="liste-recettes">';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $titre = get_the_title();
            $lien = get_permalink();
			$autor = get_the_author();
			if (has_post_thumbnail()) {
                $image = get_the_post_thumbnail(null, 'medium');
            } else {
                $image = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Placeholder_view_vector.svg/681px-Placeholder_view_vector.svg.png?20220519031949">'; 
            }
            $description = get_the_excerpt();

            // Ajouter la recette à la liste

		$output .= <<<HTML

		<div class="card">
			<div class="bar"></div>
			<div class="card_form">$image</div>
			<div class="card_data">
				<div class="data">
				<div class="text">
					<label class="text_m">$titre</label>
					<div class="cube text_s">
					<label class="side front">Recette de cuisine -------</label>
					<label class="side top">$autor</label>
					</div>
					<label class="text_d">
					$description
					</label>
				</div>
				</div>
				<span title="Acceder a la lista (Temas)"><a href="$lien">Voir la recette</a></span>
			</div>
		</div>

HTML;


        }
    } else {
        $output .= '<p>Aucune recette trouvée.</p>';
    }

    wp_reset_postdata();

    $output .= '</div>';
    return $output;
}

function enregistrer_shortcode_recettes() {
    add_shortcode('liste_recettes', 'afficher_liste_recettes');
}
add_action('init', 'enregistrer_shortcode_recettes');

