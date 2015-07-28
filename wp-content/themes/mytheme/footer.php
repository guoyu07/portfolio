<!-- footer -->
<footer >
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="about">
<!--  Добавление названия поста с определённым ID на из вордпресса на сайт-->
                    <h3><?php echo get_the_title(29); ?></h3>
<!--Добавление текста из поста вордпресса с определённым ID на страницу  -->
                   <?php if (have_posts()) : query_posts('p=29');
                            while (have_posts()) : the_post();?>

                    <? the_content(); ?>

                    <? endwhile; endif; wp_reset_query();?>
<!--   Добавление текста из поста вордпресса с определённым ID на страницу-->
                    <?    if (have_posts()) : query_posts('p=44');
                        while (have_posts()) : the_post();?>

                                <? the_content(); ?>

                        <? endwhile; endif; wp_reset_query(); ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="contacts">
                    <h3>Контакты</h3>
                    <p><i class="fa fa-phone"></i>0952527084</p>
                    <p><a href="skype:den19031982;"><i class="fa fa-skype"></i>den19031982</a></p>
                    <p><a href="mailto:k_uryerov@mail.ru?subject=hello"><i class="fa fa-envelope-o"></i>k_uryerov@mail.ru</a></p>
                    <p>

                        <!--LiveInternet counter-->
                        <script type="text/javascript"><!--
                            document.write("<a 				href='//www.liveinternet.ru/click' "+
                            "target=_blank><img src='//counter.yadro.ru/hit?t44.3;r"+
                            escape(document.referrer)+((typeof(screen)=="undefined")?"":
                            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                                screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                            ";"+Math.random()+
                            "' alt='' title='LiveInternet' "+
                            "border='0' width='31' height='31'><\/a>")
                            //--></script>
                        <!--/LiveInternet-->

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri();?>/libs/jquery-1.11.3.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/libs/jquery.mixitup.js"></script>
<script src="<?php echo get_template_directory_uri();?>/libs/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/libs/com.js"></script>

<?php wp_footer(); ?>
</body>
</html>