<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
    <div class="cards d-flex flex-row justify-content-around flex-wrap">
        <?php if(have_posts()) :?>
        <?php while (have_posts()) : the_post(); ?>
        <button id="post-<?php the_ID(); ?>" <?php post_class( 'cards__item card text-center mb-5' ); ?>  type="button" data-toggle="modal" data-target=".newModal1-<?php the_ID(); ?>">
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

        <?php endwhile; ?>
        <?php else: ?>
        <h3> Nie ma żadnego postu</h3>
        <?php endif; ?>
    </div>
</div>
