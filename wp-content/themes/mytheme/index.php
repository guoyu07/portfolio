<?php get_header();?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section menu -->
                    <div class="list_wrap">
                        <div class="filter_div controls">
                            <ul>
                                <li class="filter  active" data-filter="all"><a href="#">Все</a></li>
                                <li class="filter " data-filter=".category-2"><a href="#">Респонсив</a></li>
                                <li class="filter " data-filter=".category-3"><a href="#">Фиксированные</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section items -->
                    <div class="portfolio_items">
                        <div class="item_wrap mix category-2">
                            <div class="item">
                                <a href="<?php echo get_template_directory_uri();?>/forshow/PSDblack/index.html"><?php echo get_the_post_thumbnail( 10, array( 200, 200)); ?></a>
                                <a href="<?php echo get_template_directory_uri();?>/forshow/PSDblack/index.html"><h3>Посмотреть</h3></a>
                            </div>
                        </div>

                        <!-- section item -->
                       <div class="item_wrap mix category-3">
                            <div class="item">
                               <a href="<?php echo get_template_directory_uri();?>/forshow/sho/index.html"><?php echo get_the_post_thumbnail( 19, array( 200, 200)); ?></a>
                               <a href="<?php echo get_template_directory_uri();?>/forshow/sho/index.html"><h3>Посмотреть</h3></a>
                           </div>
                       </div>
                        <!-- section item -->
                        <div class="item_wrap mix category-2">
                            <div class="item">
                                <a href="<?php echo get_template_directory_uri();?>/forshow/PSDMOBIshop/index.html"><?php echo get_the_post_thumbnail( 23, array( 200, 200)); ?></a>
                                <a href="<?php echo get_template_directory_uri();?>/forshow/PSDMOBIshop/index.html"><h3>Посмотреть</h3></a>
                            </div>
                        </div>

                      <div class="item_wrap mix category-2">
                            <div class="item">
                              <a href="<?php echo get_template_directory_uri();?>/forshow/response/index.html"><?php echo get_the_post_thumbnail( 26, array( 200, 200)); ?></a>
                              <a href="<?php echo get_template_directory_uri();?>/forshow/response/index.html"><h3>Посмотреть</h3></a>
                            </div>
                      </div>

<div class="item_wrap mix category-2">
                            <div class="item">
                              <a href="<?php echo get_template_directory_uri();?>/forshow/PSDexample/index.html"><?php echo get_the_post_thumbnail( 79, array( 200, 200)); ?></a>
                              <a href="<?php echo get_template_directory_uri();?>/forshow/PSDexample/index.html"><h3>Посмотреть</h3></a>
                            </div>
                      </div>


                        <div class="item_wrap mix category-3">
                            <div class="item">
                                <a href="<?php echo get_template_directory_uri();?>/forshow/GoodInc/index.html"><?php echo get_the_post_thumbnail( 49, array( 200, 200)); ?></a>
                                <a href="<?php echo get_template_directory_uri();?>/forshow/GoodInc/index.html"><h3>Посмотреть</h3></a>
                            </div>
                        </div>

                       <div class="item_wrap mix category-3">
                            <div class="item">
                               <a href="<?php echo get_template_directory_uri();?>/forshow/PSDdogs/index.html"><?php echo get_the_post_thumbnail( 55, array( 200, 200)); ?></a>
                               <a href="<?php echo get_template_directory_uri();?>/forshow/PSDdogs/index.html"><h3>Посмотреть</h3></a>
                           </div>
                       </div>

                      <div class="item_wrap mix category-3">
                            <div class="item">
                              <a href="<?php echo get_template_directory_uri();?>/forshow/psdgradient/index.html"><?php echo get_the_post_thumbnail( 69, array( 200, 200)); ?></a>
                              <a href="<?php echo get_template_directory_uri();?>/forshow/psdgradient/index.html"><h3>Посмотреть</h3></a>
                          </div>
                      </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
<!-- Form -->
<!-- <div class="form">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <?php if ( have_posts() ): query_posts('p=62');
    while ( have_posts() ): the_post();?>
        <h2><?php the_content();?> </h2>
        <form  action="//formspree.io/k_uryerov@mail.ru"
               method="POST">
            <p>Имя</p>
            <input type="text" name="name" placeholder="Ваше имя">
            <p>E-mail</p>
            <input type="email" name="_replyto" placeholder="Ваш e-mail">
            <p>Текст</p>
            <input type="hidden" name="_next" value="http://porfolio.esy.es" />
            <textarea  name="message"  id="" cols="10" rows="5" placeholder="Ваше сообщение"></textarea>
            <button type="submit" >Отправить</button>
        </form>
    <? endwhile; endif; wp_reset_query(); ?>


            </div>

        </div>
    </div>
</div> -->

</div>

<?php get_footer();?>