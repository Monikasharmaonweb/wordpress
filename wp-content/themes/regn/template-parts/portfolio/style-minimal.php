<div class="cl-portfolio-item <?php echo esc_attr( codeless_extra_classes( 'portfolio_item' ) ) ?>" <?php echo codeless_complex_esc( codeless_extra_attr( 'portfolio_item' ) ) ?>>
    <div class="cl-portfolio-item__wrapper">
        <div class="cl-portfolio-item__media">
                <?php get_template_part( 'template-parts/portfolio/parts/thumbnail' ) ?>
                <div class="cl-portfolio-item__overlay"></div>
        </div>
        <div class="cl-portfolio-item__content">
            <div class="cl-portfolio-item__content-text">
                <h4><?php echo get_the_title() ?></h4>
                <div class="cl-portfolio-item__category">
                    <?php echo get_the_term_list( get_the_ID(), 'portfolio_entries', '', ', ', '' ) ?>
                </div>
            </div>
            <?php if( codeless_get_mod( 'portfolio_image_gallery', 'no' ) == 'yes' ){ ?>
                <a class="cl-portfolio-item__plus" href="<?php echo esc_url( get_the_post_thumbnail_url(get_the_ID(),'full') ) ?>" data-fancybox="gallery"></a>
            
            <?php }else{ ?>
                <a href="<?php echo esc_url( codeless_portfolio_item_permalink() ) ?>" class="cl-portfolio-item__plus"></a>
            <?php } ?>
        </div>
    </div>
</div>