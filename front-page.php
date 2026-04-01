<?php get_header(); ?>

<div class="l-mv c-mv">
    <span class="c-mv__text">portfolio</span>
</div>
<main class="l-main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <section id="works" class="l-section c-section">
                <h1 data-sub="Works" class="l-title c-title"><?php echo '制作物' ?></h1>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()):

                ?>
                    <ul class="l-works__list">
                        <?php
                        while ($the_query->have_posts()): $the_query->the_post(); ?>

                            <li class="l-works__list_desc c-works-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                                <p class="c-section__title"><?php the_title(); ?></p>
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="c-works__link">詳細を見る<i
                                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else: ?>
                    <p class="c-common_text">掲載準備中です。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </section>
            <section id="about-me" class="l-section">
                <div class="l-about">
                    <h2 data-sub="About Me" class="l-title c-title">自己紹介</h2>
                    <p>自己紹介文が入る自己紹介文が入る自己紹介文が入る自己紹介文が入る</p>

                    <div class="c-about__list">
                        <p class="c-section__title">使用言語</p>
                        <ul class="l-about__list">
                            <li class="c-section__li">HTML</li>
                            <li class="c-section__li">CSS</li>
                            <li class="c-section__li">JavaScript</li>
                            <li class="c-section__li">PHP</li>
                        </ul>
                    </div>
                    <div class="c-about__list">
                        <p class="c-section__title">主な使用ツール</p>
                        <ul class="l-about__list--column">
                            <li class="c-section__li">Visual studio code</li>
                            <li class="c-section__li">Figma</li>
                            <li class="c-section__li">GitHub</li>
                        </ul>
                    </div>
                    <div class="c-about__list">
                        <p class="c-section__title">取得資格</p>
                        <ul class="l-about__list--column">
                            <li class="c-section__li"><time datetime="2026-01"
                                    class="c-section__li_sidedesc">2026.01</time><br>Webクリエイター能力認定試験 HTML5 エキスパート
                                合格<br><span class="c-section__li_sidedesc">(株式会社サーティファイCertify Inc.)</span>
                            </li>
                            <li class="c-section__li"><time datetime="2026-03"
                                    class="c-section__li_sidedesc">2026.03</time><br>SNSマーケティング検定
                                合格<br><span class="c-section__li_sidedesc">(株式会社サーティファイCertify Inc.)</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <a href="#" class="l-topbtn c-topbtn"><i class="fa-solid fa-arrow-up"></i></a>

        <?php endwhile; ?>
    <?php endif; ?>

</main>
<?php get_footer(); ?>