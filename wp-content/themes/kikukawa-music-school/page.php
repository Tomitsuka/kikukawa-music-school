<?php get_header();?>

<div class="main_wrap">
	<main class="main">
		<div class="post__body">
			<div class="post__header">
				<h1 class="post__title"><?php the_title(); ?></h1>
			</div>
			<div class="post__content">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="archive__box post__footer">
			<div class="heading__wrap">
				<h2 class="heading">お知らせ一覧</h2>
			</div>
			<div class="archive__list">

				<?php
				$wp_query = new WP_Query();
				$my_posts = array(
					'post_type' => 'post',
					'posts_per_page' => 5, // 表示件数の指定
					'category_name' => 'news', //表示したいカテゴリー名を入力
				);
				$wp_query->query($my_posts);
				if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
				?>
						<div class="archive__item">
							<div class="archive__image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
							<div class="archive__meta">
								<div class="archive__date"><?php echo get_the_date('Y.m.d'); ?></div>
								<div class="archive__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							</div>
						</div>
				<?php endwhile;
				endif;
				wp_reset_postdata(); ?>

			</div>
		</div>

		<?php get_sidebar(); ?>

	</div><!-- main -->
</div><!-- main_wrap -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
