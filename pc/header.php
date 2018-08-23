<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="shortcut icon" href="/wp-content/themes/gaiheki/images/favicon.ico">
	<title>岡本ペンキ</title>
	<!-- Bootstrap -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/theme.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/allpage.css" rel="stylesheet">
	<?php if(is_page('19855' ) ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/hyosyo.css" rel="stylesheet">
	<?php endif; ?>
	<?php if(is_page('23016' ) ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/shindan.css" rel="stylesheet">
	<?php endif; ?>
	<?php if(is_page('23037' ) ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/amamori.css" rel="stylesheet">
	<?php endif; ?>
	<?php if(array('19872','19874','19869','20083') ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/asecplan.css" rel="stylesheet">
	<?php endif; ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/font.css" rel="stylesheet">
	<?php if ( is_home() || is_front_page() ) : //トップページ
	?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/common/css/slick.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/common/css/slick-theme.css" rel="stylesheet">

	<?php else : //下層全ページ
	?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/page.css" rel="stylesheet">
	<? endif; ?>
	<?php if ( is_page(30)) : //会社案内:company
?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/company.css" rel="stylesheet">
	<? elseif ( is_page(40)) : //サイトマップ:sitemap
?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/sitemap.css" rel="stylesheet">
	<? elseif ( is_page(37)) : //プライバシーポリシー:privacy
?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/privacy.css" rel="stylesheet">
	<? elseif ( is_page(20419)) : //カラーシミュレーション:color
?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/color.css" rel="stylesheet">
	<? elseif ( is_page(17116)) : //リフォームの流れ:reformnagare
?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/reformnagare.css" rel="stylesheet">
	<? elseif(is_post_type_archive('staff')): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/staff.css" rel="stylesheet">
	<? elseif(is_post_type_archive('voice')): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/voice.css" rel="stylesheet">
	<? elseif(is_post_type_archive('seko')||is_singular( 'seko' )||is_tax('seko_cat') ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/seko.css" rel="stylesheet">
	<? elseif(is_post_type_archive('genbanikki')||is_singular( 'genbanikki' ) ): ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/genba.css" rel="stylesheet">
	<?php elseif(is_page(2423)|| is_page(2429)|| is_singular('event')|| is_page(17638)): ?>

        <!-- お問い合わせ -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/contact.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
	<script type="text/javascript">
		$( function () {
			$( '#zip' ).keyup( function ( event ) {
				AjaxZip3.zip2addr( this, '', 'ken', 'address' );
			} )
		} )
	</script>
	<!-- /郵便番号 -->
	<script>
		jQuery( document ).ready( function () {
			jQuery( "#formID" ).validationEngine();
		} );
	</script>
	<script type="text/javascript">
		jQuery( document ).ready( function () {
			jQuery( "#name" ).addClass( "validate[required]" );
			jQuery( "#huri" ).addClass( "validate[required]" );
			jQuery( "#add" ).addClass( "validate[required]" );
			jQuery( "#email" ).addClass( "validate[required,custom[email]]" );
			jQuery( "#url" ).addClass( "validate[required,custom[url]]" );
			jQuery( "#tel" ).addClass( "validate[custom[phone]]" );
			jQuery( "#radio01 input" ).addClass( "validate[required]" );
			jQuery( "#radio02 input" ).addClass( "validate[required]" );
			jQuery( "#message" ).addClass( "validate[required]" );
			jQuery( "#ken" ).addClass( "validate[required]" );
			jQuery( "#subject" ).addClass( "validate[required]" );
			jQuery( "#sankasu" ).addClass( "validate[required]" );
			jQuery( "#tell" ).addClass( "validate[required]" );


		} );
	</script>
	<style type="text/css">
		.wpcf7-not-valid-tip {
			display: none !important;
		}

		span.wpcf7-form-control-wrap {
			position: static !important;
		}

		.formError .formErrorContent {
			border: none !important;
			box-shadow: none !important;
		}

		.formError .formErrorArrow div {
			border-left: none !important;
			border-right: none !important;
			box-shadow: none !important;
		}

		#request_area table tr:hover {
			background-color: #FEFBF3;
		}
	</style>
	<!-- /お問い合わせ -->
	<?php endif; ?>

	<script>
		( function ( i, s, o, g, r, a, m ) {
			i[ 'GoogleAnalyticsObject' ] = r;
			i[ r ] = i[ r ] || function () {
				( i[ r ].q = i[ r ].q || [] ).push( arguments )
			}, i[ r ].l = 1 * new Date();
			a = s.createElement( o ),
				m = s.getElementsByTagName( o )[ 0 ];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore( a, m )
		} )( window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga' );

		ga( 'create', 'UA-88157721-1', 'auto' );
		ga( 'send', 'pageview' );
	</script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<section id="contents_wrap">
		<header id="head" class="wrap_inner container-fluid">
			<div class="row">
				<h1 id="head_logo" class="col-sm-5 col-lg-6 col-xs-8"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header/head_logo.png" width="401" height="70" class="img-responsive" alt="株式会社岡本ペンキ"></a></h1>
				<ul class="contact col-sm-7 col-lg-6 col-xs-4">
					<li class="tel"><img src="<?php echo get_template_directory_uri(); ?>/images/header/head_img_pc.gif" width="318" height="85" alt="プロタイムズ加盟店は全国120店舗以上" class="sp_none img-responsive"><a href="tel:0120-17-1616"><img src="<?php echo get_template_directory_uri(); ?>/images/header/head_mail_sp.png" width="93" height="93" alt="電話する" class="img-responsive pc_none"></a>
					</li>
					<li class="mail"><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/images/header/head_tel_pc.gif" width="260" height="54" alt="お電話はこちら" class="sp_none img-responsive"></a><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/images/header/head_tel_sp.png" width="93" height="93" alt=" メニュー" class="img-responsive"></button>
					</li>
				</ul>
			</div>
		</header>
		<p id="head_h2" class="sp_none"><span class="wrap_inner">プロタイムズ敦賀店　岡本ペンキ店｜福井県・敦賀市の外壁塗装専門店！地元で愛され６９年</span>
		</p>
		<div id="head_nav">
			<nav class="navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="defaultNavbar1">
					<ul class="nav navbar-nav">
						<li class="bar"><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
						<li class="dropdown bar"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">会社案内</a>
						<ul class="dropdown-menu">
							<li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
								<li><a href="<?php bloginfo('url'); ?>/staff">スタッフ紹介</a></li>
							    <li><a href="<?php bloginfo('url'); ?>/flow">お問い合わせの流れ</a></li>
							    <li><a href="<?php bloginfo('url'); ?>/hyosyo">表彰実績</a></li>
							</ul>
						</li>
						<li class="dropdown bar"><a href="<?php bloginfo('url'); ?>/seko" role="button" aria-haspopup="true" aria-expanded="false">施工事例</a>
						<ul class="dropdown-menu">
							<li><a href="/seko/">施工事例 一覧(
				          <?php $args = array(
							'post_type' => 'seko', /* 投稿タイプを指定 */
							'paged' => $paged,		/* ページ番号を指定 */
							);
							query_posts( $args );
							 echo gr_get_posts_count();
							?>件)</a>
							</li>
                    <?php wp_list_categories('title_li=&show_count=1&taxonomy=seko_cat&tag_ID=3&exclude='
                            . '32,'
                            . '29,'
                            . '28,'
                            . '27,'
                            . '55,'
                            . '54,'
                            . '26,'
                            . '50,'
                            . '31,'
                            . '49'
                       );
											 wp_reset_query();?>

<!--							<li><a href="<?php bloginfo('url'); ?>/seko_cat/gaihekitosou">外壁塗装</a></li>
							<li><a href="<?php bloginfo('url'); ?>/seko_cat/yanetosou">屋根塗装</a></li>-->
							</ul>
						</li>
						<li class="bar"><a href="<?php bloginfo('url'); ?>/voice">お客様の声</a></li>
						<li class="dropdown bar line2"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="pc_br">塗料プラン</span>サービス</a>
						<ul class="dropdown-menu">
								<li><a href="<?php bloginfo('url'); ?>/flow">お問合わせの流れ</a></li>
								<li><a href="<?php bloginfo('url'); ?>/plan">塗料プラン紹介</a></li>
								<li><a href="<?php bloginfo('url'); ?>/asecplan">プロタイムズオリジナル塗料紹介</a></li>
								<li><a href="<?php bloginfo('url'); ?>/color">カラーシミュレーション</a></li>
								<li><a href="<?php bloginfo('url'); ?>/iromihon">アステックカラーバリエーション</a></li>
								<li><a href="<?php bloginfo('url'); ?>/loan">便利な支払い分割ローン</a></li>
								<li><a href="<?php bloginfo('url'); ?>/video">おすまいビデオ診断</a></li>
							</ul>
						</li>
						<li class="dropdown bar last line2"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="pc_br">塗装の</span>お役立ち情報</a>
							<ul class="dropdown-menu">
								<li><a href="<?php bloginfo('url'); ?>/point">業者選びの7つのポイント</a></li>
								<li><a href="<?php bloginfo('url'); ?>/nurikae">塗り替え時期診断</a></li>
								<li><a href="<?php bloginfo('url'); ?>/iroerabi">外壁塗装の色選び</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
				<!-- /.container-fluid -->
			</nav>
		</div>
