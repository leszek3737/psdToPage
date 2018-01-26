<div class="tab-pane fade" id="pills-branding" role="tabpanel" aria-labelledby="pills-branding-tab">
    <div class="cards d-flex flex-row justify-content-around flex-wrap">
        <?php if(have_posts()) :?>
        <?php while (have_posts()) : the_post(); ?>

        <button id="post-<?php the_ID(); ?>" <?php post_class( 'cards__item card text-center mb-5' ); ?>  type="button" data-toggle="modal" data-target=".newModal1">
            <div>
                <p class="cards__item--image card-img-top img-fluid"><?php the_post_thumbnail(); ?></p>
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
