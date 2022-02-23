<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'boxstyle', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'boxstyle' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'boxstyle' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'boxstyle' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'boxstyle' ),
	'button_url'  => 'https://wordpress.org/support/theme/boxstyle/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'boxstyle' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'boxstyle' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'boxstyle' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'boxstyle' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'boxstyle' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'boxstyle' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'boxstyle' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'boxstyle' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'boxstyle' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'boxstyle' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'boxstyle' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'boxstyle' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'boxstyle' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 'blog-list',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'boxstyle' ),
		'blog-grid'		=> esc_html__( 'Grid', 'boxstyle' ),
		'blog-list'		=> esc_html__( 'List', 'boxstyle' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'boxstyle' ),
	'description'	=> esc_html__( 'Your blog heading', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'boxstyle' ),
	'description'	=> esc_html__( 'Your blog subheading', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'boxstyle' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'boxstyle' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'boxstyle' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'boxstyle' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'boxstyle' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'boxstyle' ),
	'description'	=> esc_html__( '2 columns of widgets', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'boxstyle' ),
	'description'	=> esc_html__( '2 columns of widgets', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Thumbnail Comment Count', 'boxstyle' ),
	'description'	=> esc_html__( 'Comment count on thumbnails', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Post Format Icon
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'format-icon',
	'label'			=> esc_html__( 'Post Format Icons', 'boxstyle' ),
	'description'	=> esc_html__( 'Circle icons', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'boxstyle' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'boxstyle' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'boxstyle' ),
		'categories'=> esc_html__( 'Related by categories', 'boxstyle' ),
		'tags'		=> esc_html__( 'Related by tags', 'boxstyle' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'boxstyle' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'boxstyle' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'boxstyle' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'boxstyle' ),
		'content'	=> esc_html__( 'Below content', 'boxstyle' ),
	),
) );
// Header: Search
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'boxstyle' ),
	'description'	=> esc_html__( 'Header search button', 'boxstyle' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'boxstyle' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'boxstyle' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'boxstyle' ),
	'description'	=> esc_html__( 'Square size, same width as height', 'boxstyle' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'boxstyle' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'boxstyle' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'boxstyle' ),
	'description'	=> esc_html__( 'A short description of you', 'boxstyle' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'boxstyle' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'boxstyle' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'boxstyle' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'boxstyle' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'boxstyle' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'boxstyle' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'boxstyle' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'boxstyle' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'boxstyle' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'boxstyle' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'boxstyle' ),
	'description'	=> esc_html__( 'Footer credit text', 'boxstyle' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'boxstyle' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cr',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'boxstyle' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'boxstyle' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'boxstyle' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'boxstyle' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'boxstyle' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'boxstyle' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'boxstyle' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'boxstyle' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function boxstyle_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'boxstyle_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'boxstyle' ),
		'description'	=> esc_html__( '(is_home) Primary', 'boxstyle' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxstyle' ),
	) );
	Kirki::add_field( 'boxstyle_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'boxstyle' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'boxstyle' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxstyle' ),
	) );
	Kirki::add_field( 'boxstyle_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'boxstyle' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'boxstyle' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxstyle' ),
	) );
	Kirki::add_field( 'boxstyle_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'boxstyle' ),
		'description'	=> esc_html__( '(is_category) Primary', 'boxstyle' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxstyle' ),
	) );
	Kirki::add_field( 'boxstyle_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'boxstyle' ),
		'description'	=> esc_html__( '(is_search) Primary', 'boxstyle' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxstyle' ),
	) );
	Kirki::add_field( 'boxstyle_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'boxstyle' ),
		'description'	=> esc_html__( '(is_404) Primary', 'boxstyle' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxstyle' ),
	) );
	Kirki::add_field( 'boxstyle_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'boxstyle' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'boxstyle' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'boxstyle' ),
	) );
	
 } 
add_action( 'init', 'boxstyle_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'boxstyle' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'boxstyle' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'boxstyle' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'boxstyle' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'boxstyle' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'boxstyle' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'boxstyle' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'boxstyle' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'boxstyle' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'boxstyle' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'boxstyle' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'boxstyle' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'boxstyle' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'boxstyle' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'boxstyle' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'boxstyle' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Switch
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'light-dark-switch',
	'label'			=> esc_html__( 'Light/Dark Theme Switch', 'boxstyle' ),
	'description'	=> esc_html__( 'Do not use with Dark Theme option enabled', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Dark
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_html__( 'Dark Theme', 'boxstyle' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'boxstyle' ),
	'description'	=> esc_html__( 'Select font for the theme', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'boxstyle' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'boxstyle' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'boxstyle' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'boxstyle' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'boxstyle' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'boxstyle' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'boxstyle' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'boxstyle' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'boxstyle' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'boxstyle' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'boxstyle' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'boxstyle' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'boxstyle' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'boxstyle' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'boxstyle' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'boxstyle' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'boxstyle' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'boxstyle' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'boxstyle' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'boxstyle' ),
		'arial'					=> esc_html__( 'Arial', 'boxstyle' ),
		'georgia'				=> esc_html__( 'Georgia', 'boxstyle' ),
		'verdana'				=> esc_html__( 'Verdana', 'boxstyle' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'boxstyle' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'boxstyle' ),
	'description'	=> esc_html__( 'Max-width of the container', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> '1120',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> '#198cff',
) );
// Styling: Background Color
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'boxstyle' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Comment Count Background
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-comment-count',
	'label'			=> esc_html__( 'Comment Count Background', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Image Border Radius
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'boxstyle' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> '10',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '30',
		'step'	=> '1',
	),
) );
// Styling: Wave
Kirki::add_field( 'boxstyle_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'wave-style',
	'label'			=> esc_html__( 'Wave Style', 'boxstyle' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
