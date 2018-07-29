<div class="facilities-gallery">
        <h3 class="text-center text-uppercase p-4"><span class=" text-lowercase">veja nossas</span>facilidades</h3>
        <?php $gallery = get_field('gallery', $post, false) ;
          if($gallery):
            preg_match('/\[gallery.*ids=.(.*).\]/', $gallery, $ids);
            $images_id = explode(',', $ids[1]);
            foreach($images_id as $id): ?>
              <a href="#" data-target='#image_<?php echo $id; ?>' data-toggle="modal">
                <?php $image_url = wp_get_attachment_image_src($id, 'thumbnail'); ?>
                <img src="<?php echo $image_url[0]; ?>" class='rounded' alt="">
              </a>
              <div class="modal fade" id="image_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelleddby="image_<?php echo $id; ?>" aria-hidden='true'>
                <div class="modal-dialog modal-lg" role='document'>
                  <div class="modal-content">
                    <div class="modal-body">
                    <?php $image_url = wp_get_attachment_image_src($id, 'full'); ?>
                    <img src="<?php echo $image_url[0]; ?>" class='img-fluid' alt="">
                    </div>
                  </div><!--.modal-content-->
                </div><!--.modal-dialog-->
              </div><!--.modal-->
          <?php
            endforeach;

          endif;
          ?>
        
        <div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-labelleddby="image_2" aria-hidden='true'>
          <div class="modal-dialog modal-lg" role='document'>
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_02.jpg" class='img-fluid' alt="">
              </div>
            </div><!--.modal-content-->
          </div><!--.modal-dialog-->
        </div><!--.modal-->
        <div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-labelleddby="image_3" aria-hidden='true'>
          <div class="modal-dialog modal-lg" role='document'>
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_03.jpg" class='img-fluid' alt="">
              </div>
            </div><!--.modal-content-->
          </div><!--.modal-dialog-->
        </div><!--.modal-->
      </div><!--.facilities-gallery-->