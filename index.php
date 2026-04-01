<?php get_header(); ?>

<div class="l-mv">
    <span class="c-mv__text">portfolio</span>
</div>
<main class="l-main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <section id="works" class="l-section">
                <h1 data-sub="Works" class="l-title c-title"><?php echo '制作物' ?></h1>
                <ul class="l-works__list">
                    <li class="l-works__list_desc"><img src="./img/dummy.png" alt="作品1">
                        <p class="c-section__title">作品1</p>
                        <p>テキスト</p>
                        <a href="works_detail.html" class="c-works__link">詳細を見る<i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </li>

                    <li class="l-works__list_desc"><img src="./img/dummy.png" alt="作品2">
                        <p class="c-section__title">作品2</p>
                        <p>テキスト</p>
                        <a href="works_detail.html" class="c-works__link">詳細を見る<i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </li>

                    <li class="l-works__list_desc"><img src="./img/dummy.png" alt="作品3">
                        <p class="c-section__title">作品3</p>
                        <p>テキスト</p>
                        <a href="works_detail.html#" class="c-works__link">詳細を見る<i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </li>

                    <li class="l-works__list_desc"><img src="./img/dummy.png" alt="作品4">
                        <p class="c-section__title">作品4</p>
                        <p>テキスト</p>
                        <a href="works_detail.html" class="c-works__link">詳細を見る<i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </li>

                </ul>
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