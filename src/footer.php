<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auaha
 */

?>
    <footer id="footer">
        <div class="newsletter">
            <div class="container">
                <h1>Assine nossa newsletter</h1>
                <h2>Cadastre seu e-mail e receba nossas novidades.</h2>
                <div class="form--news">
                    <?php echo do_shortcode('[wysija_form id="1"]'); ?>
                </div>
            </div>
        </div>
        <div class="social__footer">
            <a href="#" target="_blank"><img alt="Portal Atualidades"title="Portal Atualidades" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAQAAADZc7J/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfjCB4VBTnkLbU3AAADZklEQVRIx5WVTWxUZRSGn3t7W2FaBCMlQ9ViWoFE1FYqARLElaVDSASNLsQFiQuiO9fKEgghblyVEENYUN34EwyUlFA1wsJYYqJitASkIyBhBoWZdiy9Qx8XjGXuDFQ5y+985+89J+8bUGcGLGIdvfTQzgLgOllGGOIkuUBmNyPXut+s405adlrVactOWjTrPtcYJSOCRPjTbGMTbaSIyTLCFXJAK2lW0U5EiUt8wcHgp7skMKCP7axjPpcZ5BhnGWeKGGikiRaWkiFDG9f5hn6GaoYx8A2HLZjzkJvtMFXjx5QdbnbAvAWH3WqQ/JBx2AnPudNuU/dEKGW3uzzvhCfckJjdzy14znftMJwV5NBO3/O8BT91xR3k3zdvzp121DXeaJfrfcHlzp1563SXeXPurWzEtf5q7CG7k9UNbHG7Ax7xqO+4uKqLbgeM/cXVt7/tt+iYm2tn9wHXe8nb9qGdCSxeMmvRfQYhi9hAikF+CEo1A6foow35isN8z0TV7kv8yDFS9NGKrzjuzfr6YKsD6k1XusA5NeM1u8WbFt0S0ktElrMk6hs6l3nMBabIMV23jglGydJIb0QPEd9RTN4FLTxDF48AERspMcoZxqsP2HFGeJyeiCWEXCGuqZDmLV4HYA79wF4uVycAprhCA0tCHiTgal2CWvudWohjcgTMv30K9df3Bx/wJW+yhr95mwm+5cbdM0cUeJiFNNa8j3Oai2SAMke4QbkOyEZakRshF5gmTVPSGxiUiStBcTAVTAe1pZtYzC0uhJymzCpa/ourkia00MMtRkKGiGlnKan7ytDMMtqJOR5ykr+IyJC+rwRpNhLxJ6dCcgxSIkOX/7sHm+mijxJHyYeBHOASbbzK8hoyiTnD15ykXBPewHJeI81FDgQCRu41b95ddlZDaZPPmvFFEysWn3C318y5Z4bifcrPLHjeHS61YdbmG+x0h79Z8BOfrHZscNgJx9zjyllItdmV7q6Qam/SFbjVYQvm/cgtdthcx47NdvqyH3vNgifu0Hq1sPSyned5iMscY5DRhLDMYxkZ+khXhOX4v8KSlLYVbGMTj5KiXJG2q8AiFvMcjxFR4iKHORj8fG+QIlfb75hFJ41nxDV20qJj9rt6VnGdGWZhRd6XVOR9jBGGOEW+Xt7/Aev4AUGqk6kHAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE5LTA4LTMwVDE5OjA1OjU3KzAyOjAwVdSDtQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOS0wOC0zMFQxOTowNTo1NyswMjowMCSJOwkAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC"></a>
            <a href="#" target="_blank"><img alt="Portal Atualidades"title="Portal Atualidades"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABEVBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////3J2enAAAAWnRSTlMAAQIGBwkKCxESExQVFicoKSorMDEyMzQ1OTo7PD0+Sk1OUFFSU1VWV1hiZG1ub3BxdZqeo6Slpqeys7TNzs/Q0dLT1NXW19jZ2tvc3d7f4e7v9PX29/j5/f5/vPvnAAABhElEQVR4AXXTaXPSUBSH8X8DJtYWS5XgYlELVql2cWGptaUUvU0oSFEC6PP9P4jI3Iklib+358mcmZO5+svZO/k+ZcV02K45sh51ydQpa6kaAbOb4YqbGTDZ1cLjCMzrO0pw6wFMfMm5gM+uMnincO5oD0zG/MXHt2teADWdwBulPPkF71SHlobMbu0v+H5BC++BT3LnDBQxkpU/vgToHuVVnPK7Jo2IBMbOt/tYYVEPPlQkGfgXbP8Aeo1GDxhvSUoE+T5cPdXCTghBLhUcw9VdLa2HcJgKLuGZrApcJIMC9BT7BpuJoAwNxVrgJwIfmoq14WF6xVfFDGwkAnVhR9Zz6CgZHEG4rqV713CQPlQIYWX5fR9M+lAqjgHTbBpgfF/pQFsBlrFzGbj9u3OHHYDOQU7WiEhD5q5im6XShmLenIHaUNd/7ENTryDwlMkLoSqnA6eZhfcFzhzJn0BQd5Xg7ofws6SF3UnW05sDk5daKp+T6awky6m1BhEroutmdU0LfwBPX5W93POx6wAAAABJRU5ErkJggg=="/></a>
        </div>
        <span>Portal Atualidades © 2019 - Todos os direitos reservados</span>
    </footer>
	</div><!-- #content -->

	
</div><!-- #page -->

<?php wp_footer(); ?>
 
<script>
    var slidebar_width  = 300; //slidebar width + padding size
    var slide_bar       = $(".side-menu-wrapper"); //slidebar
    var slide_open_btn  = $(".slide-menu-open"); //slidebar close btn
    var slide_close_btn = $(".menu-close"); //slidebar close btn
    var overlay         = $(".side-menu-overlay"); //slidebar close btn

    slide_open_btn.click(function(e){
        e.preventDefault();
        slide_bar.css( {"left": "0px"}); //change to "right" for right positioned menu
        overlay.css({"opacity":"1", "width":"100%"});
    });
    slide_close_btn.click(function(e){
        e.preventDefault();
        slide_bar.css({"left": "-"+ slidebar_width + "px"}); //change to "right" for right positioned menu
        overlay.css({"opacity":"0", "width":"0"});
    });

    $('.fullbanner__wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
    });


</script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</body>
</html>
