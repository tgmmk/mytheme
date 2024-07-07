
<?php get_header(); ?>

<div id="topicpath">
    <ol>
        <li><a href="<?php echo home_url(); ?>">ホーム</a>&gt;</li>
        <li><?php the_title(); ?></li>
    </ol>
</div>
<div id="contents">
    <div id="main">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>