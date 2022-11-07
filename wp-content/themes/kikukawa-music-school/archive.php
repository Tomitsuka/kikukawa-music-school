<?php get_header(); ?>
<div class="main_wrap">
	<main class="main">

		<div class="archive__box post__footer">
			<div class="heading__wrap">
				<h2 class="heading"><?php single_cat_title(); ?></h2>
			</div>
			<div class="archive__list">

				<?php
				$category_slug = get_query_var('category_name');
				$page_num = get_query_var('paged');

				$wp_query = new WP_Query();
				$my_posts = array(
					'post_type' => 'post',
					'posts_per_page' => '10', // 表示件数の指定
					'category_name' => $category_slug, //表示したいカテゴリー名を入力
					'paged' => $page_num //ページ数
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
				<?php
				endwhile;

				// the_posts_navigation();

				else ://投稿が無い場合


				get_template_part( 'template-parts/content', 'none' );

				endif;

				wp_reset_postdata(); ?>

			</div>
		</div>

		<div class="pagination">
			<div class="pagination__item pagination__prev arrow"><?php previous_posts_link( '前のページ' ); ?></div>
			<div class="pagination__item pagination__next arrow"><?php next_posts_link( '次のページ' ); ?></div>
		</div>

		<?php get_sidebar(); ?>

	</div><!-- main -->
</div><!-- main_wrap -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
