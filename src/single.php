<div class="modal-content">
    <div class="modal-header">
        <div class="modal-title">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php 
                        $image_1 = get_field('image1');
                        $image_2 = get_field('image2');
                        $image_3 = get_field('image3');
                    ?>
                    <div class="carousel-item active">
                        <?php if( !empty($image_1) ): ?>
                        <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="carousel-item">
                        <?php if( !empty($image_2) ): ?>
                        <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="carousel-item">
                        <?php if( !empty($image_3) ): ?>
                        <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
            </div>
        </div>
        <button type="button" class="work__modal--close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
    </div>
    <div class="modal-body">
        <h3>
            <?php the_title(); ?>
        </h3>
        <p>
            <?php the_content(); ?>
        </p>
    </div>


</div>
