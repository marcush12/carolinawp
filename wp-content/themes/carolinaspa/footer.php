<footer class="site-footer pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php
              if(is_active_sidebar('footer_widget_1')):
                dynamic_sidebar('footer_widget_1');
              endif;
            ?>
          </div>
          <div class="col-md-4 pb-4 pb-md-0">
            <?php
              if(is_active_sidebar('footer_widget_2')):
                dynamic_sidebar('footer_widget_2');
              endif;
            ?>

          </div>
          <div class="col-md-4">
            <?php
              if(is_active_sidebar('footer_widget_3')):
                dynamic_sidebar('footer_widget_3');
              endif;
            ?>

            <div class="social-nav">
            <?php
                  $args = array(
                    'container'=> 'nav',
                    'container_class'=> 'socials text-center pt-3',
                    'link_before'=>'<span class="sr-only">',
                    'link_after'=> '</span>',
                    'theme_location'=>'social_menu'   
                  );
                  wp_nav_menu($args);
                
                 ?>
            </div>
          </div>
          <!--permitir width of 100% preenchimento-->
          <div class="w-100"></div>
          <hr class="w-100">
          <p class="copyright text-center w-100"><?php echo get_bloginfo('name') . " " . date('Y');  ?></p>
        </div><!--row-->
      </div><!--.container-->
    </footer>
    <?php wp_footer()  ;?>              
    
  </body>
</html>
