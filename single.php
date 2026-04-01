<?php get_header(); ?>

<div class="l-mv">
    <span class="c-mv__text">portfolio</span>
</div>
<main class="l-main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <main class="l-main">
                <section class="l-section">
                    <h2 data-sub="Works" class="l-title c-title">制作物</h2>
                    <div class="l-works-detail">

                        <div class="l-works__list_desc">
                            <img src="./img/dummy.png" alt="作品1">

                            <h3 class="c-section__title">コーポレートサイト『WED』</h3>
                            <p>コーポレートサイトを作成しました。こちらでは、主にCSS設計の練習を意識して制作しました。</p>
                            <a href="#" class="c-works__link" target="_blank">デモサイトを見る<i
                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>

                        <div>
                            <p class="c-section__title">使用言語</p>
                            <ul class="l-works-detail__list">
                                <li class="c-section__li">HTML</li>
                                <li class="c-section__li">CSS</li>
                                <!-- <li class="c-section__li">JavaScript</li> -->
                                <!-- <li class="c-section__li">PHP</li> -->
                            </ul>
                        </div>

                        <div>
                            <p class="c-section__title">課題元</p>
                            <p>Codejumpの課題を使用しました。</p>
                            <blockquote cite="https://code-jump.com/corporate2-menu/">
                                <p>渋谷のWeb制作会社がコーポレートサイトを作るとのことでコーディングのお手伝いをします。事業内容や会社情報などを簡単にまとめたLPタイプのWebサイトです。</p>
                            </blockquote>

                            <a href="https://code-jump.com/corporate2-menu/" class="c-works_sublink" target="_blank">使用した課題ページ<i
                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <!-- モックアップ -->
                        <div class="device device-iphone-x">
                            <div class="device-frame">
                                <img src="./img/dummy.png" alt="作品1">
                            </div>
                            <div class="device-stripe"></div>
                            <div class="device-header"></div>
                            <div class="device-sensors"></div>
                            <div class="device-btns"></div>
                            <div class="device-power"></div>
                        </div>
                    </div>
                </section>
                <a href="#" class="l-topbtn c-topbtn"><i class="fa-solid fa-arrow-up"></i></a>

            </main>

        <?php endwhile; ?>
    <?php endif; ?>

</main>
<?php get_footer(); ?>