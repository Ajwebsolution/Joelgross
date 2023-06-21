<?php 

get_header('ref');?>



    
<!-- Section - Referenzen -->
<section id="section04" class="wow fadeInUp section fullheight bg-orange dark padding-v-100" data-header-change="true">
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
               <h1>
				    <?php the_field('heading_3');?>
					</h1>
                </div>
            </div>
            <div class="masonry-grid">  <!-- <div class="masonry-grid no-padding"> -->
            <!-- Masonry Sizer -->
            <div class="masonry-sizer"></div>    
            <!-- Masonry Element -->
            <?php 
							if(have_rows( 'image_with_text') ):
                                while(have_rows( 'image_with_text') ): 
                                   the_row();
                                      
                                      $image = get_sub_field('image');
                                      $subtitle = get_sub_field('subtitle');
                                      $title = get_sub_field('title');
                                      $button_r = get_sub_field('button_3');
								  ?>
            <div class="masonry-item wow fadeInDown">
                <div class="gallery-item">
                    <div class="item-photo"><a href="projects/innen.html" data-target="ajax-modal"><img src="<?php echo $image;?>" alt="" /></a></div>
                    <div class="item-hover bg-dark dark">
<!--                         <div class="item-hover-content">
                            <h1><?php echo $subtitle;?> <strong><?php echo $title;?></strong> </h1>
							
                            <a href="<?php echo $button_r['url'];?>" data-target="ajax-modal" class="btn btn-orange"><span><?php echo $button_r['title'];?></span></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <?php endwhile;
				                       endif; ?>
        </div>
		<div class="back_home">
		<h3><a href="<?php echo site_url();?>" >Zurück</a></h3>
	  </div>
	</div>
    </section>
    <!-- Section - Contact / End -->

    <!-- Section - Contact -->
    <section id="section06" class="wow fadeInUp section fullheight bg-blue-dark dark padding-v-100" data-header-change="true">
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
                    <?php the_field('footer_top_content');?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated" data-animation="bounceIn" data-toggle="modal" data-target="#mapModal"><i class="fa fa-map-marker"></i></a>
                    <address>
                       <?php the_field('address','5');?>
                    </address>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated" data-animation="bounceIn" data-animation-delay="100" data-toggle="modal" data-target="#contactModal"><i class="fa fa-envelope"></i></a>
                
                    <div class="margin-b-30">
                        <strong>E-mail:</strong><br>
                        <?php 
                                        $email = get_field('email','5'); 
                                            ?>
                        <a href="<?php echo $email['url'] ; ?>" class="link-default"> <?php echo $email['title'] ; ?></a>
                    </div>
                
                </div>
                <div class="col-md-3 col-sm-6">
                    <span class="icon icon-sm icon-square icon-blue-dark"><i class="fa fa-phone"></i></span>
                    <div class="margin-b-30">
                        <strong>Tel.</strong><br>
                        <?php 
                                        $tel = get_field('tel','5'); 
                                            ?>
                        <a href="<?php echo $tel['url'] ; ?>" class="link-default"><?php echo $tel['url'] ; ?></a>
                        
                    </div>
		
                </div>
				
        </div>
	
		</div>
    </section>
	
    <!-- Section - Contact / End -->
<?php get_footer('ref');?>