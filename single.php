<?php get_header(); ?>

<main class="l-main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <main class="l-main">
                <section class="l-section">
                    <h1 data-sub="Works" class="l-title c-title">制作物</h1>
                    <div class="l-works-detail">

                        <div class="l-works__list_desc">
                            <?php the_post_thumbnail(); ?>


                            <h2 class="c-section__title"><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <?php
                            //デモサイトリンク先をカスタムフィールドから反映
                            $works_link = SCF::get('works_link');
                            ?>
                            <a href="<?php echo $works_link; ?>" class="c-works__link" target="_blank">デモサイトを見る<i
                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <?php
                        //使用言語情報をカスタムフィールドから反映
                        $check = SCF::get('lang_list');
                        $true_lang_list = array_filter($check[0], 'is_true_check');
                        ?>

                        <?php if ($check): ?>
                            <div>
                                <p class="c-section__title">使用言語</p>
                                <ul class="l-works-detail__list">
                                    <?php foreach ($true_lang_list as $key => $list): ?>
                                        <li class="c-section__li"><?php echo $key; ?></li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php
                        //課題元情報をカスタムフィールドから反映
                        $reference_text = SCF::get('reference_text');
                        $blockquote_group = SCF::get('blockquote_group');

                        ?>
                        <div>
                            <p class="c-section__title">課題元</p>
                            <p><?php echo $reference_text; ?></p>

                            <blockquote cite="<?php echo $blockquote_group[0]['blockquote_url'] ?>">
                                <p><?php echo $blockquote_group[0]['blockquote_text'] ?></p>
                            </blockquote>

                            <a href="<?php echo $blockquote_group[0]['blockquote_url'] ?>" class="c-works_sublink" target="_blank">使用した課題ページ<i
                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>

                    </div>
                </section>
                <a href="#" class="l-topbtn c-topbtn"><i class="fa-solid fa-arrow-up"></i></a>

            </main>

        <?php endwhile; ?>
    <?php endif; ?>

</main>
<?php get_footer(); ?>