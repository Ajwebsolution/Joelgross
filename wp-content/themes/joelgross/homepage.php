<?php 
/* Template Name:Homepage Old*/
get_header();?>



<!-- Page Wrapper -->
<div id="page-wrapper" data-scroll-easing="easeOutBack">
    <section id="section01" class="section fullheight bg-blue-dark dark padding-v-100">
        <div class="bg-slideshow slideshow" data-auto-play="94000">
            <div class="bg-image animated zooming infinite"><img src="<?php the_field('image');?>" alt=""></div>
        </div>
        <div class="container v-center wow fadeInUp">
            <?php the_field('text');?>
        </div>
    </section>
    <!-- Section - Home / End -->
    <!-- Section - Double -->
    <section id="section02" class="section section-double right fullheight bg-orange dark" data-header-change="true">
        <div class="col-md-6 image wow fadeInRight">
            <div class="bg-image"><img src="<?php the_field('right_side_image');?>" alt=""></div>
        </div>
        <div class="col-md-6 content margin-b-50 wow fadeInLeft">
            <p><?php the_field('content');?></p>
        </div>
    </section>
    <!-- Section - Double / End -->

    <!-- Section - Double -->
    <section id="section03" class="wow fadeInUp section section-double left fullheight bg-green dark"
        data-header-change="true">
        <div class="col-md-6 image wow fadeInLeft">
            <div class="bg-image"><img src="<?php the_field('left_image');?>" alt=""></div>
        </div>
        <div class="col-md-6 content margin-b-50 wow fadeInRight">

            <?php the_field('descriptions');?>
            <?php 
                                        $online_anfrage = get_field('button'); 
                                            ?>
            <span data-target="local-scroll"><a href="<?php echo $online_anfrage['url'] ; ?>" target="_blank"
                    class="btn btn-default"><span><?php echo $online_anfrage['title'] ; ?></span></a></span>
        </div>
    </section>
    <!-- Section - Double / End -->

    <!-- Section - Referenzen -->
    <section id="section04" class="wow fadeInUp section fullheight bg-orange dark padding-v-100"
        data-header-change="true">
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
                    <?php the_field('heading_3');?>
                </div>
            </div>
            <div class="masonry-grid">
                <!-- <div class="masonry-grid no-padding"> -->
                <!-- Masonry Sizer -->
                <div class="masonry-sizer"></div>
                <!-- Masonry Element -->
                <?php
                             $args = array(
                               'post_type'      => 'references',
                               'posts_per_page' => 8,
                               'orderby'=>'date',
                               'order'=>'Asc',
            
                              );
           
                                    $loop = new WP_Query($args);
                             while ($loop->have_posts()) {
                                  $loop->the_post();
                              $imagepath = wp_get_attachment_image_src(
                                   get_post_thumbnail_id(),
                                   'large'
                                  );
            
                                      ?>
                <div class="masonry-item wow fadeInDown">
                    <div class="gallery-item">
                        <div class="item-photo"><a href="<?php the_permalink(); ?>"><img
                                    src="<?php the_post_thumbnail_url(); ?>" alt="" /></a></div>
                        <div class="item-hover bg-dark dark">
                            <div class="item-hover-content">
                                <h3><?php echo wp_trim_words(get_the_title(), 5); ?> <strong></strong> </h3>

                                <a href="<?php the_permalink(); ?>" target="_blank" class="btn btn-orange"
                                    target><span>Referenzen anschauen</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } wp_reset_postdata();?>
            </div>
        </div>
    </section>
    <!-- Section - Contact / End -->

    <!-- Section - Referenzen -->
    <ul class="thumbnails-x">

<?php 
 $labels = new WP_Query(array(
 'post_type' => 'references', 
 'posts_per_page' => 1000
  )); 
  while ( $labels->have_posts() ) : 
  $labels->the_post();
  ?>

 <li class="yy">

  <?php echo '<div class="thumbnail">';?>
     <a href="<?php echo get_permalink(); ?>">
  <?php the_post_thumbnail('');?></a>

  **<button type="button" data-toggle="modal" 
  data-target="#myModal-<? the_ID(); ?>"><?php the_title();?></button>**

  </li>
  <a href="#myModal-<? the_ID(); ?>" data-toggle="modal" id="clickme">
  <?php the_title();?>
</a>

 <div id="myModal-<? the_ID(); ?>" class="modal hide fade" 
 tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
  aria-hidden="true">
  <div class="modal-header">
    <h3 id="myModalLabel">
      <?php the_title();?>
    </h3>
    <p>
      <?php the_content();?>
    </p>
  </div>
  <div class="modal-body">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="modal-footer">
    <button type="button" class="close" data-dismiss="modal" 
   aria-hidden="true">×</button>
  </div>
</div>


 <?php endwhile; ?>
 <?php wp_reset_query(); ?>

 </ul>
    <!-- Section - Contact / End -->

    <!-- Section - Team -->
    <section id="section05" class="wow fadeInUp section fullheight bg-red dark padding-v-100" data-header-change="true">
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
                    <?php the_field('heading_team');?>
                </div>
            </div>
            <div class="row text-center">
                <!-- Member -->
                <?php 
							if(have_rows( 'team_members') ):
                                while(have_rows( 'team_members') ): 
                                   the_row();
                                      
                                      $member_image = get_sub_field('member_image');
                                      $name = get_sub_field('name');
                                      $designation = get_sub_field('designation');
                                      
								  ?>
                <div class="col-sm-3 col-xs-6">
                    <div class="member-box margin-b-30">
                        <div class="member-photo margin-b-10"><img class="square" src="<?php echo $member_image ; ?>"
                                alt="" /></div>
                        <h6 class="margin-b-0"><?php echo $name ; ?></h6>
                        <strong class="text-sm text-dark"><?php echo $designation ; ?></strong>
                    </div>
                </div>
                <?php endwhile;
				                       endif; ?>


            </div>

        </div>
    </section>
    <!-- Section - Team / End -->

    <!-- Section - team  -->
    <section class="wow fadeInUp section fullheight bg-blue-dark dark padding-v-100">
        <div class="bg-image"><img src="<?php the_field('group_image_of_team');?>" alt=""></div>
    </section>
    <!-- Section - team / End -->

    <!-- Section - Contact -->
    <section id="section06" class="wow fadeInUp section fullheight bg-blue-dark dark padding-v-100"
        data-header-change="true">
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
                    <?php the_field('footer_top_content');?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated"
                        data-animation="bounceIn" data-toggle="modal" data-target="#mapModal"><i
                            class="fa fa-map-marker"></i></a>
                    <address>
                        <?php the_field('address');?>
                    </address>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated"
                        data-animation="bounceIn" data-animation-delay="100" data-toggle="modal"
                        data-target="#contactModal"><i class="fa fa-envelope"></i></a>

                    <div class="margin-b-30">
                        <strong>E-mail:</strong><br>
                        <?php 
                                        $email = get_field('email'); 
                                            ?>
                        <a href="<?php echo $email['url'] ; ?>" class="link-default">
                            <?php echo $email['title'] ; ?></a>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <span class="icon icon-sm icon-square icon-blue-dark"><i class="fa fa-phone"></i></span>
                    <div class="margin-b-30">
                        <strong>Tel.</strong><br>
                        <?php 
                                        $tel = get_field('tel'); 
                                            ?>
                        <a href="<?php echo $tel['url'] ; ?>" class="link-default"><?php echo $tel['url'] ; ?></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section - Contact / End -->
    <?php get_footer();?>