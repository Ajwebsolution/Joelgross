<footer id="footer" class="wow fadeInUp bg-blue-dark padding-v-40 dark text-center">
        <div class="section-content copyright margin-b-20">
            <strong>joelgross</strong>© <?php echo date('Y'); ?>- All Rights Reserved
        </div>
    </footer>

</div>
<!-- Page Wrapper / End -->

<!-- Mobile Navigation -->


<!-- Ajax Wrapper -->
<div id="ajax-modal"></div>
<!-- Ajax Loader -->
<div id="ajax-loader"><i class="fa fa-circle-o-notch fa-spin"></i></div>

<!-- Modal - Video -->
<div class="modal fade modal-green" id="videoModalGreen" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog" role="document">
    <iframe height="400" src="https://www.youtube.com/embed/nrJtHemSPW4" style="width: 100%" allowfullscreen></iframe>
  </div>
</div>

<!-- Modal - Video -->
<div class="modal fade modal-blue-dark" id="videoModal" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog" role="document">
    <iframe height="400" src="https://www.youtube.com/embed/nrJtHemSPW4" style="width: 100%" allowfullscreen></iframe>
  </div>
</div>

<!-- Modal - Contact Form -->
<div class="modal fade modal-blue-dark" id="contactModal" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">Kontaktieren <strong>Sie</strong> uns !</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
      <?php echo do_shortcode(get_field('contact_form'));?>
      </div>
    </div>
  </div>
</div>

<!-- Modal - Map -->
<div class="modal fade modal-blue-dark" id="mapModal" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">schliessen</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">Wo <strong>wir</strong> sind!</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <?php the_field('google_map');?>
      </div>
    </div>
  </div>
</div>

<!-- Scroll Progress -->
<div id="scroll-progress" class="bg-white"></div>
<span id="scroll-top"><a href="#section01" class="back-to-top"><i class="fa fa-chevron-up"></i></a></span>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/core.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<?php wp_footer(); ?>

</body>

</html>
