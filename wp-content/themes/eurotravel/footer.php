<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
global $path, $img, $css, $js;
$path = get_template_directory_uri();
$img = $path.'/img/';
$css = $path.'/css/';
$js = $path.'/js';
?>

<div class="contact slide">
    <div class="container">
        <div class="table">
            <div class="table_cell">
                <div class="content indy-fade-box"">
                    <h1 class="upper white"><?php the_field('oferta') ?></h1>
                    <div class="little_line"></div>
                    <?php echo do_shortcode( '[contact-form-7 id="7" title="cForm"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer slide">
    <div class="quick_contact">
        <div class="container">
            <div class="table">
                <div class="table_cell">
                    <div class="boxes indy-fade-box">
                        <?php
                            if( have_rows('contact') ):
                            $w =0;
                            while ( have_rows('contact') ) : the_row(); $w++;
                        ?>
                                <div class="box indy-fade-box">
                                    <a href="<?php the_sub_field('link') ?>" target="_blank" style="text-decoration: none; color: inherit">
                                    <div class="empt empf<?= $w ?>" style="display: none"><?php echo get_sub_field('ico') ?></div>
                                    <div class="svg svf<?= $w ?>">
                                            <script>
                                                var y = jQuery('.empf<?php echo $w ?>').text();
                                                jQuery('.svf<?php echo $w ?>').html(y);
                                            </script>
                                        <p><?php the_sub_field('text') ?></p>
                                    </div>
                                    </a>
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
    <div class="quick_menu">
        <div class="container">
            <div class="table">
                <div class="table_cell">
                    <div class="boxes indy-fade-box">
                        <div class="box indy-fade-box">
                            <h4 class="upper white"><?php the_field('misiune')?></h4>
                            <p><?php the_field('misiune_text')?></p>
                        </div>
                        <div class="box indy-fade-box" style="padding: 0 50px; text-align: center;">
                            <h4 class="upper white"><?php the_field('group1')?></h4>
                            <a href="http://anpc.gov.ro" target="_blank"><?php the_field('group1_text')?></a>
                            <div class="mico social">
                                <a href="<?php the_field('facebook') ?>" target="_blank">
                                    <div class="sico fb">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 314.652 314.652" style="enable-background:new 0 0 314.652 314.652;" xml:space="preserve" class="svg replaced-svg">
    <g>
        <path d="M157.326,0C70.576,0,0,70.576,0,157.326s70.576,157.326,157.326,157.326s157.326-70.576,157.326-157.326   S244.076,0,157.326,0z M157.326,296.652C80.501,296.652,18,234.15,18,157.326S80.501,18,157.326,18s139.326,62.502,139.326,139.326   S234.151,296.652,157.326,296.652z"></path>
        <path d="M193.764,71.952H172.43c-17.461,0-31.667,14.206-31.667,31.667v24h-19.875c-4.971,0-9,4.029-9,9s4.029,9,9,9h19.875v83.333   c0,4.971,4.029,9,9,9s9-4.029,9-9v-83.333h30.75c4.971,0,9-4.029,9-9s-4.029-9-9-9h-30.75v-24c0-7.536,6.131-13.667,13.667-13.667   h21.333c4.971,0,9-4.029,9-9S198.734,71.952,193.764,71.952z"></path>
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
                                    </div>
                                </a>
                                <a href="<?php the_field('instagram') ?>" target="_blank">
                                    <div class="sico ig">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 314.652 314.652" style="enable-background:new 0 0 314.652 314.652;" xml:space="preserve" class="svg replaced-svg">
    <g>
        <path d="M157.326,0C70.576,0,0,70.576,0,157.326s70.576,157.326,157.326,157.326s157.326-70.576,157.326-157.326   S244.076,0,157.326,0z M157.326,296.652C80.502,296.652,18,234.15,18,157.326S80.502,18,157.326,18s139.326,62.502,139.326,139.326   S234.15,296.652,157.326,296.652z"></path>
        <path d="M214.618,80.326H100.034c-10.477,0-19,8.523-19,19v116c0,10.477,8.523,19,19,19h114.584c10.477,0,19-8.523,19-19v-116   C233.618,88.85,225.095,80.326,214.618,80.326z M215.618,215.326c0,0.552-0.448,1-1,1H100.034c-0.552,0-1-0.448-1-1v-116   c0-0.552,0.448-1,1-1h114.584c0.552,0,1,0.448,1,1V215.326z"></path>
        <rect x="183.583" y="111.812" width="20.615" height="18.911"></rect>
        <circle cx="157.326" cy="164.946" r="20.324"></circle>
        <path d="M189.745,164.856c0,17.904-14.514,32.418-32.418,32.418s-32.418-14.514-32.418-32.418l0.044-14.445h-14.497v53.761h93.743   v-53.761H189.82L189.745,164.856z"></path>
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
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="box indy-fade-box">
                            <h4 class="upper white"><?php the_field('newsletter')?></h4>
                            <p><?php the_field('newsletter_text')?></p>
                            <?php echo do_shortcode('[newsletter]') ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
        <div class="container">
            <div class="table">
                <div class="table_cell">
                    <div class="content">
                        <div class="upar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512px" version="1.1" height="512px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" class="svg upa replaced-svg">
                            <g>
                                <path fill="#FFFFFF" d="M3.352,48.296l28.56-28.328l28.58,28.347c0.397,0.394,0.917,0.59,1.436,0.59c0.52,0,1.04-0.196,1.436-0.59   c0.793-0.787,0.793-2.062,0-2.849l-29.98-29.735c-0.2-0.2-0.494-0.375-0.757-0.475c-0.75-0.282-1.597-0.107-2.166,0.456   L0.479,45.447c-0.793,0.787-0.793,2.062,0,2.849C1.273,49.082,2.558,49.082,3.352,48.296z"></path>
                            </g>
                        </svg>
                        </div>
                        <div class="copyright"><?php the_field('copyright')?></div>
                        <div class="craft">Crafted by <a href="http://www.adcentric.net" target="_blank" class="red" style="text-decoration: none">Adcentric</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script>
    /*
     * Replace all SVG images with inline SVG
     */

    jQuery(window).on('load', function() {
        jQuery('.big_promo, .about,.services, .quote, .slider,.asist,.antrep,.contact,.footer').indyFadeBox();
    });


    jQuery(window).ready(function(){
       jQuery('html').css('opacity',1);
    });

    function isScrolledIntoView(el) {
        var elemTop = el[0].getBoundingClientRect().top;
        var elemBottom = el[0].getBoundingClientRect().bottom;

        var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
        return isVisible;
    }

    setInterval(function(){
        if (isScrolledIntoView(jQuery('.big_promo h1'))){
            jQuery('.menu li').removeClass('current');
            jQuery('.menu li:nth-child(1)').addClass('current');
        }
        if (isScrolledIntoView(jQuery('.about h1'))){
            jQuery('.menu li').removeClass('current');
            jQuery('.menu li:nth-child(2)').addClass('current');
        }
        if (isScrolledIntoView(jQuery('.services h1'))) {
            jQuery('.menu li').removeClass('current');
            jQuery('.menu li:nth-child(3)').addClass('current');
        }
        if (isScrolledIntoView(jQuery('.contact h1'))) {
            jQuery('.menu li').removeClass('current');
            jQuery('.menu li:nth-child(4)').addClass('current');
        }
    },100);

    jQuery('.newsletter-subscription input').attr('placeholder', 'Email');


    (function(jQuery) {
        jQuery(document).ready(function(){
            jQuery(window).scroll(function(){
                if (jQuery(this).scrollTop() > 300) {
                    jQuery('#menu').fadeIn(300);
                } else {
                    jQuery('#menu').fadeOut(300);
                }
            });
        });
    })(jQuery);

    jQuery('.menu li').click(function(){
        var ind = $(this).attr('scrollto');
/*        jQuery('.menu li').removeClass('current');
        jQuery(this).addClass('current');*/
        if (ind == 'top'){
            jQuery('html,body').animate({ scrollTop: 0 }, 'slow');
        } else {
            $('html,body').animate({
                scrollTop: $("."+ind).offset().top
            });
        }

    });

    jQuery('.more').click(function(){
        $('html,body').animate({
            scrollTop: $(".about").offset().top
        });

    });

    jQuery('.mmnd .menu li').click(function(){
        jQuery('.mmnd').toggleClass('intoview');
        jQuery('.mmenu').toggleClass('selected');
    });

    jQuery('.mmenu').click(function(){
        jQuery(this).toggleClass('selected');
        jQuery('.mmnd').toggleClass('intoview');
    });

    jQuery('.bul').click(function(){
        var ind = jQuery(this).index();
        var wid = jQuery(window).width();
        var toMove = wid*ind;
       jQuery('.overflower').css(
           {
           'transform':'translateX(-'+toMove+'px)',
               '-webkit-transform':'translateX(-'+toMove+'px)',
               '-moz-transform':'translateX(-'+toMove+'px)'

           }
       );
        jQuery('.bul').removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery('.upar').click(function(){
        jQuery('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });

    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
</script>

<?php wp_footer(); ?>
</body>
</html>
