<?php
get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'seko', 		/* 投稿タイプを指定 */
	'paged' => $paged,				/* ページ番号を指定 */
	'posts_per_page' => 30,			/* 最大表示数 */
	);
query_posts( $args );
?>

<div id="mainContents" class="container-fluid wrap_inner">

<div class="main_inner row">

<?php get_sidebar(); ?>

<section id="archives_seko" class="contents_area col-sm-9">
		<h2 class="contentsTit"> <?php echo esc_html(get_post_type_object(get_post_type())->label ); ?> </h2>
		<p id="case_text01">弊社のリフォームの施工事例をご紹介します。<br />
			施工事例を元に、「こんな風にリフォームしたい」という具体的なご要望を持つことが、リフォームを成功させる秘訣です。<br />
			価格や工期、完成後の様子などを、参考としてご活用ください。</p>
<div class="other_seko">
		<ul class="bnr row">
			<li class="col-xs-12 col-sm-6 gaiheki"><a href="<?php bloginfo('url'); ?>/seko_cat/gaihekitosou">外壁塗装</a></li>
			<li class="col-xs-12 col-sm-6 yane"><a href="<?php bloginfo('url'); ?>/seko_cat/yanetosou">屋根塗装</a></li>
		</ul>
</div>
		<?php if (have_posts()) : ?>
			<!--customer_navi-->
			<div class="customer_navi clearfix">
					<div class="customer_navi_left">
							<p class="customer_red"><?php echo gr_get_posts_count(); ?>件</p>
					</div>

					<div class="customer_navi_right">
						<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
					</div>
			</div>
			<!--customer_navi-->
		<ul class="row">
			<?php
				while( have_posts() ) : the_post(); ?>
			<li class="box col-xs-12 col-sm-4<?php if($i%3==0){ echo " clear_left"; $x++; } ?> heightLine-group<?php echo $x; ?>">
				<p class="im_box">

					<!--new icon-->
					<?php
		if( post_custom('seko_newicon') ){
	 	echo "\n" . '<span class="new_icon_seko"> </span>' . "\n";
		}
    ?>
					<!--new icon-->

					<a href="<?php the_permalink(); ?>">
									<?php
									$before_pic = get_field( 'before_pic' );
									$after_pic = get_field( 'after_pic' );
									if ( post_custom( 'seko_after_image' ) ) {
										printf(
											'%s',
											gr_get_image(
												'seko_after_image',
												array( 'width' => 260, 'alt' => esc_attr( post_custom( 'seko_comment' ) ), 'class' => 'img-responsive center-block' )
											) );
									} elseif ( $after_pic ) {
										printf(
											'%s',
											gr_get_image(
												'after_pic',
												array( 'width' => 260, 'alt' => esc_attr( post_custom( 'seko_comment' ) ), 'class' => 'img-responsive center-block' )
											) );
									}elseif($before_pic){
										printf(
											'%s',
											gr_get_image(
												'before_pic',
												array( 'width' => 260, 'alt' => esc_attr( post_custom( 'seko_comment' ) ), 'class' => 'img-responsive center-block' )
											) );
									}
									?>
							<?php
								$stamp = get_field_object( 'stamp' ); //フィールドの設定情報を取得
								$value = $stamp['value']; //選択された値を取得
								$label = $stamp['choices'][ $value ];//選択された表示名（ラベル）を取得
							if($stamp){
								if($value != 'stamp-no'){
									echo '<img src="'.get_template_directory_uri().'/page_image/seko/' . $value . '.png" alt="'.$dir_array[ $value ].'" class="stamp">';
							}}
							?>

					</a></p>
				<div class="data">








<p class="icon">

<?php if ( is_object_in_term($post->ID, 'seko_cat','2') ): ?>
<span class="gaihekitosou">外壁塗装</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','54') ): ?>
<span class="gaihekitosou">外壁</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','3') ): ?>
<span class="yanetosou">屋根塗装</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','55') ): ?>
<span class="yanetosou">屋根</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','32') ): ?>
<span class="wakasa">若狭町</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','29') ): ?>
<span class="takahama">高浜町</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','28') ): ?>
<span class="kohama">小浜市</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','27') ): ?>
<span class="mihama">美浜町</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','26') ): ?>
<span class="tsuruga">敦賀市</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','50') ): ?>
<span class="maizuru">舞鶴市</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','31') ): ?>
<span class="ooi">おおい町</span>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'seko_cat','49') ): ?>
<span class="sonota">その他</span>
<?php endif; ?>

</p>






						<p class="name">

							<?php
								$seko_city = post_custom('seko_city');
								$seko_name = post_custom('seko_name');
								$city = get_field( 'city' );
								$cust_name = get_field( 'cust_name' );
								if($seko_name||$seko_city){
					echo esc_html(post_custom('seko_city')) . esc_html(post_custom('seko_name'));
					}elseif($city||$cust_name){
						echo $city.$cust_name;
					}
					 ?>
						</p>
					<p class="txt"> <span class="more"><a href="<?php the_permalink(); ?>" class="btn">詳しくはこちら</a></span></p>
				</div>
			</li>
			<?php
				$i++;
				endwhile;
				?>
		</ul>
		<!--customer_navi-->
		<div class="customer_navi clearfix">
				<div class="customer_navi_left">
						<p class="customer_red"><?php echo gr_get_posts_count(); ?>件</p>
				</div>

				<div class="customer_navi_right">
					<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
				</div>
		</div>
		<!--customer_navi-->
		<?php endif; ?>
	<?php wp_reset_query(); ?>
</section>

</div>
</div>
<?php get_footer(); ?>
