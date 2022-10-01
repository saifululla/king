<?php 

if( class_exists( 'CSF' ) ) {


    $prefix = 'saiful_options';
  


    CSF::createOptions( $prefix, array(
        'menu_title' => __('saiful Options', 'saiful'),
        'menu_slug' => 'saiful-option',
      'menu_type' => 'submenu',
      'menu_parent' => 'themes.php',
    //   'show_reset_all' => true,
    //   'framework_title' => 'saiful Options -- <small> Saiful kader </small>',
    
    ) );

    // CSF::createOptions($prefix, array(
    //     'menu_title' => __('Halim Options', 'halim'),
    //     'menu_slug' => 'halim-options',
    //     'framework_title' => 'Halim Options - <small>Abdullah Nahian</small>',
    //     'menu_parent' => 'themes.php',
    //     'menu_type' => 'submenu'
    // ));
    /**
     * 
     * Header Section
     * 
     */
    CSF::createSection( $prefix, array(
        'id' => 'header_option',
        'title' => __('Header Section','saiful')
    ));
    
    CSF::createSection( $prefix, array(
        'parent' => 'header_option',
        'title' => __('Header Left','saiful'),
        'fields' => array(
            array(
                'id' => 'header_email',
                'type' => 'text',
                'title' => __('Header Email' , 'saiful')
            ),
            array(
                'id' => 'header_phone',
                'type' => 'text',
                'title' => __('Header Phone' , 'saiful')
            ),

           
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_option',
        'title' => 'Social Icons',
        'fields' => array(
            array(
                'id' => 'header_icons',
                'type' => 'group',
                'title' => 'Header Icons Social',
                'fields' => array(
                    array(
                        'id' => 'icons_title',
                        'title' => 'Icons Title',
                        'type' => 'text',
                    ),
                    array(
                        'id' => 'icons_link',
                        'title' => 'Icons link',
                        'type' => 'text',
                    ),
                    array(
                        'id' => 'icons',
                        'title' => 'Icons',
                        'type' => 'icon',
                    ),
                )
            )
        )
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'header_option',
        'title' => __('Header Logo Section','saiful'),
        'fields' => array(
            
            array(
                'id' => 'header_logo',
                'type' => 'media',
                'title' => __('Header Logo  ' , 'saiful')
            ),
            array(
                'id' => 'header_logo_text',
                'type' => 'text',
                'title' => __('Header logo Text' , 'saiful')
            ),
        )
    ));
/**
 * 
 *  Header Color section
 * 
 */

    CSF::createSection($prefix, array(
        'parent' => 'header_option',
        'title' => 'Header Color Section',
        'fields' => array(
            array(
                'id' => 'header_backgrd',
                'type' => 'background',
                'title' => 'Heade Background Color',
                'subtitle' => 'Header Color FX',
                'output' => array('.header-top')
            ),
            array(
                'id' => 'font_social_color',
                'type' => 'color',
                'title' => 'Header Social Color',
                'output' => array('.header-top a .fab')),
                array(
                    'id' => 'font_social_hover_color',
                    'type' => 'color',
                    'title' => 'Socail  Hover',
                    'output' => array('.header-top a .fab:hover')
                ),
                array(
                    'id' => 'font_typography_color',
                    'type' => 'typography',
                    'title' => 'Header Font typography & Social ',
                    'output' => array('.header-top a')
                ),
            array(
                'id' => 'font_hover_color',
                'type' => 'color',
                'title' => 'Font Color Hover',
                'output' => array('.header-top a:hover')
            ),
            array(
                'id' => 'logo_color',
                'type' => 'color',
                'title' => 'Logo Color',
                'output' => array('.header a')
            ),
            array(
                'id' => 'logo_hover_color',
                'type' => 'color',
                'title' => 'Logo Color Hover',
                'output' => array('.header a:hover')
            ),
           
           
        )
    ));
    
   


    /*===========================
     * 
     *     About section
     *
     =============================*/ 

     CSF::createSection( $prefix, array(
        'id' => 'about_option',
        'title' => __('About Section','saiful')
    ));
    // about main section
    CSF::createSection($prefix , array(
        'parent' => 'about_option',
        'title' => __('Main About Section','saiful'),
        'fields' => array(
            array(
                'id' => 'main_about_sub_title',
                'title' => __('Main About Sub Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_about_title',
                'title' => __('Main About  Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_about_desc',
                'title' => __('Main About  Description','saiful'),
                'type' => 'textarea',
            ),
        )
    ));
// about welcome section
    CSF::createSection($prefix , array(
        'parent' => 'about_option',
        'title' => __('About Sub Section','saiful'),
        'fields' => array(
            
            array(
                'id' => 'about_title',
                'title' => __(' About  Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'about_desc',
                'title' => __(' About  Description','saiful'),
                'type' => 'textarea',
            ),
            array(
                'id' => 'abou_btn_title',
                'title' => __('  Button Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'about_btn_link',
                'title' => __(' About Button Link','saiful'),
                'type' => 'text',
            ),
        )
    ));
    // about features section
    CSF::createSection($prefix, array(
        'parent' => 'about_option',
        'title' => 'About Features Section',
        'fields' => array(
            array(
                'id' => 'about_feature_group',
                'type' => 'group',
                'title' => 'About Feature Group Section',
                'fields' => array(
                    array(
                        'id' => 'feature_title',
                        'title' => 'Feature Title',
                        'type' => 'text',
                    ),
                    array(
                        'id' => 'feature_desc',
                        'title' => 'Feature Description',
                        'type' => 'textarea',
                    ),
                    array(
                        'id' => 'feature_icons',
                        'title' => 'Feature Icons',
                        'type' => 'icon',
                    ),
                )
            )
        )
    ));

    // Faq section
    CSF::createSection( $prefix, array(
        'id' => 'faq_skill_option',
        'title' => __('Faq & Skill Section','saiful')
    ));

    CSF::createSection($prefix, array(
        'parent' => 'faq_skill_option',
        'title' => 'FAQ SECTION',
        'fields' => array(
            array(
                'id' => 'faw_main_titile',
                'title' => 'FAQ MAIN TITLE',
                'type' => 'text'
            ),
            array(
                'id' => 'faq_list_section',
                'title' => 'Faq List Options',
                'type' => 'group',
                'fields' => array(
                    array(
                        'id' => 'faq_title',
                        'title' => 'Faq Title',
                        'type' => 'text',

                    ),
                    array(
                        'id' => 'faq_desc',
                        'title' => 'Faq Description',
                        'type' => 'textarea',

                    ),
                )
            )
        )
    ));

    // skill test
    CSF::createSection($prefix, array(
        'parent' => 'faq_skill_option',
        'title' => 'Skill SECTION',
        'fields' => array(
            array(
                'id' => 'skill_main_titile',
                'title' => 'SKILL MAIN TITLE',
                'type' => 'text'
            ),
            array(
                'id' => 'skill_list_section',
                'title' => 'Skill List Options',
                'type' => 'group',
                'fields' => array(
                    array(
                        'id' => 'skill_title',
                        'title' => 'Skill Title',
                        'type' => 'text',

                    ),
                    array(
                        'id' => 'skill_number',
                        'title' => 'Skill Number',
                        'type' => 'text',

                    ),
                )
            )
        )
    ));

    // our service section

    CSF::createSection($prefix, array(
        'id' => 'service_section',
        'title' => __(' Service Section', 'saiful')
    ));
    CSF::createSection($prefix , array(
        'parent' => 'service_section',
        'title' => __('Our Service Section','saiful'),
        'fields' => array(
            array(
                'id' => 'main_service_sub_title',
                'title' => __('Main Service Sub Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_service_title',
                'title' => __('Main Service  Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_service_desc',
                'title' => __('Main Service  Description','saiful'),
                'type' => 'textarea',
            ),
        )
    ));

    // our counter section

    CSF::createSection($prefix , array(
        'id' => 'our_counter_section',
        'title' => __(' Counter Section', 'saiful')

    ));
    CSF::createSection( $prefix, array(
        'parent' => 'our_counter_section',
        'title' => __('Counter Section' ,'saiful'),
        'button_title' => __('Add New Counter','saiful'),
        'fields' => array(
            array(
                'id' => 'counter_group',
                'type' => 'group',
                'title' => __('Counter Group','saiful'),
                'fields' => array(
                    array(
                        'id' => 'counter_title',
                        'title' => __('Counter Title', 'saiful'),
                        'type' => 'text',
                    ),
                    array(
                        'id' => 'counter_icon',
                        'title' => __('Counter Icon', 'saiful'),
                        'type' => 'icon',
                    ),
                    array(
                        'id' => 'counter_number',
                        'title' => __('Counter Number', 'saiful'),
                        'type' => 'number',
                    ),
                )
            )
        )
    ));

     // our Team section

     CSF::createSection($prefix, array(
        'id' => 'team_section',
        'title' => __(' Team Section', 'saiful')
    ));
    CSF::createSection($prefix , array(
        'parent' => 'team_section',
        'title' => __('Our Team Section','saiful'),
        'fields' => array(
            array(
                'id' => 'main_team_sub_title',
                'title' => __('Main Team Sub Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_team_title',
                'title' => __('Main Team  Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_team_desc',
                'title' => __('Main Team  Description','saiful'),
                'type' => 'textarea',
            ),
        )
    ));

     // our Testimonial section

     CSF::createSection($prefix, array(
        'id' => 'testimonial_section',
        'title' => __(' Testimonial Section', 'saiful')
    ));
    CSF::createSection($prefix , array(
        'parent' => 'testimonial_section',
        'title' => __('Our Testimonial Section','saiful'),
        'fields' => array(
            array(
                'id' => 'main_testimonial_sub_title',
                'title' => __('Main Testimonial Sub Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_testimonial_title',
                'title' => __('Main Testimonial  Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_testimonial_desc',
                'title' => __('Main Testimonial  Description','saiful'),
                'type' => 'textarea',
            ),
        )
    ));
     // our blog title section

     CSF::createSection($prefix, array(
        'id' => 'lates_section',
        'title' => __(' Blog Latest Section', 'saiful')
    ));
    CSF::createSection($prefix , array(
        'parent' => 'lates_section',
        'title' => __('Our Blog Latest Section','saiful'),
        'fields' => array(
            array(
                'id' => 'main_lates_sub_title',
                'title' => __('Main Latest Sub Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_lates_title',
                'title' => __('Main Latest  Title','saiful'),
                'type' => 'text',
            ),
            array(
                'id' => 'main_lates_desc',
                'title' => __('Main Latest  Description','saiful'),
                'type' => 'textarea',
            ),
        )
    ));

    // CTA SECTION

    CSF::createSection($prefix ,array(
        'id' => 'cpa_section',
        'title' => __('CPA Option','saiful'),
    
    ));

    CSF::createSection($prefix , array(
        'parent' => 'cpa_section',
        'title' => __('CPA Section ','saiful'),
        'fields' => array(
            array(
                'id' => 'btn_switcher',
                'type' => 'switcher',
                'title' => 'CPA Switch ON / OFF',
                 'default' => true,
            ),
            array(
                'id' => 'cpa_title',
                'type' => 'text',
                'title' => 'CPA Title',
                'dependency' => array('btn_switcher', '==', 'true'),
                
            ),
            array(
                'id' => 'cpa_sub_title',
                'type' => 'textarea',
                'title' => 'CPA Sub Title',
                'dependency' => array('btn_switcher', '==', 'true'),
                
            ),
            array(
                'id' => 'cpa_btn_text',
                'type' => 'text',
                'title' => 'CPA Button Text',
                'dependency' => array('btn_switcher', '==', 'true'),
            ),
            array(
                'id' => 'cpa_btn_link',
                'type' => 'text',
                'title' => 'CPA Button link',
                'dependency' => array('btn_switcher', '==', 'true'),
            ),
           

        )

    ));

    // Contact Section

    CSF::createSection($prefix , array(
        'id' => 'contact_section',
        'title' => 'Contact Section'

    ));

    CSF::createSection( $prefix, array(
        'parent' => 'contact_section',
        'title' => 'Contact Infomation',
        'fields' => array(
            array(
                'id' => 'contact_group_title',
                'type' => 'group',
                'title' => 'Contact Group Title',
                'fields' => array(
                    array(
                        'id' => 'contact_info_title',
                        'type' => 'text',
                        'title' => 'Contact Info Title'
                    ),
                    array(
                        'id' => 'contact_info_icon',
                        'type' => 'icon',
                        'title' => 'Contact Info Icon'
                    ),
                    array(
                        'id' => 'contact_info_address',
                        'type' => 'textarea',
                        'title' => 'Contact Info Address'
                    ),
                )
            )
            
        )

    ));

    CSF::createSection($prefix, array(
        'parent' => 'contact_section',
        'title' => 'Contact Map',
        'fields' => array(
            array(
                'id' => 'contact_map',
                'title' => 'Contact Map Area',
                'type' => 'map'
            ),
        )
        
    ));

    // Footer Section copy right

    CSF::createSection($prefix , array(
        'id' => 'footer_text_section',
        'title' => 'Footer Copy Right Section',
    ));
    CSF::createSection($prefix , array(
        'parent' => 'footer_text_section',
        'title' => 'Foter Copy Right & Social Icon',
        'fields' => array(
            array(
                'id' => 'footer_switcher',
                'type' => 'switcher',
                'text_width' => 70,
                'title' => 'Footer Switch ON / OFF',
                 'default' => true,
            ),
            array(
                'id' => 'footer_copy',
                'type' => 'text',
                'title' => 'Footer Copyright Text',
                'dependency' => array('footer_switcher', '==', 'true'), 

            ),
            array(
                'id' => 'footer_social_icon',
                'type' => 'group',
                'title' => 'Footer Social Icon Section',
                'button_title' => 'Add New Social Icon',
                'dependency' => array('footer_switcher', '==', 'true'),
                'fields' =>  array(
                    array(
                        'id' => 'footer_icon_title',
                        'title' => 'Footer Icon Title',
                        'type' => 'text',
                        
                    ),
                    array(
                        'id' => 'footer_socialicon',
                        'title' => 'Footer Social Icon',
                        'type' => 'icon',
                        
                    ),
                    array(
                        'id' => 'footer_icon_link',
                        'title' => 'Footer Icon link',
                        'type' => 'text',
                        
                    )
                )
            )
        )


    ));

  


}