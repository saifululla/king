<?php

/**
 * Template Name: Contact Us
 * 
 */
   get_header();

?>
      <!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <?php get_template_part('inc/breadcumb'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row text-center">
                     <?php 
                        $options = get_option('astraa_options');

                      $contact_groups = $options['contact_group_title'];
                        if($contact_groups){
                     foreach( $contact_groups as  $contact_group){
                        
                     

                     ?>

                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo $contact_group['contact_info_icon']; ?>"></i>
                           <h4><?php echo $contact_group['contact_info_title']; ?> <span><?php echo $contact_group['contact_info_address']; ?></span></h4>
                        </div>
                     </div>
                    
                        <?php
                        }

                     }
                        ?>

                  </div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="contact-form">

                          <?php
                           echo do_shortcode('[contact-form-7 id="171" title="Contact form 2"]');
                          
                          ?>

                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="google-map">

                        <?php 
                              $contact_maps = $options['contact_map'];

                              // echo '<pre>';
                              // var_dump($contact_maps);
                              // echo '</pre>';
                        ?>
                            <iframe src="https://maps.google.com/maps?q=<?php echo $contact_maps['latitude'];?>, <?php echo $contact_maps['longitude'];?>&z=15&output=embed"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->
 <?php  get_footer() ; ?>