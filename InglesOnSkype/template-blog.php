<?php /* Template Name: Blog Template */ ?>
<?php // Aulas | Sobre mim | Contato ?>
<?php get_header(); ?>

<div id="home" class="display section mb-60">
    <div class="col span_2_of_5" id='section-profile-picture'>
        <div class="rounded-img">
            <?php
            $return      = simple_fields_value("sessao_1_home_url_foto", ID_HOME);
            $vImgUrl     = ($return == "") ? get_bloginfo('template_url') . "/images/profile-picture.jpg" : $return;
            ?>

            <img id="WPht4imgimage" alt="" data-type="image" src="<?php echo $vImgUrl; ?>">
        </div>
    </div>
    <div class="col span_3_of_5" id="section-tagline">
        <div id="tag-line-holder">
            <h3 id="tag-line" class="mb-20">Bem vindo,</h3>
            <p id="sub-tag-line" class="mb-25">ao blog do Inglês on Skype.</p>

            <p>Nessa sessão do site postarei notícias, textos sobresas dúvidas mais comuns entre quem quer aprender inglês, curiosidades da língua inglesa, entre outras coisas interessantes.
                <br /><br />Se gostar de algum post, ajude o blog compartilhando ele no Facebook.</p>
        </div>
    </div>
</div>
</div> <!-- #header -->

<div id="blog-session" class="display">
    <div class="main-content">
        <?php
        if( is_search() || is_category() ){
            ?>

            <div id="pageSectionTitle">
                <?php
                if( is_search() ){
                    echo "Resultados para: " . esc_html( get_search_query() );
                } elseif( is_category() ) {
                    echo single_cat_title("Posts da Categoria: ");
                }
                ?>
            </div>

            <?php
        }
        ?>

        <div id="breadcrumbs">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>

        <div class="display section">
            <div class="col span_2_of_3" id="section-blog-posts">
                <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        ?>
                
                        <?php
                        $arrCategories = array();
                        $categories = get_the_category( get_the_ID() );
                        foreach( $categories as $category ) {
                            $url = esc_url( get_category_link( $category->term_id ) );
                            $arrCategories[] = "<a href='$url'>".$category->name."</a>";
                            // echo $category->term_id . ', ' . $category->slug . ', ' .  . '<br />';
                        }
                        ?>
                
                        <div class="post-item">
                            <h3 class="title mb-10"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Link para <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <div class="info mb-30">Por <?php the_author(); ?> | <?php echo implode(",", $arrCategories); ?> | <?php the_time('d.m.Y'); ?></div>
                            <div class="content mb-20">
                                <?php
                                the_content("Leia mais ...");
                                ?>
                            </div>
                            <div class="share">
                                <?php echo do_shortcode( '[ess_post share_type="count"]' ); ?>
                            </div>
                        </div>
                
                        <?php
                    } // end while
                } // end if
                ?>
                <div>
                    <?php comments_template(); ?>
                </div>
            </div>

            <div class="col span_1_of_3" id="section-blog-side">
                <?php if ( is_active_sidebar( 'inglesonskype-blog-side' ) ) : ?>
                    <ul id="sidebar">
                        <?php dynamic_sidebar( 'inglesonskype-blog-side' ); ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        
        <div>
            <?php wp_pagenavi(); ?>
        </div>
    </div>

    
</div>

<?php get_footer();