
   <?php
       $options = get_option('astraa_options');

       $cpa_switcher = $options['btn_switcher'];
       if($cpa_switcher){

       
   
   
   ?>  
 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <?php
               $cpa_title = $options['cpa_title'];
               $cpa_sub_title = $options['cpa_sub_title'];
               $cpa_btn_text = $options['cpa_btn_text'];
               $cpa_btn_link = $options['cpa_btn_link'];
               if($cpa_title){
            ?>
            <h4><?php echo  $cpa_title ; ?><span><?php echo $cpa_sub_title ; ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php echo $cpa_btn_link ;?>" class="box-btn"><?php echo $cpa_btn_text; ?> <i class="fa fa-angle-double-right"></i></a>
         </div>
      <?php  } ?>
      </div>
   </div>
</section>


<?php 
}
?>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">

            <?php dynamic_sidebar('footer1'); ?>

         </div>
         <div class="col-lg-2 col-md-6">

         <?php dynamic_sidebar('footer2'); ?>

         </div>
         <div class="col-lg-4 col-md-6">

         <?php dynamic_sidebar('footer3'); ?>


         </div>
         <div class="col-lg-3 col-md-6">

         <?php dynamic_sidebar('footer4'); ?>


         </div>
      </div>
   <?php
   
   $footer_switcher = $options['footer_switcher'];
   if($footer_switcher){
      
      ?>
      <div class="row copyright">
         <div class="col-md-6">
   <?php
    

      $footer_social_icons =  $options['footer_social_icon'];

   
   ?>

            <p><?php echo $options['footer_copy']; ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
            <?php

               if($footer_social_icons){  

                  foreach($footer_social_icons as $footer_social_icon){

                 
            ?>

               <li><a href="<?php echo $footer_social_icon['footer_icon_link'];  ?>"><i class="<?php echo esc_attr($footer_social_icon['footer_socialicon']);  ?>"></i></a></li>


               <?php 
               }
                   }
               ?>
            </ul>
            
         </div>
      </div>
      <?php
             }
            ?>
   </div>
</footer>
<!-- Footer Area End -->

<?php  wp_footer(); ?>
</body>
</html>