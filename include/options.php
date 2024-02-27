<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if ( ! class_exists( 'Redux' ) ) {
	return null;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'sclipping';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// REQUIRED!!  Change these values as you need/desire.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	'menu_title'                => esc_html__( 'Sample Options', 'your-textdomain-here' ),
	'page_title'                => esc_html__( 'Sample Options', 'your-textdomain-here' ),

	// Disable this in case you want to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Choose an icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Choose a priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Set a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc.
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => null,

	// For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel.
	'page_slug'                 => '_options',

	// On load save the defaults to DB before user clicks save or not.
	'save_defaults'             => true,

	// If true, shows the default value next to each field that is not the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default. Suggested: *.
	'default_mark'              => '',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// CAREFUL -> These options are for advanced use only.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
	'output_tag'                => true,

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',

	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	'use_cdn'                   => true,
	'compiler'                  => true,

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display .
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => esc_html__( 'Documentation', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => esc_html__( 'Support', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-extensions',
	'href'  => 'redux.io/extensions',
	'title' => esc_html__( 'Extensions', 'your-textdomain-here' ),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
	'url'   => '//github.com/ReduxFramework/ReduxFramework',
	'title' => 'Visit us on GitHub',
	'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
	'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
	'title' => esc_html__( 'Like us on Facebook', 'your-textdomain-here' ),
	'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
	'url'   => '//twitter.com/reduxframework',
	'title' => esc_html__( 'Follow us on Twitter', 'your-textdomain-here' ),
	'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
	'url'   => '//www.linkedin.com/company/redux-framework',
	'title' => esc_html__( 'Find us on LinkedIn', 'your-textdomain-here' ),
	'icon'  => 'el el-linkedin',
);

// Panel Intro text -> before the form.
if ( false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}

	$args['intro_text'] = '<p>' . sprintf( __( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: $s', 'your-textdomain-here' ) . '</p>', '<strong>' . $v . '</strong>' );
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';
}



Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> BEGIN HELP TABS
 */

$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),

	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
);

Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';
Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> BEGIN SECTIONS
 *
 */

/* As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for. */

/* -> START Basic Fields. */

$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
);

$section = array(
	'title'  => esc_html__( 'Basic Field', 'your-textdomain-here' ),
	'id'     => 'basic',
	'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
	'icon'   => 'el el-home',
	'fields' => array(
		array(
			'id'       => 'opt-text',
			'type'     => 'text',
			'title'    => esc_html__( 'Example Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Example description.', 'your-textdomain-here' ),
			'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
			'hint'     => array(
				'content' => wp_kses( __( 'This is a <strong>hint</strong> tool-tip for the text field.<br/><br/>Add any HTML-based text you like here.', 'your-textdomain-here' ), $kses_exceptions ),
			),
		),
	),
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title' => __( 'Basic Fields', 'your-textdomain-here' ),
	'id'    => 'basic',
	'desc'  => __( 'Basic fields as subsections.', 'your-textdomain-here' ),
	'icon'  => 'el el-home',
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'Text', 'your-textdomain-here' ),
	'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="https://devs.redux.io/core-fields/text.html" target="_blank">https://devs.redux.io/core-fields/text.html</a>',
	'id'         => 'opt-text-subsection',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'text-example',
			'type'     => 'text',
			'title'    => esc_html__( 'Text Field', 'your-textdomain-here' ),
			'subtitle' => esc_html__( 'Subtitle', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
	),
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'Text Area', 'your-textdomain-here' ),
	'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="https://devs.redux.io/core-fields/textarea.html" target="_blank">https://devs.redux.io/core-fields/textarea.html</a>',
	'id'         => 'opt-textarea-subsection',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'textarea-example',
			'type'     => 'textarea',
			'title'    => esc_html__( 'Text Area Field', 'your-textdomain-here' ),
			'subtitle' => esc_html__( 'Subtitle', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
	),
);

Redux::set_section( $opt_name, $section );

// FAQ
$section = array(
	'title'      => esc_html__( 'FAQ Area', 'your-textdomain-here' ),
	'id'         => 'opt-faq-section',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'faq-one',
			'type'     => 'text',
			'title'    => esc_html__( 'FAQ ONE', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
		array(
			'id'       => 'faq-desc-one',
			'type'     => 'editor',
			'title'    => esc_html__( 'FAQ ONE DESC', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
		array(
			'id'       => 'faq-two',
			'type'     => 'text',
			'title'    => esc_html__( 'FAQ TWO', 'your-textdomain-here' ),
			'default'  => 'How much does it cost? - What are your pricing plans?',
		),
		array(
			'id'       => 'faq-desc-two',
			'type'     => 'editor',
			'title'    => esc_html__( 'FAQ TWO DESC', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
		array(
			'id'       => 'faq-three',
			'type'     => 'text',
			'title'    => esc_html__( 'FAQ THREE ', 'your-textdomain-here' ),
			'default'  => 'How do I pay?1',
		),
		array(
			'id'       => 'faq-desc-three',
			'type'     => 'editor',
			'title'    => esc_html__( 'FAQ THREE DESC', 'your-textdomain-here' ),
			'default'  => 'How do I pay?12',
		),
		array(
			'id'       => 'faq-four',
			'type'     => 'text',
			'title'    => esc_html__( 'FAQ FOUR ', 'your-textdomain-here' ),
			'default'  => ' Do I pay monthly and per-image?',
		),
		array(
			'id'       => 'faq-desc-four',
			'type'     => 'editor',
			'title'    => esc_html__( 'FAQ FOUR DESC', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
		array(
			'id'       => 'faq-five',
			'type'     => 'text',
			'title'    => esc_html__( 'FAQ FIVE ', 'your-textdomain-here' ),
			'default'  => 'What is the monthly subscription fee for?',
		),
		array(
			'id'       => 'faq-desc-five',
			'type'     => 'editor',
			'title'    => esc_html__( 'FAQ FIVE DESC', 'your-textdomain-here' ),
			'default'  => 'What is the monthly subscription fee for?',
		),
		array(
			'id'       => 'faq-sixe',
			'type'     => 'text',
			'title'    => esc_html__( 'FAQ SIXE ', 'your-textdomain-here' ),
			'default'  => 'Can I pause my subscription?',
		),
		array(
			'id'       => 'faq-desc-sixe',
			'type'     => 'editor',
			'title'    => esc_html__( 'FAQ SIXE DESC', 'your-textdomain-here' ),
			'default'  => 'Can I pause my subscription?',
		),
		array(
			'id'       => 'faq-seven',
			'type'     => 'text',
			'title'    => esc_html__( 'FAQ SEVEN ', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
		array(
			'id'       => 'faq-desc-seven',
			'type'     => 'editor',
			'title'    => esc_html__( 'FAQ SEVEN DESC', 'your-textdomain-here' ),
			'default'  => 'Default Text',
		),
	),
);

Redux::set_section( $opt_name, $section );
// Real Estead
$section = array(
	'title'      => esc_html__( 'Real Estate', 'your-textdomain-here' ),
	'id'         => 'opt-real-estate',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'real-qualitybox',
			'type'     => 'text',
			'title'    => esc_html__( 'Qualitybox Image', 'your-textdomain-here' ),
			'subtitle' => esc_html__( 'Subtitle', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-qualitybox-title',
			'type'     => 'text',
			'title'    => esc_html__( 'Qualitybox Title', 'your-textdomain-here' ),
			'subtitle' => esc_html__( 'Subtitle', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  => 'Quality image clipping, quick & easy',
		),
		array(
			'id'       => 'real-qualitybox-desc',
			'type'     => 'textarea',
			'title'    => esc_html__( 'Qualitybox Description', 'your-textdomain-here' ),
			'subtitle' => esc_html__( 'Subtitle', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite.',
		),
		array(
			'id'       => 'real-beforeAfter-one',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-afterAfter-one',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-beforeAfter-two',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-afterAfter-two',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-beforeAfter-three',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-afterAfter-three',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-beforeAfter-four',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Four', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-afterAfter-four',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Four', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-beforeAfter-five',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Five', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-afterAfter-five',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Five', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-beforeAfter-six',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Six', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'real-afterAfter-six',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Six', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
	),
);

Redux::set_section( $opt_name, $section );

// portfolio
$section = array(
	'title'      => esc_html__( 'Portfolio', 'your-textdomain-here' ),
	'id'         => 'port-real-estate',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'port-text-one',
			'type'     => 'text',
			'title'    => esc_html__( 'text one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Clipping Path'
		),
		array(
			'id'       => 'port-link-one',
			'type'     => 'text',
			'title'    => esc_html__( 'link one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-text-two',
			'type'     => 'text',
			'title'    => esc_html__( 'text one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Clipping Path'
		),
		array(
			'id'       => 'port-link-two',
			'type'     => 'text',
			'title'    => esc_html__( 'link one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-text-three',
			'type'     => 'text',
			'title'    => esc_html__( 'text one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Clipping Path'
		),
		array(
			'id'       => 'port-link-three',
			'type'     => 'text',
			'title'    => esc_html__( 'link one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-text-four',
			'type'     => 'text',
			'title'    => esc_html__( 'text one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Clipping Path'
		),
		array(
			'id'       => 'port-link-four',
			'type'     => 'text',
			'title'    => esc_html__( 'link one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-text-five',
			'type'     => 'text',
			'title'    => esc_html__( 'text one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Clipping Path'
		),
		array(
			'id'       => 'port-link-five',
			'type'     => 'text',
			'title'    => esc_html__( 'link one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-text-six',
			'type'     => 'text',
			'title'    => esc_html__( 'text one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Clipping Path'
		),
		array(
			'id'       => 'port-link-six',
			'type'     => 'text',
			'title'    => esc_html__( 'link one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-text-seven',
			'type'     => 'text',
			'title'    => esc_html__( 'text one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Clipping Path'
		),
		array(
			'id'       => 'port-link-seven',
			'type'     => 'text',
			'title'    => esc_html__( 'link one', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-one',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-one',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-two',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-two',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-three',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-three',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-four',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Four', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-four',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Four', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-five',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Five', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-five',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Five', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-six',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Six', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-six',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Six', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-seven',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Four', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-eight',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Four', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-nine',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Five', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-ten',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Five', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-beforeAfter-eleven',
			'type'     => 'text',
			'title'    => esc_html__( 'Before Image Six', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'port-afterAfter-12',
			'type'     => 'text',
			'title'    => esc_html__( 'Aftar Image Six', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
	),
);

Redux::set_section( $opt_name, $section );
// Pricing
$section = array(
	'title'      => esc_html__( 'Pricing', 'your-textdomain-here' ),
	'id'         => 'pricing-section',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'standard-no-extra-charge',
			'type'     => 'text',
			'title'    => esc_html__( 'Standard No Extra Charge', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'web'
		),
		array(
			'id'       => 'standard-no-extra-charge-text',
			'type'     => 'text',
			'title'    => esc_html__( 'Standard No Extra Charge Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Standard No Extra Charge'
		),
		array(
			'id'       => 'standard-no-extra-charge-image-one',
			'type'     => 'text',
			'title'    => esc_html__( 'Standard No Extra Charge Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'standard-no-extra-charge-image-two',
			'type'     => 'text',
			'title'    => esc_html__( 'Standard No Extra Charge Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'standard-no-extra-charge-image-three',
			'type'     => 'text',
			'title'    => esc_html__( 'Standard No Extra Charge Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€*', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'design'
		),
		array(
			'id'       => 'category-ghshdsyh-text',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Category Ghshdsyh + 1,00€*'
		),
		array(
			'id'       => 'category-ghshdsyh-image-one',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-two',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-three',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		//

		array(
			'id'       => 'category-ghshdsyh-2',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€*', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'design'
		),
		array(
			'id'       => 'category-ghshdsyh-text-2',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Category Ghshdsyh + 1,00€*'
		),
		array(
			'id'       => 'category-ghshdsyh-image-one-2',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-two-2',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-three-2',
			'type'     => 'text',
			'title'    => esc_html__( 'Category Ghshdsyh + 1,00€* Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		//
		array(
			'id'       => 'category-ghshdsyh-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€*', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'design'
		),
		array(
			'id'       => 'category-ghshdsyh-text-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Category Ghshdsyh + 1,00€*'
		),
		array(
			'id'       => 'category-ghshdsyh-image-one-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-two-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-three-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		//
		array(
			'id'       => 'category-ghshdsyh-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€*', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'design'
		),
		array(
			'id'       => 'category-ghshdsyh-text-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Category Ghshdsyh + 1,00€*'
		),
		array(
			'id'       => 'category-ghshdsyh-image-one-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-two-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-three-3',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		//
		array(
			'id'       => 'category-ghshdsyh-4',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€*', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'design'
		),
		array(
			'id'       => 'category-ghshdsyh-text-4',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			'default'  =>'Category Ghshdsyh + 1,00€*'
		),
		array(
			'id'       => 'category-ghshdsyh-image-one-4',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image One', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-two-4',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image Two', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
		array(
			'id'       => 'category-ghshdsyh-image-three-4',
			'type'     => 'text',
			'title'    => esc_html__( 'Category1 + 1,00€* Image Three', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
		),
	),
);

Redux::set_section( $opt_name, $section );

/*
 * <--- END SECTIONS
 */