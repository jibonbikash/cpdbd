<?php

/*
============================================*******************************=====================================
												 page: functions.php 
												 author: Jibon Bikash Roy
												 email: jibon.bikash@gmail.com
												 date: 23/07/2012
												 pakage: wordpress
============================================*******************************=====================================
*/

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'author' );
/*
function cpd_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'cpd_excerpt_length' );
*/

	function cpd_widgets_init() {
		// Area 1, located at the top of the sidebar.
		register_sidebar( array(
			'name' => __( 'Primary Widget Area', 'cpd' ),
			'id' => 'primary-widget-area',
			'description' => __( 'The primary widget area', 'cpd' ),
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	
	
	}
	add_action( 'widgets_init', 'cpd_widgets_init' );

// remove generator for html meta
	function remove_generator() {
		return '';
	}

	add_filter('the_generator', 'remove_generator');
	
// footer development text
	function wp_admin_dashboard_custom_footer_text( $default_text ) {
	
	return '<span id="footer-thankyou">Website created and developed by <a href="http://drikict.net" target="_blank" title=" Web Design and developed by drikict">Drik ICT Ltd</a>';
	 }
	 add_filter( 'admin_footer_text', 'wp_admin_dashboard_custom_footer_text' );
	 
	 
	 
	function prodip_remove_dashboard_widgets() {
		 global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);   
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
		 wp_add_dashboard_widget('custom_help_widget', 'Help and Support', 'wp_admin_dashboard_help_widget');
		
	}
	
	add_action('wp_dashboard_setup', 'prodip_remove_dashboard_widgets' );



	function wp_admin_dashboard_add_news_feed_widget() {
	 global $wp_meta_boxes;
	
	 // Our new dashboard widget news feed from h20bikash.blogspot.com
	 wp_add_dashboard_widget( 'dashboard_gravfx_feed', 'News from h20bikash.blogspot.com', 'dashboard_gravfx_feed_output' );
	 }
	 add_action('wp_dashboard_setup', 'wp_admin_dashboard_add_news_feed_widget');
	
	 function dashboard_gravfx_feed_output() {
		 echo '<div>';
		 wp_widget_rss_output(array(
		 'url' => 'http://h20bikash.blogspot.com/atom.xml',
		 'title' => 'Latest news from drikict.net',
		 'items' => 2,
		 'show_summary' => 1,
		 'show_author' => 1,
		 'show_date' => 1
		 ));
		 echo "</div>";
	 }
	 
	   function wp_admin_dashboard_help_widget() {
		 echo '<p>If you need help, you can contact the developer Jibon Bikash Roy or <a href="http://drikict.net" target="_blank" title="Drik ICT Ltd">here</a>.</p>';
	 }
 
 	 if ( !current_user_can( 'edit_users' ) ) {
	 add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
	 add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
	 add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
	 }
	 
	 
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	
	
	function custom_search_form( $form ) {
    $form = '<form method="get" id="quick-search" action="'.get_bloginfo( 'home' ).'" >';
	$form .= '<div class="top_searchfld">';
    $form .= '<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" class="search_input"/>';
	$form .= '</div>';
    $form .= '<input type="submit" name="btn" value="" class="search_btn" />';
    $form .= '</form>';
    return $form;
}
add_filter( 'get_search_form', 'custom_search_form' );


add_action('init', 'register_trining', 1); // Set priority to avoid plugin conflicts
 
	function register_trining() { // A unique name for our function
        $labels = array( // Used in the WordPress admin
                'name' => _x('Training', 'post type general name'),
                'singular_name' => _x('Training', 'post type singular name'),
                'add_new' => _x('Add New', 'Training'),
                'add_new_item' => __('Add New Training'),
                'edit_item' => __('Edit Training'),
                'new_item' => __('New Training'),
                'view_item' => __('View Training '),
                'search_items' => __('Search Training'),
                'not_found' =>  __('Nothing found'),
                'not_found_in_trash' => __('Nothing found in Trash')
        );
		$file_dir=get_bloginfo('template_directory');
        $args = array(
                'labels' => $labels, // Set above
                'public' => true, // Make it publicly accessible
                'hierarchical' => false, // No parents and children here
				'show_ui' => true,
				'capability_type' => 'post',
				'rewrite' => TRUE,
                'menu_position' => 5, // Appear right below "Posts"
                'has_archive' => 'training', // Activate the archive
				'menu_icon' => $file_dir.'/images/web.png',
                'supports' => array('title','author','editor','thumbnail'),
        );
		
		register_taxonomy("catalog", array("training"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "training", "rewrite" => true));
        register_post_type( 'training', $args ); // Create the post type, use options above
       

       
}


// Custom training post meta 
add_action( 'admin_init', 'training_init_custom_fields' );

function training_init_custom_fields() {

	// check that the metadata manager plugin is active by checking if the two functions we need exist
	if( function_exists( 'x_add_metadata_group' ) && function_exists( 'x_add_metadata_field' ) ) {

		// adds a new group to the test post type
		x_add_metadata_group( 'x_metaBox1', 'training', array(
			'label' => ' Registration Details'
		) );

		// adds another group to the test post type + posts + users
		x_add_metadata_group( 'x_metaBox2', array( 'training' ), array(
			'label' => 'Training Methodology'
		) );
		
		x_add_metadata_group( 'x_metaBox6', array('user' ), array(
			'label' => 'Training Overview'
		) );
		
		x_add_metadata_group( 'x_metaBox7', array('training' ), array(
			'label' => ' Trining Resource Person'
		) );
			
		x_add_metadata_group( 'x_metaBox3', 'training', array(
			'label' => 'Who Should Attend'
		) );
	
			x_add_metadata_group( 'x_metaBox4', 'training', array(
			'label' => ' Training Schedule'
		) );
			
		x_add_metadata_group( 'x_metaBox5', 'training', array(
			'label' => 'Training Outline'
		) );
			
			
		// adds a text field to the first group
		x_add_metadata_field('traingfee', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => 'BDT 3000/- Only.', // description for the field
			'label' => 'Training Fee', // field label
			'display_column' => true // show this field in the column listings
		));

		x_add_metadata_field('payment_mode', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => 'Cash or A/C Payee Cheque ', // description for the field
			'label' => 'Payment Mode', // field label
			'display_column' => true // show this field in the column listings
		));
		

		x_add_metadata_field('contact_address', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => 'Drik ICT, House: 58, Road: 15 A (New), Dhanmondi, Dhaka 1209', // description for the field
			'label' => 'Contact Address', // field label
			'display_column' => true // show this field in the column listings
		));
		

		x_add_metadata_field('contact_number', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => 'Phone: 9103222 | Cell: 01730444766 | Email: iftekhar@cpdbd.com', // description for the field
			'label' => 'Contact Number', // field label
			'display_column' => true // show this field in the column listings
		));
		
			x_add_metadata_field('registration_lastdate', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => '12 Jul 2012', // description for the field
			'label' => 'Last Date of Registration', // field label
			'display_column' => true // show this field in the column listings

		));	
	
			x_add_metadata_field('training_date', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => '1 Jul 2012', // description for the field
			'label' => 'Trainig Date', // field label
			'display_column' => true // show this field in the column listings
		));	

			x_add_metadata_field('training_time', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => '10:00 am to 4:30 pm', // description for the field
			'label' => 'Trainig Time', // field label
			'display_column' => true // show this field in the column listings
		));

			x_add_metadata_field('training_totaltime', 'training', array(
			'group' => 'x_metaBox1', // the group name
			'description' => '06 Contact Hours', // description for the field
			'label' => 'Trainig Total Hours', // field label
			'display_column' => true // show this field in the column listings
		));
			
			
				
			x_add_metadata_field('methodology', array('training'), array(
			'group' => 'x_metaBox2',
			'field_type' => 'wysiwyg',
			'label' => 'Training Methodology',
		));
	
			x_add_metadata_field('trainerdetails', array('user'), array(
			'group' => 'x_metaBox6',
			'field_type' => 'wysiwyg',
			'label' => 'Trainer Details',
		));
		

		
/*		x_add_metadata_field('x_fieldWysiwyg1', array('training', 'user'), array(
			'group' => 'x_metaBox2',
			'field_type' => 'wysiwyg',
			'label' => 'Training Methodology',
		));
		*/
/*			x_add_metadata_field('whoattend', array('training', 'user'), array(
			'group' => 'x_metaBox3',
			'field_type' => 'wysiwyg',
			'label' => 'Who Should Attend',
		));	
		*/
		x_add_metadata_field('whoattend', array('training'), array(
			'group' => 'x_metaBox3',
			'field_type' => 'wysiwyg',
			'label' => 'Who Should Attend',
		));	
		
		
		x_add_metadata_field('trainingsechedule', array('training'), array(
			'group' => 'x_metaBox4',
			'field_type' => 'wysiwyg',
			'label' => 'Training Schedule',
		));	
		
			x_add_metadata_field('outlineleft', array('training'), array(
			'group' => 'x_metaBox5',
			'field_type' => 'wysiwyg',
			'label' => 'Training Outline Left',
		));	
		
		x_add_metadata_field('outlineright', array('training'), array(
			'group' => 'x_metaBox5',
			'field_type' => 'wysiwyg',
			'label' => 'Training Outline Right',
		));

		x_add_metadata_field('registrationdetails', array('training'), array(
			'group' => 'x_metaBox5',
			'field_type' => 'wysiwyg',
			'label' => 'Registration Details',
		));
		
	
			x_add_metadata_field('trainingperson', 'training', array(
			'group' => 'x_metaBox7', // the group name
			'description' => 'User ID Ex: 1,3,5 ', // description for the field
			'label' => 'Resource Person', // field label
			'display_column' => true // show this field in the column listings
		));
			
				
					
		// adds a cloneable textarea field to the 1st group
/*		x_add_metadata_field('x_fieldTextarea1', 'training', array(
			'group' => 'x_metaBox1',
			'field_type' => 'textarea',
			'multiple' =>false,
			'label' => 'Repeatable Text Area',
		));

		// adds a readonly textarea field to the 1st group
		x_add_metadata_field('x_fieldTextareaReadOnly1', 'training', array(
			'group' => 'x_metaBox1',
			'field_type' => 'textarea',
			'readonly' => true,
			'label' => 'Read Only Text Area',
		));

		// adds a readonly text field to the 1st group
		x_add_metadata_field('x_fieldTextReadOnly1', 'training', array(
			'group' => 'x_metaBox1',
			'readonly' => true,
			'label' => 'Read Only Text Area',
		));

		// adds a wysiwyg (full editor) field to the 2nd group
		x_add_metadata_field('x_fieldWysiwyg1', array('training', 'user'), array(
			'group' => 'x_metaBox2',
			'field_type' => 'wysiwyg',
			'label' => 'TinyMCE / Wysiwyg field',
		));

		// adds a datepicker field to the 1st group
		x_add_metadata_field('x_fieldDatepicker1', 'training', array(
			'group' => 'x_metaBox1',
			'field_type' => 'datepicker',
			'label' => 'Datepicker field',
		));

		// adds an upload field to the 1st group
		x_add_metadata_field('x_fieldUpload1', 'training', array(
			'group' => 'x_metaBox1',
			'field_type' => 'upload',
			'label' => 'Upload field',
		));

		// adds a checkbox field to the first group
		x_add_metadata_field('x_fieldCheckbox1', 'training', array(
			'group' => 'x_metaBox1',
			'field_type' => 'checkbox',
			'label' => 'Checkbox field',
		));

		// adds a radio button field to the first group
		x_add_metadata_field('x_fieldRadio1', 'training', array(
			'group' => 'x_metaBox1',
			'field_type' => 'radio',
			'values' => array(					// set possible value/options
				'option1' => 'Option #1', // key => value pair (value is stored in DB)
				'option2' => 'Option #2',
			),
		'label' => 'Radio field',
		));

		// adds a select box in the first group
		x_add_metadata_field('x_fieldSelect1', 'training', array(
			'group' => 'x_metaBox1',
			'field_type' => 'select',
			'values' => array(					// set possible value/options
				'option1' => 'Option #1', // key => value pair (value is stored in DB)
				'option2' => 'Option #2'
			),
		'label' => 'Select field',
		));

		// adds a field to posts and users
		x_add_metadata_field('x_fieldName2', array( 'post', 'user' ), array(
			'group' => 'x_metaBox2',
			'label' => 'Text field',
		));

		// adds a field with a custom display callback (see below)
		x_add_metadata_field('x_fieldCustomHidden1', 'training', array(
			'group' => 'x_metaBox1',
			'display_callback' => 'fieldCustomHidden1_display', // this function is defined below
			'label' => 'Hidden field',
		));


		// field with capabilities limited
		x_add_metadata_field('x_cap-limited-field', 'training', array(
			'label' => 'Cap Limited Field (edit_posts)',
			'required_cap' => 'edit_posts' // limit to users who can edit posts
		));

		// field with role limited
		x_add_metadata_field('x_author-cap-limited-field', 'user', array(
			'label' => 'Cap Limited Field (author)',
			'required_cap' => 'author' // limit to authors
		));

		// comment field
		x_add_metadata_field('x_commentField1', 'comment', array(
			'label' => 'Field for Comment',
			'display_column' => true
		));

		// field that exludes posts
		x_add_metadata_field('x_fieldNameExcluded1', 'post', array(
			'description' => 'This field is excluded from Post ID#2476',
			'label' => 'Excluded Field',
			'exclude' => 2476
		));

		// field that includes certain posts only
		x_add_metadata_field('x_fieldNameIncluded1', 'post', array(
			'description' => 'This field is only included on Post ID#2476',
			'label' => 'Included Field',
			'include' => 2476
		));
*/
	}
}

// jquery datepicker include in training date and registration lastdate
if(is_admin()) {
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom-js.js');
	wp_enqueue_style('jquery-ui-custom', get_template_directory_uri().'/css/jquery-ui-custom.css');
}
function my_admin_footer() {
	?>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#registration_lastdate').datepicker({
			dateFormat : 'dd-mm-yy'
		});
		
		jQuery('#training_date').datepicker({
			dateFormat : 'dd-mm-yy'
		});
	});
	</script>
	<?php
}
add_action('admin_footer', 'my_admin_footer');


function admin_color_scheme() {
   global $_wp_admin_css_colors;
   $_wp_admin_css_colors = 0;
}
add_action('admin_head', 'admin_color_scheme');


function fb_add_custom_user_profile_fields( $user ) {
?>
	<h3><?php _e('Extra Profile Information', 'user_information'); ?></h3>
	<table class="form-table">
		<tr>
			<th>
				<label for="address"><?php _e('Current Position', 'user_information'); ?>
			</label></th>
			<td>
				<input type="text" name="currntposition" id="currntposition" value="<?php echo esc_attr( get_the_author_meta( 'currntposition', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your Current Position.', 'user_information'); ?></span>
			</td>
		</tr>
        
        <tr>
			<th>
				<label for="address"><?php _e('Company Name', 'user_information'); ?>
			</label></th>
			<td>
				<input type="text" name="companyinfo" id="companyinfo" value="<?php echo esc_attr( get_the_author_meta( 'companyinfo', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your Company Name.', 'user_information'); ?></span>
			</td>
		</tr>
        
	</table>
<?php }
function fb_save_custom_user_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;
	update_usermeta( $user_id, 'currntposition', $_POST['currntposition'] );
	update_usermeta( $user_id, 'companyinfo', $_POST['companyinfo'] );
}
add_action( 'show_user_profile', 'fb_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'fb_add_custom_user_profile_fields' );
add_action( 'personal_options_update', 'fb_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'fb_save_custom_user_profile_fields' );



?>