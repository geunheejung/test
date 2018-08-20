<div class="col-sm-4 col-xs-12 masonry__item" data-masonry-filter="<?php echo esc_attr(ebor_the_terms('portfolio_category', ',', 'name')); ?>">
    <div class="project-thumb hover-element height-40">
        <a href="<?php the_permalink(); ?>">
            <div class="hover-element__initial">
                <div class="background-image-holder">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            </div>
            <div class="hover-element__reveal" data-overlay="9">
                <div class="project-thumb__title">
                    <?php the_title('<h5>', '</h5><span>'. ebor_the_terms('portfolio_category', ', ', 'name') .'</span>'); ?>
                </div>
            </div>
        </a>
    </div>
</div>