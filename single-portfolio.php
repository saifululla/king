<?php get_header(); ?>
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

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
        <div class="col-xl-8">
               <?php
                  while(have_posts()){
                     the_post();
                  ?>
                  <h2><?php the_title();?></h2>
                  <?php the_post_thumbnail();?>
                  <?php the_content();?>
               <?php
                  };
               ?>
                
            </div>
            <div class="col-xl-4">

                <div class="portfolio-sidebar">

                        <?php 
                           $technology_lists = get_field('technology');
                           if( $technology_lists){
                        ?>
                           <h4>Technology Used</h4>
                           
                           <ul>
                              <?php 
                              foreach($technology_lists as $technology_list){

                           
                              
                              ?>
                                 <li><i class="fa fa-arrow-right"></i> <?php  echo $technology_list ;?></li>

                                 <?php
                                 } 
                                 ?>
                           </ul>

                           <?php 
                              }
                           ?>
               </div>

                   <div class="portfolio-sidebar">
                   <?php 
                           $technology_lists = get_field('technology');
                           if( $technology_lists){
                        ?>
                           
                           <h4>project features</h4>
                           <ul>
                              <?php 
                              foreach($technology_lists as $technology_list){

                           
                              
                              ?>
                                 <li><i class="fa fa-arrow-right"></i> <?php  echo $technology_list ;?></li>

                                 <?php
                                 } 
                                 ?>
                           </ul>

                           <?php 
                              }
                           ?>
                  </div>
            </div>
        </div>
    </div>
</section>
 <?php get_footer(); ?>