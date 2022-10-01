<?php

/**
 * Template Name: Home
 * 
 */


   get_header();

?>
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">

            <?php 
               $args = array(
                  'post_type' => 'slider',
                  'posts_per_page' => 3
                  
                  
               );
               $query = new WP_Query($args);
               while($query-> have_posts()){

                  $query-> the_post();

               $sub_heading = get_field('sub_heading');
               $btn_text = get_field('btn_text');
               $btn_link = get_field('btn_link');

            ?>



            <div class="single-slide" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">

                            <?php
                                    if($sub_heading){
                                      ?>
                              <h4><?php echo $sub_heading; ?></h4>
                              <?php 
                                    }  
                              
                              ?>


                              <h2><?php the_title(); ?></h2>
                              <?php  the_content(); ?>

                                 <?php
                                    if($btn_text){
                                      ?>
                                      <a href="<?php echo $btn_link; ?>" class="box-btn"><?php echo $btn_text; ?><i class="fa fa-angle-double-right"></i></a>
                                      <?php
                                    
                                    }
                                 ?>

                              


                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           <?php 
           
         }

         wp_reset_postdata();
         ?>
            
         </div>
      </section>
      <!-- Slider Area Start -->

      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
         
            <div class="row section-title">
            <?php
               
               $options = get_option('astraa_options');
               
               $main_about_sub_title = $options['main_about_sub_title'];
               $main_about_title = $options['main_about_title'];
               $main_about_desc = $options['main_about_desc'];
               
               if($main_about_title){ 
               ?>
               <div class="col-md-6 text-right">
             
                  <h3><span><?php echo $main_about_sub_title ;?></span> <?php echo $main_about_title ;?></h3>


               </div>
               <div class="col-md-6">

               <?php echo $main_about_desc ;?>

               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                     <?php
                        $about_title = $options['about_title'];
                        $about_desc = $options['about_desc'];
                        $abou_btn_title = $options['abou_btn_title'];
                        $about_btn_link = $options['about_btn_link'];
                     
                     
                     ?>
                        <h4><?php echo $about_title; ?></h4>
                     </div>
                     <p><?php echo $about_desc ; ?> </p>
                     
                     <a href="<?php echo $about_btn_link; ?>" class="box-btn"><?php echo  $abou_btn_title; ?> <i class="fa fa-angle-double-right"></i></a>


                  </div>
               </div>
               <div class="col-md-5">
                  <?php 
                     $about_feature_groups = $options['about_feature_group'];
                      
                     foreach($about_feature_groups as $about_feature_group){
                     ?>
                     <div class="single_about">
                     <i class="<?php echo $about_feature_group['feature_icons']; ?>"></i>
                     <h4><?php echo $about_feature_group['feature_title']; ?></h4>
                     <p><?php echo $about_feature_group['feature_desc']; ?> </p>
                  </div>

                  <?php
                     }
                  
                  }
                  ?>
               

               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <?php 
                     $faq_sections = $options['faw_main_titile'];

                     ?>
                        <h4><?php echo $faq_sections;  ?></h4>
                     </div>
                     <div class="accordion" id="accordionExample">
                        <?php 
                           $faq_section_lists = $options['faq_list_section'];
                           if($faq_section_lists){
                              $i = 0;
                          
                           foreach( $faq_section_lists as  $faq_section_list){
                              $i++;
                        ?>
                        <div class="card">
                           <div class="card-header" id="heading-<?php echo $i; ?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                 <?php echo $faq_section_list['faq_title']; ?>
                                 </button>
                              </h5>
                           </div>
                           <div id="collapse-<?php echo $i; ?>" class="collapse <?php
                              if($i == 1){
                                 echo 'show';
                              }
                           
                           ?>" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordionExample">
                              <div class="card-body">
                              <?php echo $faq_section_list['faq_desc']; ?>
                              </div>
                           </div>
                        </div>
               
                  <?php
                   }
               } 
                  ?>



                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                       <?php 
                        $skill_main_titile = $options['skill_main_titile'];
                       ?>
                     
                        <h4><?php echo $skill_main_titile;  ?></h4>
                     </div>
                    
                     <div class="single-skill">

                     <?php 
                        $skill_list_sections = $options['skill_list_section'];
                        foreach($skill_list_sections as $skill_list_section){

                       ?>
                        <h4><?php echo $skill_list_section['skill_title'] ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $skill_list_section['skill_number']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill_list_section['skill_number']; ?>%</div>

                        <?php
                    } 
                     ?>
                     </div>
                     
                  

                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->

      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">

               <?php 
               $options = get_option('astraa_options');
               $main_service_sub_title = $options['main_service_sub_title'];
               $main_service_title = $options['main_service_title'];
               $main_service_desc = $options['main_service_desc'];
               
               ?>
                  <h3><span><?php echo $main_service_sub_title ;  ?></span> <?php echo $main_service_title;  ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $main_service_desc;  ?></p>
               </div>
            </div>
            <div class="row">
            <?php
               $args = array(
                  'post_type' => 'service',
                     'posts_per_page' => 6
               );
               $query = new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();
                  $service_icon = get_field('service_icon');
               
            ?>


               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php echo $service_icon; ?>"></i>
                     <h4><?php the_title(); ?> </h4>
                     <?php the_content(); ?>
                  </div>
               </div>
               
               <?php 
               
            };
            wp_reset_postdata();
               
               ?>



            </div>
         </div>
      </section>
      <!-- Services Area End -->
      

      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">

               <?php
                  $counters = $options['counter_group'];
                if($counters){ 
                  foreach($counters as $counter){ 

               ?>

               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php echo $counter['counter_icon']; ?>"></i><span class="counter"><?php echo $counter['counter_number']; ?></span><?php echo $counter['counter_title']; ?></span></h4>
                  </div>
               </div>
                     <?php 
                        }
                     }
                     ?>




            </div>
         </div>
      </section>
      <!-- Counter Area End -->


      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                     <?php
                     $options = get_option('astraa_options');

                     $main_team_sub_title = $options['main_team_sub_title'];
                     $main_team_title = $options['main_team_title'];
                     $main_team_desc = $options['main_team_desc'];
                     
                     ?>
               
                  <h3><span><?php echo $main_team_sub_title ; ?></span> <?php echo $main_team_title ; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $main_team_desc ; ?></p>
               </div>
            </div>
            <div class="row">

            <?php
               $args = array(
                  'post_type' => 'team',
                  'posts_per_page' => 3
               );
               $query = new WP_Query($args);
               while($query -> have_posts()){
                  $query -> the_post();
                  
                  $team_fb_link = get_field('team_fb_link');
                  $team_tw_link = get_field('team_tw_link');
                  $team_linkend_link = get_field('team_linkend_link');
                  $team_google_link = get_field('team_google_link');

            ?>
               <div class="col-md-4">
                  <div class="single-team">
                     <?php the_post_thumbnail(); ?>
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title(); ?><span><?php the_content(); ?></span></h4>
                           <ul>
                           <?php if($team_fb_link){
                              
                              ?>
                               <li><a href="<?php echo $team_fb_link; ?>"><i class="fa fa-facebook"></i></a></li>
                              <?php


                           } 
                           
                           
                           
                           ?>
                            <?php if($team_tw_link){
                            ?>
                             <li><a href="<?php echo $team_tw_link; ?>"><i class="fa fa-linkedin"></i></a></li>

                            <?php
                           }
                           ?>
                            <?php if($team_linkend_link){
                             
                             
                             ?>

                              <li><a href="<?php echo $team_linkend_link; ?>"><i class="fa fa-google-plus"></i></a></li>

                             <?php
                           } 
                           
                           
                           
                           ?>
                            <?php if($team_google_link){
                             ?>
                             <li><a href="<?php echo $team_google_link; ?>"><i class="fa fa-google-plus"></i></a></li>
                             
                             <?php
                           } 
                           
                           
                           
                           ?>
                             

                             
                              
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                };
                wp_reset_postdata( );
               
               ?>

            </div>
         </div>
      </section>
      <!-- Team Area End -->
     


      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
               <?php
                     $options = get_option('astraa_options');
                     
                     $main_testimonial_sub_title = $options['main_testimonial_sub_title'];
                     $main_testimonial_title = $options['main_testimonial_title'];
                     $main_testimonial_desc = $options['main_testimonial_desc'];
                     
                     ?>

                  <h3><span><?php echo $main_testimonial_sub_title  ;?></span><?php echo $main_testimonial_title  ;?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $main_testimonial_desc ;?> </p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">
                  <?php
                     $args = array(
                           'post_type' => 'testimonial',
                           'posts_per_page' => 3
                     );
                     $query = new WP_Query($args);
                     while($query -> have_posts()){
                        $query -> the_post();
                     $designation = get_field('designation');
                  
                  ?>

                     <div class="single-testimonial">
                        <div class="testi-img">
                          <?php 
                           echo the_post_thumbnail();
                          ?>
                        </div>
                     <?php  the_content(); ?>
                        <h4><?php the_title(); ?> <span><?php echo $designation ; ?></span></h4>
                     </div>


                     <?php 
                     };
                     wp_reset_postdata();
                     
                     ?>


                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->
      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">

               <?php
                     $options = get_option('astraa_options');
                     
                     $main_lates_sub_title = $options['main_lates_sub_title'];
                     $main_lates_title = $options['main_lates_title'];
                     $main_lates_desc = $options['main_lates_desc'];
                     
                     ?>
                  <h3><span> <?php echo $main_lates_sub_title  ;?></span> <?php echo $main_lates_title  ;?> </h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $main_lates_desc  ;?></p>
               </div>
            </div>
            <div class="row">

                        <?php
                        
                           $argc = array(
                              'post_type' => 'post',
                              'posts_per_page' => 3

                           );
                           $query = new WP_Query($argc);
                           while($query -> have_posts()){
                              $query -> the_post();
                          
                        ?>


               <div class="col-md-4">
                  <div class="single-blog">
                     
                  <?php  the_post_thumbnail(); ?>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><?php the_category(' , '); ?></li>
                              <li><a href="#"><?php echo  get_the_date(); ?></a></li>
                              <li><a href="#"><?php echo  get_the_author(); ?></a></li>
                           </ul>
                        </div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
             
            <?php
                };
                wp_reset_postdata();
            
            ?>

            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
 <?php  get_footer(); ?>