<div class="work__modal">
    <?php if(have_posts()) :?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="modal fade newModal1-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="newModal1<?php the_ID(); ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <div id="carousel__post--<?php the_ID(); ?>" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel__post--<?php the_ID(); ?>" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel__post--<?php the_ID(); ?>" data-slide-to="1"></li>
                                <li data-target="#carousel__post--<?php the_ID(); ?>" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php 
                                            $image_1 = get_field('image1');
                                            $image_2 = get_field('image2');
                                            $image_3 = get_field('image3');
                                        ?>
                                <div class="carousel-item active">
                                    <?php if( !empty($image_1) ): ?>
                                    <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" class="cards__carousel--img">
                                    <?php endif; ?>
                                </div>
                                <div class="carousel-item">
                                    <?php if( !empty($image_2) ): ?>
                                    <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" class="cards__carousel--img">
                                    <?php endif; ?>
                                </div>
                                <div class="carousel-item">
                                    <?php if( !empty($image_3) ): ?>
                                    <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" class="cards__carousel--img">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel__post--<?php the_ID(); ?>" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                            <a class="carousel-control-next" href="#carousel__post--<?php the_ID(); ?>" role="button" data-slide="next">
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

        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
