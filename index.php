<?php get_header(); ?>

<div class="banner"></div>

<div class="sobre">
    <div class="wrap">
        <h2 class="titulo">Sobre a TUUT</h2>

        <p>
            A <strong>TUUT</strong> conduz seu negócio com inteligência emocional, pensamento criativo e entusiamos coletivo. Primando por uma comunicação integrada, nossa plataforma de atuação é múltipla e o nosso pocisionamento é multidisciplinar. Aqui, a gente executa todo projeto com estratégia, conceito, conteúdo e design. Raciocinamos em todas as mídias, viabilizando projetos para pequenas e grandes marcas, no Brasil e no exterior.
        </p>
    </div>
</div>

<div class="galeria">
    <div class="wrap">
        <h2 class="titulo">Galeria TOOT</h2 class="titulo">
    </div>

    <div class="galeria__carousel" style="color: red; font-weight: bold;">Imagem ilustrativa</div>
</div>

<div class="projetos">
    <div class="wrap">
        <h2 class="titulo">Alguns de nossos projetos</h2>

        <div class="projetos__container">

            <div class="projetos__container--box1">

                <button class="accordion">Projeto 1</button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <button class="accordion">Projeto 2</button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <button class="accordion">Projeto 3</button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <button class="accordion">Projeto 4</button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <button class="accordion">Projeto 5</button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <button class="accordion">Projeto 6</button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <button class="accordion">Projeto 7</button>
                <div class="panel">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>          

            </div>

            <div class="projetos__container--box2">
                <p>
                    Nosso trabalho é feito em parceria com nossos clientes. Um trabalho a quatro mãos, em que nos envolvemos em todos os meandros do processo, propondo soluções práticas e acompanhando os resultados.
                </p>

                <div class="projetos__container--box2-btn">
                    <p>Projeto 1</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog">
    <div class="wrap">
        <h2 class="titulo">Blog da TUUT</h2>

        <?php
            $args = array('post_type'=>'post', 'showposts'=> 2);
            $my_posts = get_posts( $args );
        ?>

        <?php $cont = 1; if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post ); ?>
            <div class="blog__container <?php if( $cont == 2 ) echo 'box2'; ?>">
                <div class="blog__container--box">
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>
                    </p>
                </div>

                <?php the_post_thumbnail(); ?>
            </div>
        <?php $cont ++ ; endforeach; endif; ?>
        
        <p class="veja-mais">
            <a href="<?php the_permalink(); ?>">Veja mais posts...</a>
        </p>
    </div>
</div>

<?php get_footer(); ?>