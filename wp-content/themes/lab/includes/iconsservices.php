<?php


//Metabox pour Icones post type -> Services



$prefix = 'mmc_';
$post_types = array('post', 'page');
//set up the box and teh fields inside
$meta_box = array(
	'id' => 'icon-meta-box',
	'title' => 'Selectionnez une icone', //title of box
	
	'context' => 'side', //normal, advanced or side
	'priority' => 'default',
	'fields' => array(  //and now for the custom fields in the box
		
		array(
			'name' => 'Icone',
			'id' => $prefix . 'icon',
			'type' => 'select',
			'options' => array( 
								'flaticon-001-picture' => 'image', 
								'flaticon-002-caliper' => 'etrier', 
								'flaticon-003-energy-drink' => 'boisson energissante', 
								'flaticon-004-build' => 'construction', 
								'flaticon-005-thinking-1' => 'pensée', 
								'flaticon-006-prism' => 'prisme', 
								'flaticon-007-paint' => 'paint', 
								'flaticon-008-team' => 'team', 
								'flaticon-009-idea-3' => 'idée', 
								'flaticon-010-diamond' => 'diamant', 
								'flaticon-011-compass' => 'compas', 
								'flaticon-012-cube' => 'cube', 
								'flaticon-013-puzzle' => 'puzzle', 
								'flaticon-014-magic-wand' => 'vibromasseur', 
								'flaticon-015-book' => 'livre', 
								'flaticon-016-vision' => 'vision', 
								'flaticon-017-notebook' => 'bloc note', 
								'flaticon-018-laptop-1' => 'pc portable', 
								'flaticon-019-coffee-cup' => 'tasse de café', 
								'flaticon-020-creativity' => 'creativité', 
								'flaticon-021-thinking' => 'pensées', 
								'flaticon-022-branding' => 'logo', 
								'flaticon-023-flask' => 'flacon', 
								'flaticon-024-idea-2' => 'idées', 
								'flaticon-025-imagination' => 'imagination', 
								'flaticon-026-search' => 'recherche', 
								'flaticon-027-monitor' => 'moniteur', 
								'flaticon-028-idea-1' => 'ideal', 
								'flaticon-029-sketchbook' => 'livre de dessin', 
								'flaticon-030-computer' => 'ordinateur', 
								'flaticon-031-scheme' => 'scheme', 
								'flaticon-032-explorer' => 'explorateur', 
								'flaticon-033-museum' => 'musée', 
								'flaticon-034-cactus' => 'cactus', 
								'flaticon-035-smartphone' => 'smartphone', 
								'flaticon-036-brainstorming' => 'lavage de cerveau', 
								'flaticon-037-idea' => 'idea', 
								'flaticon-038-graphic-tool-1' => 'materiel de dessin', 
								'flaticon-039-vector' => 'vecteur', 
								'flaticon-040-rgb' => 'rgb', 
								'flaticon-041-graphic-tool' => 'outil graphique', 
								'flaticon-042-typography' => 'typographie', 
								'flaticon-043-sketch' => 'sketch', 
								'flaticon-044-paint-bucket' => 'pot de peinture', 
								'flaticon-045-video-player' => 'lecteur video', 
								'flaticon-046-laptop' => 'portable', 
								'flaticon-047-artificial-intelligence' => 'Intelligence artificielle', 
								'flaticon-048-abstract' => 'abstrait', 
								'flaticon-049-projector' => 'projecteur', 
								'flaticon-050-satellite' => 'satellite', 
 )
		)
	)
);
add_action('admin_menu', 'mytheme_add_box');


// Add meta box
function mytheme_add_box() {
	global $meta_box;
	global $post_types;
	foreach($post_types as $type){
		//(id, title, callback, post type, context, priority, callback args)
		add_meta_box($meta_box['id'], $meta_box['title'], 'fontawesome_meta_box', 'services', $meta_box['context'], $meta_box['priority']);
	}
}
// Callback function to show fields in meta box
function fontawesome_meta_box() {
	global $meta_box, $post;
	
	// Use nonce for verification
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';
	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		echo '<tr>',
				'<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				'<td>';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
					'<br />', $field['desc'];
				break;
			case 'textarea':
				echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
					'<br />', $field['desc'];
				break;
			case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $value => $name) {
					echo '<option value="'.$value.'" ';
					echo $meta == $value ? ' selected="selected"' : '', '>', $name, '</option>';
				}
				echo '</select>';
				break;
			case 'radio':
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
				}
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo 	'</tr><tr><td>';
		echo '<i class="fa fa-2x '.$meta.'"></i>';
		echo	'</td><td><a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Flaticons</a></td></tr>';
	}
	
	echo '</table>';
}
add_action('save_post', 'mytheme_save_data');
// Save data from meta box
function mytheme_save_data($post_id) {
	global $meta_box;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
function fontawesome_style(){
	$style_url = plugins_url('css/flaticon.css', __FILE__);
	wp_enqueue_style( 'fontawesome', $style_url );
	?>
	
<?php	
}
add_action('wp_enqueue_scripts','fontawesome_style');
add_action('admin_enqueue_scripts','fontawesome_style');
//theme template tag
function fontawesome_icon(){
	global $prefix;
	global $post;
	$icon = get_post_meta($post->ID, $prefix.'icon', true); 
	if($icon != ''): ?>
		<i class="fa <?php echo $icon; ?> mmc-fontawesome-meta-icon"></i>
	<?php endif;
}	