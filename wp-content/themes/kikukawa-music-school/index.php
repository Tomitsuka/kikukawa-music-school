<?php get_header(); ?>
<div class="hero">
	<div class="hero_image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hero_image1.jpg" />
	</div>
	<div class="hero_text">
		<div class="hero_read">
			音楽が教えてくれる。
		</div>
		<p>
			菊川音楽教室は「楽しく学びのあるレッスン」をモットーに、2018年夏より津田沼にてレッスンをスタートしました。<br>
			音楽を通して、生徒さんの人生がより豊かになるように、音楽が一生の友になるように精一杯お手伝いしていきます。<br>
			現在千葉県船橋市と神奈川県茅ヶ崎市にてレッスンを行っており、
			子どもから大人まで幅広い年代の方を対象に楽しくレッスンをしています。<br>
			レッスンに興味がある方は是非お気軽に<a href="https://forms.gle/hYhretfVKwrViTqp9" target="_blank">お問い合わせ</a>ください。
		</p>
	</div>
	<?php get_sidebar(); ?>
</div>

<div class="main_wrap">
	<main class="main">

		<section class="section lesson">
			<h2 class="section_title">
				レッスンについて
			</h2>

			<div class="section_content">
				<div class="section_text">
					大手教室のカリキュラムとは異なり、生徒の皆さんとじっくりお話をしながら一人ひとりにあった教材をご提案いたします。<br>
					将来どんな曲が弾けるようになりたいか、どうやったら弾けるようになるかなど、レッスンにてご相談ください。
				</div>
				<div class="content_list">

					<div class="content_item">
						<div class="content_imege"><img src="<?php echo get_template_directory_uri(); ?>/images/lesson_image1.jpg" alt=""></div>
						<div class="content_body">
							<div class="content_title">お子様向けコース</div>
							<div class="content_text">当教室は何才からでもレッスン可能です。<br>
								まだピアノのレッスンが難しい小さいお子様は、お歌やリズム遊びから始め徐々にピアノのレッスンへと移行していきます。
							</div>
							<div class="content_price">
								<span class="label">レッスン料</span><span class="price">¥8,800〜</span>
							</div>
						</div>
					</div>

					<div class="content_item">
						<div class="content_imege"><img src="<?php echo get_template_directory_uri(); ?>/images/lesson_image2.jpg" alt=""></div>
						<div class="content_body">
							<div class="content_title">大人向けコース</div>
							<div class="content_text">自分の好きな曲を弾けるよう、それぞれのレベルに合わせたレッスンをしていきます。<br>
								当教室は朝10:00から夜21:00までとレッスン時間も幅広く、お仕事や子育てに忙しい方にも柔軟に対応が可能です。
							</div>
							<div class="content_price">
								<span class="label">レッスン料</span><span class="price">¥9,900〜</span>
							</div>
						</div>
					</div>

					<div class="content_item">
						<div class="content_imege"><img src="<?php echo get_template_directory_uri(); ?>/images/lesson_image3.jpg" alt=""></div>
						<div class="content_body">
							<div class="content_title">マスターコース</div>
							<div class="content_text">コンクールへ挑戦したい方はもちろん
								音楽高校・音楽大学受験などにも対応いたします。<br>
								より専門的に学びたい方向けのコースです。
							</div>
							<div class="content_price">
								<span class="label">レッスン料</span><span class="price">¥22,000〜</span>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="section_more arrow">
				<a class="more_button" href="<?php echo esc_url(home_url('/')); ?>/lesson/">レッスンについての詳細</a>
			</div>
		</section>

		<section class="section lesson">
			<h2 class="section_title">
				教室のご案内
			</h2>
			<div class="section_content">
				<div class="content_list">

					<div class="content_item">
						<div class="content_imege"><img src="<?php echo get_template_directory_uri(); ?>/images/school_image1.jpg" alt=""></div>
						<div class="content_body">
							<div class="content_title">船橋・茅ヶ崎の２校</div>
							<div class="content_text">
								菊川音楽教室では千葉県船橋市、　神奈川県茅ヶ崎市に２校で運営しております。<br>
							</div>
						</div>
					</div>

					<div class="content_item">
						<div class="content_imege"><img src="<?php echo get_template_directory_uri(); ?>/images/recital_8.jpg" alt=""></div>
						<div class="content_body">
							<div class="content_title">年に１度の発表会</div>
							<div class="content_text">
								大きな舞台に立ちたい…<br>
								沢山の拍手を浴びたい…<br>
								そんな願いを叶えられるよう、当教室では年に1回コンサート形式の発表会を行なっています。
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="section_more arrow">
				<a class="more_button" href="<?php echo esc_url(home_url('/')); ?>/school/">教室についての詳細</a>
			</div>
		</section>

		<section class="section news">
			<h2 class="section_title">
				お知らせ
			</h2>
			<div class="section_content">
				<div class="items">
					<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'posts_per_page' => 4, // 表示件数の指定
						'category_name' => 'news', //表示したいカテゴリー名を入力
					);
					$wp_query->query($my_posts);
					if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
					?>
							<div class="item">
								<div class="item__imege"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
								<div class="item__body">
									<div class="item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
									<div class="item__date"><?php echo get_the_date('Y.m.d'); ?></div>
								</div>
							</div>
					<?php endwhile;
					endif;
					wp_reset_postdata(); ?>

				</div>
			</div>
			<div class="section_more arrow">
				<a class="more_button" href="<?php echo get_category_link(3); ?>">お知らせ一覧</a>
			</div>
		</section>

		<section class="section blog">
			<h2 class="section_title">
				ブログ
			</h2>
			<div class="section_content">
				<div class="items">
					<?php
					$wp_query = new WP_Query();
					$my_posts = array(
						'post_type' => 'post',
						'posts_per_page' => 4, // 表示件数の指定
						'category_name' => 'blog', //表示したいカテゴリー名を入力
					);
					$wp_query->query($my_posts);
					if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
					?>
							<div class="item">
								<div class="item__imege"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
								<div class="item__body">
									<div class="item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
									<div class="item__date"><?php echo get_the_date('Y.m.d'); ?></div>
								</div>
							</div>
					<?php endwhile;
					endif;
					wp_reset_postdata(); ?>

				</div>
			</div>
			<div class="section_more arrow">
				<a class="more_button" href="<?php echo get_category_link(4); ?>">ブログ一覧</a>
			</div>
		</section>

		<section class="section course">
			<h2 class="section_title">
				入会のご案内
			</h2>
			<div class="section_content">
				<div class="section__headline">
					レッスン料金
				</div>
				<div class="course-cards">
					<div class="course-card">
						<div class="course-card__title">お子様向けコース<span class="course-card__time">１回30分</span></div>
						<div class="course-card__body">
							<div class="course-card__item">
								<div class="course-card__label">幼児コース</div>
								<div class="course-card__price">月額 8,800円<span class="course-card__tax">(税込)</span></div>
							</div>
							<div class="course-card__item">
								<div class="course-card__label">小学生コース</div>
								<div class="course-card__price">月額 9,900円<span class="course-card__tax">(税込)</span></div>
							</div>
							<div class="course-card__item">
								<div class="course-card__label">中学生コース</div>
								<div class="course-card__price">月額 11,000円<span class="course-card__tax">(税込)</span></div>
							</div>
						</div>
					</div>

					<div class="course-card">
						<div class="course-card__title">大人向けコース<span class="course-card__time">１回30分</span></div>
						<div class="course-card__summary">15才以上の方が対象（中学生を除く）</div>
						<div class="course-card__body">
							<div class="course-card__item">
								<div class="course-card__label">お試しコース</div>
								<div class="course-card__price">月額 9,900円<span class="course-card__tax">(税込)</span></div>
								<div class="course-card__info">入会から6ヶ月限定のレッスン</div>
							</div>
							<div class="course-card__item">
								<div class="course-card__label">デイコース</div>
								<div class="course-card__price">月額 11,000円<span class="course-card__tax">(税込)</span></div>
								<div class="course-card__info">10:00-14:00のレッスン受講</div>
							</div>
							<div class="course-card__item">
								<div class="course-card__label">レギュラーコース</div>
								<div class="course-card__price">月額 13,200円<span class="course-card__tax">(税込)</span></div>
								<div class="course-card__info">14:00-21:00のレッスン受講</div>
							</div>
						</div>
					</div>

					<div class="course-card">
						<div class="course-card__title">マスター<span class="course-card__time">１回60分</span></div>
						<div class="course-card__summary">より本格的にピアノを学びたい方、音高・音大受験を目指すレッスンを行いたい方におすすめのコースです</div>
						<div class="course-card__body">
							<div class="course-card__item">
								<div class="course-card__label">マスターコース</div>
								<div class="course-card__price">月額 22,000円<span class="course-card__tax">(税込)</span></div>
							</div>
						</div>
					</div>

					<div class="course-card">
						<div class="course-card__title">その他費用</div>
						<div class="course-card__summary">より本格的にピアノを学びたい方、音高・音大受験を目指すレッスンを行いたい方におすすめのコースです</div>
						<div class="course-card__body">
							<div class="course-card__item">
								<div class="course-card__label">入会金</div>
								<div class="course-card__price">5,500円<span class="course-card__tax">(税込)</span></div>
							</div>
							<div class="course-card__item">
								<div class="course-card__label">体験レッスン</div>
								<div class="course-card__price">1,100円<span class="course-card__tax">(税込)</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="section__headline">
					現在のレッスン空き状況
				</div>
				<div class="availability">
					<div class="availability__text">
						教室の時間帯空き状況により、レッスン受講可能な曜日や時間帯が変動いたしますので下記の曜日・時間を予めご確認いただきますようお願いいたします。
					</div>
					<div class="availability__title">津田沼校</div>
					<div class="availability__list">
						<div class="availability__item">金曜 14:00 〜 16:00</div>
						<div class="availability__item">金曜 16:30 〜 19:00</div>
						<div class="availability__item">日曜 14:15 〜 15:15</div>
					</div>
					<div class="availability__title">茅ヶ崎校</div>
					<div class="availability__list">
						<div class="availability__item">水曜 10:00 〜 15:30</div>
						<div class="availability__item">水曜 16:00 〜 20:30</div>
						<div class="availability__item">金曜 15:30 〜 16:00</div>
						<div class="availability__item">金曜 17:30 〜 20:30</div>
					</div>
					<div class="availability__text">
						レッスン時間については
						<a href="https://forms.gle/hYhretfVKwrViTqp9" target="_blank">お問い合わせ</a>
						にてお気軽にご相談ください。
					</div>
				</div>

			</div>
		</section>

		<?php get_sidebar(); ?>
	</main><!-- main -->
</div><!-- main_wrap -->

<?php get_footer(); ?>