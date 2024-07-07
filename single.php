
<?php get_header(); ?>

<div id="topicpath">
    <ol>
        <li><a href="index.html">ホーム</a>&gt;</li>
        <li><?php the_title(); ?></li>
    </ol>
</div>
<div id="contents">
    <div id="main">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
            <!-- <section id="sec_field">
                <h2>展覧会の趣旨</h2>
                <p><img src="images/pic_introduction1.jpg" alt=""
                        class="pic_left">日本の景色写真展は、日本の景色が持っている魅力や素晴らしさを写した作品を展示しています。</p>
                <p>テーマを「日本の景色」に設定し、プロ・アマを問わず広く作品を募集したところ、「日本の景色」が詰まった作品約200点が集まりました。<br>これらはどれも力作で、都会のにぎわいや田舎の落ち着き、美しい自然などまさしく日本の魅力が凝縮された作品といえるでしょう。
                </p>
                <p>また、会期中は作品を出展しているプロの写真家によるギャラリートークをはじめ、多くのイベントを開催いたします。ぜひ、足をお運びください。</p>
            </section>
            <section id="sec_field">
                <h2>日本×写真</h2>
                <p><img src="images/pic_introduction2.jpg" alt=""
                        class="pic_left">日常生活ではあまり意識しない景色の中から、美しい四季や日本特有の感覚である侘び寂びが感じられる瞬間を、様々な角度から写しだしています。</p>
                <p>作品を通してお気に入りの風景を見つけたり、日本の景色の美しさを感じてください。また、普段の生活で自分だけの日本の風景を発見し、写真に収める喜びにつながれば幸いです。</p>
            </section> -->
    </div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>