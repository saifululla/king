<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
   </head>
   <body>
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
                  <?php
                     $options = get_option('astraa_options');
                   
                  ?>
                  <?php 
                     if($options['header_email']){
                           ?>
                        <a href=""><i class="fa fa-envelope"></i> <?php echo $options['header_email']; ?></a>

                     <?php
                     }
                  
                  ?>
                   <?php 
                     if($options['header_phone']){
                           ?>
                        <a href=""><i class="fa fa-phone"></i> <?php echo $options['header_phone']; ?></a>

                     <?php
                     }
                  
                  ?>
							
							

						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     <?php 
                        $header_icons = $options['header_icons'];  
                        //  var_dump($header_icons);  
                           if($header_icons){

                          
                         foreach( $header_icons as  $header_icon){
                           ?>
                  
                            <a href="<?php echo $header_icon['icons_link']; ?>">
                            <i class="<?php echo $header_icon['icons']; ?>"> </i>
                            </a>
                           <?php 
                         }
                        }
                     ?>
							
							
						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                           <?php
                             $header_logo = $options['header_logo'];
                             $header_logo_text = $options['header_logo_text'];

                             if($header_logo){
                              ?>
                              <a href="<?php echo site_url(); ?>"><img src="<?php echo $header_logo['url']; ?>" alt=""></a>
                              <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php echo $header_logo_text ; ?></a>
                              <?php
                              }
                             
                              

                           
                           ?>

                     
                    


                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                        <!-- <ul class="navbar-nav ml-auto">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="portfolio.html">Portfolio</a></li>
                           <li><a href="gallery.html">Gallery</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul> -->
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'navbar-nav ml-auto'
                            ));
                            
                            
                            ?>


                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->