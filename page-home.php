<?php get_header(); 
/* Template Name: Home */ ?>

<main id="page-home">
    <section id="banner-home"  class="wow fadeIn">
        <div class="container-fluid">
            <?php echo do_shortcode('[rev_slider alias="Slide-Home"][/rev_slider]'); ?>
        </div>
    </section>

    <section id="search" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-1 content-align-mid"><i class="fa fa-search" aria-hidden="true"></i></div>
                <div class="col-md-3 content-align-mid"><h5><span>Encontre a experiência</span> ideal para você!</h5></div>
                <div class="col-md-6 content-align-mid"><input type="text" id="txtBusca" placeholder="Digite aqui o que você procura..."/></div>
                <div class="col-md-2 content-align-mid"><button type="submit" class="encontrar">Encontrar</button></div>
            </div>
        </div>
    </section>

    <section id="eventos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2><span>Eventos que</span> marcaram</h2>
                    <h6>veja nosso portfólio</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInLeft">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">
                    <div  class="bg-gradiente"  style="background-image: linear-gradient(to bottom, transparent 0%, #000000eb 80%), url(<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg);">
                        <div class="categoria">Categoria</div>
                        <div class="txt">O melhor evento que proporcionou uma experiência incrível para todos!</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 content-align-mid">
                    <div class="ver-mais">
                        <a href="" class="btn-ver-mais">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="outros-eventos" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2>Outros eventos</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="post no-padding">
                        <div class="img-post no-padding">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-post">
                            <h6>O melhor evento que proporcionou uma experiência incrível para todos!</h6>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec orci felis, suscipit laoreet ante a, cursus</p>
                        </div>

                        <div class="mais">
                            <a href="" class="btn-mais">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="post no-padding">
                        <div class="img-post no-padding">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-post">
                            <h6>O melhor evento que proporcionou uma experiência incrível para todos!</h6>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec orci felis, suscipit laoreet ante a, cursus</p>
                        </div>

                        <div class="mais">
                            <a href="" class="btn-mais">+</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="post no-padding">
                        <div class="img-post no-padding">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bg-evento-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-post">
                            <h6>O melhor evento que proporcionou uma experiência incrível para todos!</h6>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec orci felis, suscipit laoreet ante a, cursus</p>
                        </div>

                        <div class="mais">
                            <a href="" class="btn-mais">+</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center">
                    <div class="btn-outros-eventos">
                        <a href="" class="btn-next-previus"><i class="fa fa-chevron-left" aria-hidden="true"></i> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="crie-memorias">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h5>Seus sonhos, nossa prioridade.</h5>
                    <h2>Festeje. Explore. Crie memórias!</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Institucional</h1>
                    <h4>“Uma vida sem festejar, é uma vida sem aprendizado”</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-institucional">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec orci felis, suscipit laoreet ante a, cursus suscipit massa. Aliquam enim urna, venenatis eu fringilla quis, egestas eu massa. Curabitur quis dapibus nibh. Vestibulum eleifend diam ullamcorper rhoncus pretium. </p>
                        <div class="continar-lendo">
                            <a href="" class="btn-continue-lendo">CONTINUE LENDO</a> <hr>
                        </div>

                        <div class="img-content-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/institucional2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 no-padding">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/institucional1.jpg" alt="" class="img-fluid">

                    <div class="box-contact">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h3>Agende um evento</h3>
                        <p class="telefone">(11) 3101-9874</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="nosso-blog" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-align-center">
                    <h2>Nosso blog</h2>
                </div>
            </div>

            <div class="row content-postblog">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $exclude = Array();
                $recent_articles = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '3', 'paged' => $paged ) );
                if( $recent_articles->have_posts() ): while( $recent_articles->have_posts() ): $recent_articles->the_post();
                $exclude[] = get_the_ID();
            ?>
                <div class="col-md-4">
                    <div class="post no-padding">
                        <div class="img-post no-padding">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="content-post">
                            <h6><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
                            <hr>
                            <p><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_content(), 18 ); ?></a></p>
                        </div>

                        <div class="mais">
                            <a href="<?php the_permalink() ?>" class="btn-mais">+</a>
                        </div>
                    </div>
                </div>

                <?php
                endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>

            <div class="row">
                <div class="col-md-12 text-align-center">
                    <div class="btn-outros-eventos">
                        <a href="" class="btn-next-previus"><i class="fa fa-chevron-left" aria-hidden="true"></i> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php get_template_part('template_parts/cadastre-se'); ?>
    <?php get_template_part('template_parts/instagram'); ?>
</main>

<?php get_footer(); ?>