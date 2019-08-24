<?php
add_action('customize_register', function ($wp_customize) {
    // logo
    $wp_customize->add_setting('menu_logo', [
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'menu_logo', [
        'label'        => 'Menu Logo',
        'section'    => 'title_tagline',
        'settings'   => 'menu_logo'
    ]));

    // login
    $wp_customize->add_section('login', [
        'title'      => 'Login',
        'priority'   => 1,
    ]);

    // page background image
    $wp_customize->add_setting('login_page_background_image', [
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'login_page_background_image', [
        'label'        => 'Page Background Image',
        'section'    => 'login',
        'settings'   => 'login_page_background_image'
    ]));

    // login page backgorund
    $wp_customize->add_setting('login_page_background_color', [
        'default'     => '#242121',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'login_page_background_color', [
        'label'        => 'Page Background Color',
        'section'    => 'login',
        'settings'   => 'login_page_background_color',
    ]));

    // login box background
    $wp_customize->add_setting('login_page_box_color', [
        'default'     => '#f1f1f1',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'login_page_box_color', [
        'label'        => 'Form Background Color',
        'section'    => 'login',
        'settings'   => 'login_page_box_color',
    ]));

    // login text color
    $wp_customize->add_setting('login_font_color', [
        'default'     => '#242121',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'login_font_color', [
        'label'        => 'Font Color',
        'section'    => 'login',
        'settings'   => 'login_font_color',
    ]));

    // login anchor color
    $wp_customize->add_setting('login_link_color', [
        'default'     => '#d7df23',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'login_link_color', [
        'label'        => 'Link Color',
        'section'    => 'login',
        'settings'   => 'login_link_color',
    ]));

    // login button background color
    $wp_customize->add_setting('login_button_background_color', [
        'default'     => '#d7df23',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'login_button_background_color', [
        'label'      => 'Button Background Color',
        'section'    => 'login',
        'settings'   => 'login_button_background_color',
    ]));

    // login button background color
    $wp_customize->add_setting('login_button_font_color', [
        'default'     => '#F1F1F1',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'login_button_font_color', [
        'label'      => 'Button Color',
        'section'    => 'login',
        'settings'   => 'login_button_font_color',
    ]));

    // social media
    $wp_customize->add_section('social_media', [
        'title'      => 'Social Media',
        'priority'   => 31,
    ]);
    $wp_customize->add_setting('social_facebook', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_facebook', [
            'label'    => __('Facebook', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_facebook',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_google_plus', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_google_plus', [
            'label'    => __('Google Plus', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_google_plus',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_instagram', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_instagram', [
            'label'    => __('Instagram', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_instagram',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_linkedin', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_linkedin', [
            'label'    => __('Linkedin', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_linkedin',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_pinterest', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_pinterest', [
            'label'    => __('Pinterest', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_pinterest',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_snapchat', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_snapchat', [
            'label'    => __('Snapchat', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_snapchat',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_twitter', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_twitter', [
            'label'    => __('Twitter', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_twitter',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_myspace', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_myspace', [
            'label'    => __('Myspace', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_myspace',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_yelp', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_yelp', [
            'label'    => __('Yelp', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_yelp',
            'type'     => 'url',
        ]
    );
    $wp_customize->add_setting('social_youtube', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('social_youtube', [
            'label'    => __('Youtube', 'sapling'),
            'section'  => 'social_media',
            'settings' => 'social_youtube',
            'type'     => 'url',
        ]
    );

    // SEO
    $wp_customize->add_section('seo', [
        'title'      => 'SEO',
        'priority'   => 1,
    ]);
    $wp_customize->add_setting('gtm', [
        'default'     => '',
        'transport'   => 'refresh',
    ]);
    $wp_customize->add_control('gtm', [
        'label'    => __('Google Tag Manager Code', 'sapling'),
        'section'  => 'seo',
        'settings' => 'gtm',
        'type'     => 'text',
    ]);
});