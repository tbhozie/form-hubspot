<?php
add_action( 'admin_init', 'add_form_button' );
add_action( 'admin_footer', 'forms_popup' );
add_action('wp_enqueue_media', 'form_scripts');

// Check to make sure advanced custom fields PRO is installed
if ( !is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
  echo 'Advanced Custom Fields PRO plugin must be installed for this to work';
  exit();
} 

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_form-options',
		'title' => 'Form Options',
		'fields' => array (
			array (
				'key' => 'field_596f8e5dbdc93',
				'label' => 'Multistep Form',
				'name' => 'multistep_form',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_596f8ceebdc89',
				'label' => 'Form',
				'name' => 'form',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_596f8d02bdc8a',
						'label' => 'Field Label',
						'name' => 'field_label',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_596f8d1fbdc8b',
						'label' => 'Field Type',
						'name' => 'field_type',
						'type' => 'select',
						'column_width' => '',
						'choices' => array (
							'text' => 'Text',
							'email' => 'Email',
							'select' => 'Select',
							'checkbox' => 'Checkbox',
							'textarea' => 'Textarea',
							'file' => 'File Upload',
						),
						'default_value' => '',
						'allow_null' => 1,
						'multiple' => 0,
					),
					array (
						'key' => 'field_596f8d70bdc8d',
						'label' => 'Checkbox Options',
						'name' => 'checkbox_options',
						'type' => 'repeater',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_596f8d1fbdc8b',
									'operator' => '==',
									'value' => 'checkbox',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_596f8dd6bdc8e',
								'label' => 'Option Label',
								'name' => 'option_label',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_596f8de1bdc8f',
								'label' => 'Option Value',
								'name' => 'option_value',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
						'row_min' => '',
						'row_limit' => '',
						'layout' => 'table',
						'button_label' => 'Add Option',
					),
					array (
						'key' => 'field_596faadc63565',
						'label' => 'Select Options',
						'name' => 'select_options',
						'type' => 'repeater',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_596f8d1fbdc8b',
									'operator' => '==',
									'value' => 'select',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_596faaed63566',
								'label' => 'Option Label',
								'name' => 'option_label',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_596faaf763567',
								'label' => 'Option Value',
								'name' => 'option_value',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
						'row_min' => '',
						'row_limit' => '',
						'layout' => 'table',
						'button_label' => 'Add Option',
					),
					array (
						'key' => 'field_596f8d56bdc8c',
						'label' => 'Required',
						'name' => 'required',
						'type' => 'true_false',
						'column_width' => '',
						'message' => '',
						'default_value' => 0,
					),
					array (
						'key' => 'field_596f8dffbdc90',
						'label' => 'Field Name',
						'name' => 'field_name',
						'type' => 'text',
						'instructions' => 'This is the name for the input, this should match the input name in HubSpot.',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_596f8e2bbdc91',
						'label' => 'Field Step',
						'name' => 'field_step',
						'type' => 'select',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_596f8e5dbdc93',
									'operator' => '==',
									'value' => '1',
								),
							),
							'allorany' => 'all',
						),
						'column_width' => '',
						'choices' => array (
							1 => 1,
							2 => 2,
							'Final' => 'Final',
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Field',
			),
			array (
				'key' => 'field_596f864e2bd05',
				'label' => 'Redirect Page',
				'name' => 'redirect_url',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_596f8c9b129f6',
				'label' => 'Form GUID',
				'name' => 'form_guid',
				'type' => 'text',
				'instructions' => 'Enter the form GUID from HubSpot here. You can get this from the URL when viewing the form in HubSpot.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'forms',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

function forms_post_type() {

	/**
	 * Post Type: Forms.
	 */

	$labels = array(
		"name" => __( "Forms" ),
		"singular_name" => __( "Form" ),
	);

	$args = array(
		"label" => __( "Forms" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "forms", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 20,
		"menu_icon" => "dashicons-welcome-widgets-menus",
		"supports" => array( "title" ),
	);

	register_post_type( "forms", $args );
}

add_action( 'init', 'forms_post_type' );


function form_scripts() {
    if(is_admin()) {
        wp_enqueue_script( 'form-script', get_template_directory().'/forms/forms.js', array( 'jquery' ) );
    }
}
function add_form_button() {
        add_action( 'media_buttons', 'form_button', 100 );
}
function form_button( $page = null, $target = null ) {
	?>
	<a href="#form-wrap" class="button formModal" title="Select form" data-page="<?php echo $page; ?>" data-target="<?php echo $target; ?>">
		Select Form
	</a>
	<?php
}
// [form id=""]
function add_form_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'id' => ''
    ), $atts );

    // Code
    ob_start(); ?>
	   
	<?php   
    $form_id = $a['id'];
    $form_title = get_the_title($form_id);
    // Multistep
    $multistep = get_field('multistep_form', $form_id);
    // Action
    $action = "/formHandler.php?formid=$form_id";
    
    ?>
	<style>
		.hiddenField {
			visibility: hidden;
			height: 0;
			width: 0;
			clear: both;
			position: absolute;
		}
	</style>
    <form id="<?php echo $form_title; ?>" action="<?php echo $action; ?>" class="<?php if($multistep == TRUE): ?>multistep step-1<?php endif; ?>" enctype="multipart/form-data" method="post">
    	
        <?php if( have_rows('form', $form_id) ): ?>
        
        	<?php while( have_rows('form', $form_id) ): the_row(); 
        
        		// vars
        		$field_label = get_sub_field('field_label', $form_id);
        		$field_type = strtolower(get_sub_field('field_type', $form_id));
        		$field_name = get_sub_field('field_name', $form_id);
                $field_step = get_sub_field('field_step', $form_id);
                $required = get_sub_field('required', $form_id);
                if ($field_step == '1') {
                    $step = 'step-1';
                } else if($field_step == '2') {
                    $step = 'step-2';
                } else {
                    $step = 'final-step';
                }
        		?>
        
        		<div class="field <?php echo $step; ?>">
                    <label><?php echo $field_label; ?><?php if($required == TRUE):?>*<?php endif; ?></label>
                    <?php if($field_type == 'textarea') : ?>
                        <textarea name="<?php echo $field_name; ?>" value="" <?php if($required == TRUE):?>required<?php endif; ?>></textarea>
                    <?php elseif ($field_type == 'select') : ?>
                        <select name="<?php echo $field_name; ?>" <?php if($required == TRUE):?>required<?php endif; ?>>
                            <option value="" disabled="" selected="">- Please Select -</option>
                        <?php while( have_rows('select_options', $form_id) ): the_row(); 
                            // select options
                            $option_label = get_sub_field('option_label', $form_id);
                            $option_value = get_sub_field('option_value', $form_id);
                        ?>
                            <option value="<?php echo $option_value; ?>"><?php echo $option_label; ?></option>
                        <?php endwhile; ?>
                        </select>
                    <?php elseif ($field_type == 'checkbox') : ?>
                        <?php while( have_rows('checkbox_options', $form_id) ): the_row(); 
                            // checkbox options
                            $option_label = get_sub_field('option_label', $form_id);
                            $option_value = get_sub_field('option_value', $form_id);
                        ?>
                            <div class="checkbox">
                            	<label>
                            	<input <?php if($required == TRUE):?>required<?php endif; ?> type="checkbox" name="<?php echo $field_name; ?>" value="<?php echo $option_value; ?>"  /> <?php echo $option_label; ?> </label>
                            </div>
                        <?php endwhile; ?>
                        <label for="<?php echo $field_name; ?>" class="error">Please select at least one option</label>
                    <?php elseif ($field_type == 'file') : ?>
                        <input type="file" name="<?php echo $field_name; ?>" multiple="false" <?php if($required == TRUE):?>required<?php endif; ?> />
                    <?php else : ?>
                        <input type="<?php echo $field_type; ?>" name="<?php echo $field_name; ?>" value="" <?php if($required == TRUE):?>required<?php endif; ?> />
                    <?php endif; ?>
        		</div>
        
        	<?php endwhile; ?>
        
        <?php endif; ?>
        
        <input type="text" name="company_url" class="company_url" value="" />
        
        <?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
        <div class="hiddenField"><input id="page_url" type="text" name="page_url" value="<?php echo $actual_link; ?>" /></div>
        <div class="hiddenField"><input id="page_title" type="text" name="page_title" value="<?php echo the_title(); ?>" /></div>
    	
    	<?php if($multistep == TRUE): ?>
            <div class="nextStep step-1">
            	<button type="button">Next - 1 of 3</button>
            </div>
            <div class="nextStep step-2">
            	<button type="button">Next - 2 of 3</button>
            </div>
            <div class="submit final-step">
        		<input type="submit" value="Submit" />
        	</div>
        <?php else : ?>
            <div class="submit">
        		<input type="submit" value="Submit" />
        	</div>
        <?php endif; ?>
        
    </form> 
	    
	<?php return ob_get_clean();
}
add_shortcode( 'form', 'add_form_shortcode' );
	
function forms_popup() {
	?>
	<style>
	    #formSelect {
	        position: fixed;
	        top: 20%;
	        left:0;right:0;
	        margin: 0 auto;
	        width: 300px;
	        height: 100px;
	        background-color: #fff;
	        z-index: 99999;
	        box-shadow: 0px 0 1px #ababab;
	        padding: 30px;
	    }
	    #formSelect #modalClose {
	        cursor: pointer;
	        color: #000;
	        position: absolute;
	        top: 10px;
	        right: 10px;
	        font-size: 18px;
	    }
	    #formSelect label {
	        display: block;
	        font-weight: bold;
	        margin: 0 0 6px 0;
	    }
	    #formSelect select {
	        width: 100%;
	        display: block;
	        margin: 0 0 6px 0;
	    }
	    #form-wrap #modalBG {
	        position: absolute;
	        width: 100%;
	        height: 100%;
	        background-color: #fff;
	        opacity: 0.85;
	        top: 0;
	        left: 0;
	        z-index: 99998;
	    }
	</style>
	<div id="form-wrap" class="customModal" style="display:none">
		<div id="formSelect">
		    <div id="modalClose">X</div>
		    <label>Select a form</label>
		    <select>
		        <?php
                $args = array(
                    'post_type'      => 'forms',
                    'posts_per_page' => -1,
                 );
                
                
                $forms = new WP_Query( $args );
                if ( $forms->have_posts() ) : ?>
                
                    <?php while ( $forms->have_posts() ) : $forms->the_post(); ?>
                        <option value="<?php the_ID(); ?>">
                            <?php the_title(); ?>
                        </option>
                    <?php endwhile; ?>
                
                <?php endif; wp_reset_query(); ?>
		        
		    </select>
		    <a href="#" class='insertForm button'>Insert form</a>
		</div>
		<div id="modalBG"></div>
	</div>

	<?php
}