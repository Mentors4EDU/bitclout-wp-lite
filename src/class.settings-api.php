<?php
add_action( 'admin_menu', 'bitclout_add_admin_menu' );
add_action( 'admin_init', 'bitclout_settings_init' );


function bitclout_add_admin_menu(  ) { 

	add_options_page( 'BitClout Wordpress Plugin Lite', 'BitClout Wordpress Plugin Lite', 'manage_options', 'bitclout_wordpress_plugin_lite', 'bitclout_options_page' );

}


function bitclout_settings_init(  ) { 

	register_setting( 'pluginPage', 'bitclout_settings' );

	add_settings_section(
		'bitclout_pluginPage_section', 
		__( 'Your section description', 'tier-settings' ), 
		'bitclout_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'bitclout_text_field_0', 
		__( 'Settings field description', 'tier-settings' ), 
		'bitclout_text_field_0_render', 
		'pluginPage', 
		'bitclout_pluginPage_section' 
	);

	add_settings_field( 
		'bitclout_textarea_field_1', 
		__( 'Settings field description', 'tier-settings' ), 
		'bitclout_textarea_field_1_render', 
		'pluginPage', 
		'bitclout_pluginPage_section' 
	);

	add_settings_field( 
		'bitclout_text_field_2', 
		__( 'Settings field description', 'tier-settings' ), 
		'bitclout_text_field_2_render', 
		'pluginPage', 
		'bitclout_pluginPage_section' 
	);

	add_settings_field( 
		'bitclout_textarea_field_3', 
		__( 'Settings field description', 'tier-settings' ), 
		'bitclout_textarea_field_3_render', 
		'pluginPage', 
		'bitclout_pluginPage_section' 
	);

	add_settings_field( 
		'bitclout_text_field_4', 
		__( 'Settings field description', 'tier-settings' ), 
		'bitclout_text_field_4_render', 
		'pluginPage', 
		'bitclout_pluginPage_section' 
	);

	add_settings_field( 
		'bitclout_textarea_field_5', 
		__( 'Settings field description', 'tier-settings' ), 
		'bitclout_textarea_field_5_render', 
		'pluginPage', 
		'bitclout_pluginPage_section' 
	);


}


function bitclout_text_field_0_render(  ) { 

	$options = get_option( 'bitclout_settings' );
	?>
	<input type='text' name='bitclout_settings[bitclout_text_field_0]' value='<?php echo $options['bitclout_text_field_0']; ?>'>
	<?php

}


function bitclout_textarea_field_1_render(  ) { 

	$options = get_option( 'bitclout_settings' );
	?>
	<textarea cols='40' rows='5' name='bitclout_settings[bitclout_textarea_field_1]'> 
		<?php echo $options['bitclout_textarea_field_1']; ?>
 	</textarea>
	<?php

}


function bitclout_text_field_2_render(  ) { 

	$options = get_option( 'bitclout_settings' );
	?>
	<input type='text' name='bitclout_settings[bitclout_text_field_2]' value='<?php echo $options['bitclout_text_field_2']; ?>'>
	<?php

}


function bitclout_textarea_field_3_render(  ) { 

	$options = get_option( 'bitclout_settings' );
	?>
	<textarea cols='40' rows='5' name='bitclout_settings[bitclout_textarea_field_3]'> 
		<?php echo $options['bitclout_textarea_field_3']; ?>
 	</textarea>
	<?php

}


function bitclout_text_field_4_render(  ) { 

	$options = get_option( 'bitclout_settings' );
	?>
	<input type='text' name='bitclout_settings[bitclout_text_field_4]' value='<?php echo $options['bitclout_text_field_4']; ?>'>
	<?php

}


function bitclout_textarea_field_5_render(  ) { 

	$options = get_option( 'bitclout_settings' );
	?>
	<textarea cols='40' rows='5' name='bitclout_settings[bitclout_textarea_field_5]'> 
		<?php echo $options['bitclout_textarea_field_5']; ?>
 	</textarea>
	<?php

}


function bitclout_settings_section_callback(  ) { 

	echo __( 'This section description', 'tier-settings' );

}


function bitclout_options_page(  ) { 

		?>
		<form action='options.php' method='post'>

			<h2>BitClout Wordpress Plugin Lite</h2>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

		</form>
		<?php

}
