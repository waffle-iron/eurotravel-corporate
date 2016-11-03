<?php
/**
 * Template name: Home
 */

get_header(); ?>

<div class="big_promo">
    <div class="container">
        <div class="table">
            <div class="table_cell">
                <h1 class="upper white indy-fade-box"><?php the_field('title') ?></h1>
                <h2 class="upper white indy-fade-box"><?php the_field('subtitle') ?></h2>
            </div>
            <div class="more indy-fade-box">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px" class="svg replaced-svg">
<g>
    <g>
        <path d="M509.121,125.966c-3.838-3.838-10.055-3.838-13.893,0L256.005,365.194L16.771,125.966c-3.838-3.838-10.055-3.838-13.893,0    c-3.838,3.838-3.838,10.055,0,13.893l246.18,246.175c1.842,1.842,4.337,2.878,6.947,2.878c2.61,0,5.104-1.036,6.946-2.878    l246.17-246.175C512.959,136.021,512.959,129.804,509.121,125.966z" fill="#FFFFFF"></path>
    </g>
</g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
</svg>
                <p class="upper white"><?php the_field('detalii') ?></p>
            </div>
        </div>
    </div>
</div>

<div class="about slide">
    <div class="container">
        <div class="table">
            <div class="table_cell">
                <h1 class="upper blue indy-fade-box"><?php the_field('titlu_despre') ?></h1>
                <div class="little_line indy-fade-box"></div>
                <div class="text indy-fade-box"><?php the_field('continut') ?></div>
                <div class="boxes indy-fade-box">
                    <?php
                    if( have_rows('blocks_despre') ):
                        $i = 0;
                        while ( have_rows('blocks_despre') ) : the_row(); $i++;
                            ?>
                                <div class="box indy-fade-box">
                                    <div class="inner">
                                        <div class="empty emp<?= $i ?>" style="display: none"><?php echo get_sub_field('svg') ?></div>
                                        <div class="svgi sv<?= $i ?>">
                                            <script>
                                                var x = jQuery('.emp<?php echo $i ?>').text();
                                                jQuery('.sv<?php echo $i ?>').html(x);
                                            </script>
                                        </div>
                                        <h3><?php the_sub_field('titlu'); ?></h3>
                                        <p><?php the_sub_field('text'); ?></p>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="stats">
                    <?php the_field('footnote') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="quote slide">
    <div class="container">
        <div class="table">
            <div class="table_cell">
                <div class="content indy-fade-box">
                    <div class="pic">
                        <img class="svg" src="<?= $img ?>rm.jpg" alt=""/>
                        <h3 class="white"><?php the_field('nume') ?></h3>
                        <p class="white"><?php the_field('functie') ?></p>
                    </div>
                    <div class="text white"><?php the_field('continut_citat') ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider">
    <div class="overflower">



<?php

// check if the repeater field has rows of data
if( have_rows('servicii') ):
    $j = 0;
    while ( have_rows('servicii') ) : the_row(); $j++;
        ?>

        <div class="services slide">
            <div class="container">
                <div class="table">
                    <div class="table_cell">
                        <h1 class="upper blue"><?php the_field('titlu_servicii') ?></h1>
                        <div class="little_line"></div>
                        <div class="content indy-fade-box">


                            <div class="col1">
        <?php
        if( have_rows('slide') ):
            $i = 0;
            while ( have_rows('slide') ) : the_row(); $i++;
        ?>

                <?php if ($i<2) {
                   ?>
                    <div class="box indy-fade-box">
                        <div class="bimg">
                            <div class="empty empt<?= $j.$i ?>" style="display: none"><?php echo get_sub_field('ico') ?></div>
                            <div class="svgi svi<?= $j.$i ?>">
                                <script>
                                    var y = jQuery('.empt<?php echo $j.$i ?>').text();
                                    jQuery('.svi<?php echo $j.$i ?>').html(y);
                                </script>
                            </div>
                        </div>
                        <div class="text">
                            <h4><?php the_sub_field('titlu') ?></h4>
                            <p><?php the_sub_field('text') ?></p>
                        </div>
                    </div>
                    <?php

                } else if ($i == 2) {
                    ?>

                                <div class="box indy-fade-box">
                                    <div class="bimg">
                                        <div class="empty empt<?= $j.$i ?>" style="display: none"><?php echo get_sub_field('ico') ?></div>
                                        <div class="svgi svi<?= $j.$i ?>">
                                            <script>
                                                var y = jQuery('.empt<?php echo $j.$i ?>').text();
                                                jQuery('.svi<?php echo $j.$i ?>').html(y);
                                            </script>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h4><?php the_sub_field('titlu') ?></h4>
                                        <p><?php the_sub_field('text') ?></p>
                                    </div>
                                </div>
                            </div> <!-- end col1 -->

                            <div class="col2">

                            <?php
                } else {
                        ?>
                        <div class="box indy-fade-box">
                            <div class="bimg">
                                <div class="empty empt<?= $j.$i ?>" style="display: none"><?php echo get_sub_field('ico') ?></div>
                                <div class="svgi svi<?= $j.$i ?>">
                                    <script>
                                        var y = jQuery('.empt<?php echo $j.$i ?>').text();
                                        jQuery('.svi<?php echo $j.$i ?>').html(y);
                                    </script>
                                </div>
                            </div>
                            <div class="text">
                                <h4><?php the_sub_field('titlu') ?></h4>
                                <p><?php the_sub_field('text') ?></p>
                            </div>
                        </div>
                        <?php
                    }?>



    <?php

            endwhile;
    ?></div><?php
        endif;

    ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    <?php

    endwhile;
endif;

?>


    </div>

    <div class="bul_nav">
        <div class="bul active">&nbsp;</div>
        <div class="bul">&nbsp;</div>
        <div class="bul">&nbsp;</div>
    </div>

</div>
<!-- <img class="svg" src="<?/*= $img */?>info.svg" alt="tickets"/>
-->

<div class="asist slide">
    <div class="container">
        <div class="table">
            <div class="table_cell">
                <div class="content indy-fade-box">
                    <div class="text">
                        <h4><?php the_field('titlu_asistenta') ?></h4>
                        <p><?php the_field('text_asistenta') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="antrep slide">
    <div class="container">
        <div class="table">
            <div class="table_cell">
                <div class="content indy-fade-box">
                    <h1 class="upper blue"><?php the_field('titlu_traditie') ?></h1>
                    <div class="little_line"></div>
                    <div class="textual">
                        <?php the_field('text_traditie') ?>
                    </div>

                    <div class="txa">
                        <div class="tx left">
                        <?php
                            if( have_rows('block_left') ):
                                while ( have_rows('block_left') ) : the_row();
                        ?>
                                    <div class="block indy-fade-box">
                                        <div class="tx title">
                                            <div class="title">
                                                <?php the_sub_field('titlu') ?>
                                            </div>
                                            <div class="num red">
                                                <?php the_sub_field('numar') ?>
                                            </div>
                                        </div>
                                        <div class="tx text">
                                            <?php the_sub_field('text') ?>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                        </div>
                        <div class="tx right">
                            <?php
                            if( have_rows('block_right') ):
                                while ( have_rows('block_right') ) : the_row();
                                    ?>
                                    <div class="block indy-fade-box">
                                        <div class="tx text">
                                            <?php the_sub_field('text') ?>
                                        </div>
                                        <div class="tx title">
                                            <div class="title">
                                                <?php the_sub_field('titlu') ?>
                                            </div>
                                            <div class="num red">
                                                <?php the_sub_field('numar') ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();