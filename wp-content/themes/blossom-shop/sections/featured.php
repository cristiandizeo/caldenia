<?php
/**
 * Feature Section
 * 
 * @package Blossom_Shop
 */
$ed_featured         = get_theme_mod( 'ed_featured_section', false );
$featured_type       = get_theme_mod( 'featured_type', 'feat_page' );
$featured_page_one   = get_theme_mod( 'featured_content_one' );
$featured_page_two   = get_theme_mod( 'featured_content_two' );
$featured_page_three = get_theme_mod( 'featured_content_three' );

$featured_cat_one   = get_theme_mod( 'cat_featured_one' );
$featured_cat_two   = get_theme_mod( 'cat_featured_two' );
$featured_cat_three = get_theme_mod( 'cat_featured_three' );

$image_size = '';
$ed_crop_all    = get_theme_mod( 'ed_crop_all', false );
$image_size = ( $ed_crop_all ) ? 'full' : 'blossom-shop-featured';

if( $featured_type == 'feat_page' ){
    $featured_pages      = array( $featured_page_one, $featured_page_two, $featured_page_three );
    $featured_pages      = array_diff( array_unique( $featured_pages), array( '' ) );
    if( $featured_pages ){
        $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post__in'       => $featured_pages,
            'orderby'        => 'post__in'   
        );
    }
}elseif( $featured_type == 'feat_cat' ){
    $featured_cats        = array( $featured_cat_one, $featured_cat_two, $featured_cat_three );
}

$qry = new WP_Query( $args ); 
if( $ed_featured ){ ?>
    <section id="featured_section" class="featured-section style-one <?php echo esc_attr( $featured_type ); ?>">
        <div class="container">             
            <?php if( $featured_type == 'feat_page' && $qry->have_posts() ){ ?>
                <?php while( $qry->have_posts() ){ $qry->the_post(); ?>
                    <div class="section-block">
                        <figure class="block-img">
                            <?php 
                                if( has_post_thumbnail() ){
                                    the_post_thumbnail( $image_size, array( 'itemprop' => 'image' ) );
                                }else{
                                    blossom_shop_get_fallback_svg( $image_size );
                                }
                            ?>                                   
                        <div class="block-content">
                            <?php the_title( '<h4 class="block-title"><a href="'. esc_url( get_permalink() ) .'">', '</a></h4>' ); ?>
                        </div>
                        </figure>
                    </div>
                <?php } wp_reset_postdata();                                    
            ?>
            <?php }elseif( blossom_shop_is_woocommerce_activated() && $featured_type == 'feat_cat' && $featured_cats ){ ?>
                <?php foreach( $featured_cats as $featured_cat ){ 
                    if( $featured_cat ){ ?>
                        <div class="section-block">
                            <figure class="block-img">
                                <?php 
                                    if( get_term_meta( absint( $featured_cat ), 'thumbnail_id', true ) ){
                                        $image_id = get_term_meta( absint( $featured_cat ), 'thumbnail_id', true );
                                        echo wp_get_attachment_image( $image_id, $image_size );
                                    }else{
                                        blossom_shop_get_fallback_svg( $image_size );
                                    }
                                ?>                                  
                            </figure>
                            <div class="block-content">
                                <?php 
                                $term_meta = get_term_by( 'id', $featured_cat, 'product_cat' );
                                if( $term_meta ) echo '<h4 class="block-title"><a href="'. esc_url( get_term_link( absint( $featured_cat ), 'product_cat' ) ) .'">' . esc_html( $term_meta->name ) . '</a></h4>'; ?>
                            </div>
                        </div>
                    <?php }
                }
            } ?>
        </div>
        <br>
        <div class="container">             
                                                    <div class="section-block">
                            <figure class="block-img">
                                <img width="640" height="854" src="http://localhost:3000/wp-content/uploads/2024/11/bombillas-caldenia.jpg" class="attachment-full size-full" alt="MATE CAMIONERO caldenia" decoding="async" srcset="http://localhost:3000/wp-content/uploads/2024/11/bombillas-caldenia.jpg 640w, http://localhost:3000/wp-content/uploads/2024/11/bombillas-caldenia-225x300.jpeg 225w, http://localhost:3000/wp-content/uploads/2024/11/bombillas-caldenia-600x801.jpeg 600w" sizes="(max-width: 640px) 100vw, 640px">                                  
                            </figure>
                            <div class="block-content">
                                <h4 class="block-title"><a href="http://localhost:3000/?product_cat=bombillas&amp;customize_changeset_uuid=03d3d65e-b1bf-49ee-bfa0-2dcae83a8527&amp;customize_autosaved=on&amp;customize_messenger_channel=preview-0">Bombillas</a></h4>                            </div>
                        </div>
                                            <div class="section-block">
                            <figure class="block-img">
                                <img width="760" height="506" src="http://localhost:3000/wp-content/uploads/2024/11/bolso-matero-caldenia.jpg" class="attachment-full size-full" alt="yerbas caldenia" decoding="async" srcset="http://localhost:3000/wp-content/uploads/2024/11/bolso-matero-caldenia.jpg 760w, http://localhost:3000/wp-content/uploads/2024/11/bolso-matero-caldenia-300x200.jpg 300w, http://localhost:3000/wp-content/uploads/2024/11/bolso-matero-caldenia-600x399.jpg 600w" sizes="(max-width: 760px) 100vw, 760px">                                  
                            </figure>
                            <div class="block-content">
                                <h4 class="block-title"><a href="http://localhost:3000/?product_cat=bolsos&amp;customize_changeset_uuid=03d3d65e-b1bf-49ee-bfa0-2dcae83a8527&amp;customize_autosaved=on&amp;customize_messenger_channel=preview-0">Bolsos</a></h4>                            </div>
                        </div>
                                            <div class="section-block">
                            <figure class="block-img">
                                <img width="683" height="1024" src="http://localhost:3000/wp-content/uploads/2024/11/almohadon-matero-caldenia.jpg" class="attachment-full size-full" alt="termos caldenia" decoding="async" srcset="http://localhost:3000/wp-content/uploads/2024/11/almohadon-matero-caldenia.jpg 683w, http://localhost:3000/wp-content/uploads/2024/11/almohadon-matero-caldenia-200x300.jpg 200w, http://localhost:3000/wp-content/uploads/2024/11/almohadon-matero-caldenia-540x810.jpg 540w, http://localhost:3000/wp-content/uploads/2024/11/almohadon-matero-caldenia-600x900.jpg 600w" sizes="(max-width: 683px) 100vw, 683px">                                  
                            </figure>
                            <div class="block-content">
                                <h4 class="block-title"><a href="http://localhost:3000/?product_cat=otros&amp;customize_changeset_uuid=03d3d65e-b1bf-49ee-bfa0-2dcae83a8527&amp;customize_autosaved=on&amp;customize_messenger_channel=preview-0">Otros</a></h4>                            </div>
                        </div>
                            </div>
    </section>
<?php }