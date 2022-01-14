<?php 

function wp_ab_customizer( $wp_customize ) {

    $wp_customize->add_panel('home_panel',array(
		'title' => 'Home',
		'description' => 'Alterar conteúdo da pagina inicial',
		'priority' => 10,
	));

    //section 1
    $wp_customize->add_section(
		'set_section_1',
		array(
			'title' => __('Titulo/Subtitulo'),
			'description' => __('Editar o Título e Subtítulo da página.'),
			'panel' => 'home_panel'
        ),
	);

    $wp_customize->add_setting(
		'set_section_1_titulo',
		array(
			'type' => 'theme_mod',
			'default' => 'Nossa linha do tempo'
        ),
	);

	$wp_customize->add_control(
		'set_section_1_titulo', 
		array(
			'label' => ('Título'),
			'section' => 'set_section_1',
			'type' => 'text'
        ),
	);

    $wp_customize->add_setting(
		'set_section_1_subtitulo',
		array(
			'type' => 'theme_mod',
			'default' => 'É com muito amor que fiz para você a nossa linha do tempo.'
        ),
	);

	$wp_customize->add_control(
		'set_section_1_subtitulo', 
		array(
			'label' => ('Título'),
			'section' => 'set_section_1',
			'type' => 'text'
        ),
	);

}

add_action( 'customize_register', 'wp_ab_customizer' );