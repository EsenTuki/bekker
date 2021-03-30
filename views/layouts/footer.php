    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><h2>КОНТАКТЫ:</h2>
                    <p>г. Петропавловск: ул. Пушкина 37, тел.: 8 (7152) 25-25-83</p>
                </div>
                <div class="col-sm-6">
                    <a href="/" class="footer_logo"></a>
                </div>
            </div>
        </div>
    </div>
</footer><!--/Footer-->


    <!-- -----------------------------------
    ---------------------------------CALCULATOR--------------------------
    --------------------------------------->
    <script src="templates/js/bootstrap.min.js"></script>
    <script src="templates/js/jQuery-isotope/jquery.isotope.min.js"></script>

    <!--  <script src="/templates/plast/js/jQuery-Knob/js/jquery.knob.js"></script> -->
    <!--   <script src="/templates/plast/js/jQuery-Cookie/jquery.cookie.js"></script> -->
    <script src="templates/js/jQuery-easing/jquery.easing.1.3.min.js"></script>
    <script src="templates/js/jQuery-infiniteScroll/jquery.infinitescroll.min.js"></script>
    <script src="templates/js/jQuery-infiniteScroll/behaviors/manual-trigger.js"></script>
    <script src="templates/js/jQuery-fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="templates/js/jQuery-FitText/jquery.fittext.js"></script>
    <script src="templates/js/jQuery-retina/retina.min.js"></script>
    <script src="templates/js/jQuery-mediaElement/build/mediaelement-and-player.min.js"></script>
    <script src="templates/js/jQuery-OwlCarousel2/dist/owl.carousel.min.js?2.0.0"></script>

    <!-- Theme Initializer -->
    <script src="templates/js/theme.js"></script>
    <script src="templates/js/plugins.js"></script>
    <script src="templates/js/jQuery-nivoSlider/jquery.nivo.slider.pack.js"></script>
    <!-- -----------------------------------
    -------------------------------CALCULATOR END------------------------
    --------------------------------------->


<script src="/template/js/slick.min.js"></script>
<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(41977099, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="watch/41977099/1.gif" style="position:absolute; left:-9999px;" alt=""></div></noscript> <!-- /Yandex.Metrika counter -->
    </body>
</html>