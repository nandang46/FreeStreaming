<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('input/function.php');


$meta_title  = 'Live Sports';
$meta_description  = 'asfasfas';
$meta_keyword  = 'Live Sports,sdgsdg,';
$affliasi    = 'https://www.facebook.com/galih.sophian.50';
$id_histats    = '999999';
$url_web  = 'https://d19.4watchmovie.online'; // contoh : https://www.facebook.com/galih.sophian.50
$url_dmca  = 'd19.4watchmovie.online'; // contoh : https://www.facebook.com/galih.sophian.50

 // OFFER SPORTS 
$offer_baseball  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_boxing  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_bundesliga  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_champions_league  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_copa_america  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_eredivisie  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_euro  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_europa_league  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_football  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_formula  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_international  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_la_liga  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_ligue  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_mlb  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_mls  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_moto_gp  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_nba  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_ncaam  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_ncaaf  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_nfl  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_nhl  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_premier_league  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_serie_a  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_soccer  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_softball  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_tennis  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_ufc  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';
$offer_volleyball  = 'https://affcpatrk.com/link?id=652a7d0ebd6280ca62bf8707';

 // Gambar Player : Keterangan, ganti link gambar dibawah sesuai keinginan anda, bsa cari gambar d google dgn cara copy link image
$baseball  = 'https://i.ytimg.com/vi/BCox92TozF0/maxresdefault.jpg';
$boxing  = 'https://cdn.newsapi.com.au/image/v1/fc1288f9cac7f70acfee35e2538be0a0?width=700';
$bundesliga  = 'https://cdn.newsapi.com.au/image/v1/fc1288f9cac7f70acfee35e2538be0a0?width=700';
$champions_league  = 'https://img.uefa.com/imgml/uefacom/ucl/social/og-default.jpg';
$copa_america  = 'https://usatthebiglead.files.wordpress.com/2016/06/usatsi_9357877_153192880_lowres.jpg';
$eredivisie  = 'https://layout.eurosport.com/i/v8/match/backgrounds/large/background_v8_s22.jpg';
$euro  = 'https://europe.stripes.com/sites/default/files/styles/news_node_for_responsive/public/27636443_l.jpg?itok=zSdf0FnV';
$europa_league  = 'https://shamrockrovers.ie/wp-content/uploads/2017/07/EUROPA-LEAGUE-2122-by-1230-2.png';
$football  = 'https://gopack.com/images/2019/1/16/CarterFinley_2018.jpg';
$formula  = 'https://data1.ibtimes.co.in/cache-img-0-450/en/full/522885/1402135935_fernando-alonso-ferrari.jpg';
$international  = 'https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/jVhILry/videoblocks-international-business-animated-wallpaper_beexwyzqwm_thumbnail-full04.png';
$la_liga  = 'https://media.dhakatribune.com/uploads/2018/08/laliga-1534239805985.jpg';
$ligue  = 'https://www.101greatgoals.com/wp-content/uploads/2016/02/maxresdefault1.jpg';
$mlb  = 'https://www.thestlouisegotist.com/wp-content/uploads/sites/6/2018/10/MLB-WORLD-SERIES-2018-Los-Angeles-Dodgers-vs-Boston-Red-Sox-Live-Stream-Free-Game-1-Online1.jpg';
$mls  = 'https://cdn.vox-cdn.com/thumbor/o0KF_gDr6t5cjJKI2qDbDE3S_2I=/0x0:620x350/1200x800/filters:focal(262x120:360x218)/cdn.vox-cdn.com/uploads/chorus_image/image/61128197/mls_logo.0.png';
$moto_gp  = 'https://ketemulagi.com/wp-content/uploads/2016/09/Jadwal-MotoGP-2017-Lengkap-2.jpg';
$nba  = 'https://cdn.nba.net/nba-drupal-prod/styles/landscape_1045w/s3/2018-08/leaguev3.jpeg?itok=Sgxvv0vh';
$ncaam  = 'https://s3.amazonaws.com/smsumustangs.com/images/2017/2/15/NCAAMBBlogo.jpg';
$ncaaf  = 'http://images.tritondigitalcms.com/6616/sites/981/2017/12/05101902/camellia-bowl-logo-630x488.png';
$nfl  = 'https://3.bp.blogspot.com/-ETKENqzEHC0/W3SUOU97oiI/AAAAAAAAAHw/1UBfUtlIEUQer771NB2go4de25dI4WtqwCLcBGAs/s640/NFL%252BLive%252BOnline.jpg';
$nhl  = 'https://wallpapercave.com/wp/dG0roJu.jpg';
$premier_league  = 'https://cdn1.thecomeback.com/wp-content/uploads/sites/94/2013/08/epl.jpg';
$serie_a  = 'https://www.napolisport.net/wp-content/uploads/2018/08/serie-a.jpg';
$soccer  = 'https://www.wallpaperup.com/uploads/wallpapers/2015/11/08/831528/5852e383c694370899ce214d249ffe42-700.jpg';
$softball  = 'https://gopack.com/common/controls/image_handler.aspx?thumb_prefix=rp_primary&image_path=/images/2018/8/29/HelmetBallBat.jpg';
$tennis  = 'https://bloximages.newyork1.vip.townnews.com/southbendtribune.com/content/tncms/assets/v3/editorial/1/21/1216bbb5-8e12-5dc4-8674-329468528375/5af81423deea5.image.jpg';
$ufc  = 'https://wpblink.com/sites/default/files/wallpaper/sports/74051/ufc-wallpapers-hd-74051-8806829.png';
$volleyball  = 'https://www.theindianwire.com/wp-content/uploads/2018/08/DSC_0082.jpg';
define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );