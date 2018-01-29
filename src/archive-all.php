<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
    <div class="cards d-flex flex-row justify-content-around flex-wrap">
        <?php if(have_posts()) :?>
        <?php while (have_posts()) : the_post(); ?>

        <button id="post-<?php the_ID(); ?>" <?php post_class( 'cards__item card text-center mb-5' ); ?>  type="button" data-toggle="modal" data-target=".newModal1">
            <div class="cards__item--div">
                <p class="cards__item--image card-img-top img-fluid">
                    <img src="<?php echo get_field('image1')['url']; ?>" alt="<?php echo get_field('image1'); ?>">
                </p>
                <div class="cards__item--text card-block mt-4">
                    <h5 class="card-title text-primary font-weight-bold"><?php the_title(); ?></h5>
                    <p class="cards__item--text text-14px text-gray-500 card-text font-weight-light"><?php  echo get_the_excerpt(); ?></p>
                </div>
            </div>
        </button>
        <div class="work__modal">
            <div class="modal fade newModal1" tabindex="-1" role="dialog" aria-labelledby="newModal1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
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

                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php else: ?>
        <h3> Nie ma żadnego postu</h3>
        <?php endif; ?>
    </div>
</div>
