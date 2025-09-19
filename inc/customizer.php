<?php

function wpdevs_customizer($wp_customize) {
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title'=>'Copyright Settings',
            'description'=>'Copyright Settings'
        )
        );
        $wp_customize->add_settings(
            'set_copyright',
            array(
                'type'=>'theme_mod',
                'default'=>'Copyright X-All Right Reserved',
                'sanitize_callback'=>'sanatize_text_field'

            )
            );

            $wp_customize->add_control(
                'set_copyright',
                array(
                    'label'=>'Copyright'
                )
            )
}
add_action( 'customize_register','wpdevs_customizer')