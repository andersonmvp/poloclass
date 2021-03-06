<?php
/**
 * Add Out of Stock Badge section of Product List > Styles.
 * Prefix: s -> shop, pl -> product-list, s -> styles
 *
 * @package WordPress
 * @subpackage Jupiter
 * @since 5.9.4
 */

$wp_customize->add_section( 'mk_s_pl_s_out_of_stock_badge', array(
		'title' => __( 'Out of Stock Badge', 'mk_framework' ),
		'priority' => 60,
		'active_callback' => array( $this, 'hide_sections' ),
		'type' => array(
			'mk-dialog',
			'mk_s_pl_dialog',
		),
	)
);

// Add settings to the section.
// Text.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_text', array(
	'default'   => 'out of stock',
	'transport' => 'postMessage',
) );

$wp_customize->add_control(
	new MK_Input_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_text',
		array(
			'section' => 'mk_s_pl_s_out_of_stock_badge',
			'settings' => 'cs_pl_s_outofstock_badge_style_text',
			'column'  => 'mk-col-12',
			'text' => __( 'Text', 'mk_framework' ),
		)
	)
);

// Typography.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_typography', array(
	'default' => array(
		'family' => 'inherit',
		'size'   => 13,
		'weight' => 700,
		'style'  => 'normal',
		'color'  => '#aaaaaa',
	),
	'transport' => 'postMessage',
) );

$wp_customize->add_control(
	new MK_Typography_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_typography',
		array(
			'section' => 'mk_s_pl_s_out_of_stock_badge',
			'settings' => 'cs_pl_s_outofstock_badge_style_typography',
			'column'  => 'mk-col-12',
		)
	)
);

// Background color.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_background_color', array(
	'default'   => 'rgba(0, 0, 0, 0)',
	'transport' => 'postMessage',
) );

$wp_customize->add_control(
	new MK_Color_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_background_color',
		array(
			'section'  => 'mk_s_pl_s_out_of_stock_badge',
			'column'   => 'mk-col-2-alt',
			'icon'     => 'mk-background-color',
		)
	)
);

// Border radius.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_border_radius', array(
	'default'   => 0,
	'transport' => 'postMessage',
) );

$wp_customize->add_control(
	new MK_Input_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_border_radius',
		array(
			'section' => 'mk_s_pl_s_out_of_stock_badge',
			'column'  => 'mk-col-3-alt',
			'icon' => 'mk-corner-radius',
			'unit' => __( 'px', 'mk_framework' ),
			'input_type' => 'number',
			'input_attrs' => array(
				'min' => 0,
			),
		)
	)
);

// Border width.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_border_width', array(
	'default'   => 2,
	'transport' => 'postMessage',
) );

$wp_customize->add_control(
	new MK_Input_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_border_width',
		array(
			'section' => 'mk_s_pl_s_out_of_stock_badge',
			'column'  => 'mk-col-3-alt',
			'icon' => 'mk-border',
			'unit' => __( 'px', 'mk_framework' ),
			'input_type' => 'number',
			'input_attrs' => array(
				'min' => 0,
			),
		)
	)
);

// Border color.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_border_color', array(
	'default'   => '#aaaaaa',
	'transport' => 'postMessage',
) );

$wp_customize->add_control(
	new MK_Color_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_border_color',
		array(
			'section'  => 'mk_s_pl_s_out_of_stock_badge',
			'column'   => 'mk-col-2-alt mk-col-last',
			'icon'     => 'mk-border-color',
		)
	)
);

// Divider.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_divider' );

$wp_customize->add_control(
	new MK_Divider_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_divider',
		array(
			'section' => 'mk_s_pl_s_out_of_stock_badge',
		)
	)
);

// Box Model.
$wp_customize->add_setting( 'cs_pl_s_outofstock_badge_style_box_model', array(
	'default' => array(
		'margin_top'     => 0,
		'margin_right'   => 0,
		'margin_bottom'  => 0,
		'margin_left'    => 0,
		'padding_top'    => 12,
		'padding_right'  => 20,
		'padding_bottom' => 12,
		'padding_left'   => 20,
	),
	'transport' => 'postMessage',
) );

$wp_customize->add_control(
	new MK_Box_Model_Control(
		$wp_customize,
		'cs_pl_s_outofstock_badge_style_box_model',
		array(
			'section' => 'mk_s_pl_s_out_of_stock_badge',
			'column'  => 'mk-col-12',
		)
	)
);
