<?php require_once('config.php');?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="theme-color" content="#111111">
					<title itemprop="name"><?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> | <?php echo $meta_title;?></title>
        <meta name="description" content="<?php echo $meta_description;?>">
        <meta name="keywords" content="<?php echo $meta_keyword;?>" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="author" content="admin">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="<?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> | <?php echo $meta_title;?>" />
        <meta property="og:description" content="<?php echo $meta_description;?>">
        <meta property="og:type" content="website" />
        <meta property="og:author" content="Admin">
        <meta property="og:site_name" content="<?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> | <?php echo $meta_title;?>">
        <meta property="og:url" content="<?php echo $url_web;?>" />
        <meta property="og:image" content="<?php echo $nhl;?>" />
								<meta property="og:locale" content="en_US">
									<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> | <?php echo $meta_title;?>">
		<link rel="stylesheet" id="bootstrap-css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="jasny-css" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="awesome-css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="simple-css" href="//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="google-font" href="//fonts.googleapis.com/css?family=Oswald|Open+Sans" type="text/css" media="all">
		<link rel="stylesheet" id="style-font" href="/css/style.min.css" media="all">
		<link rel="shortcut icon" href="https://pngimage.net/wp-content/uploads/2018/06/live-streaming-icon-png-5.png">




<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops?match="});
//]]>
</script>

		</head>
		<body class=" movie single">
								<header>
									<div class="navbar navbar-default navbar-fixed-top">
<div class="container">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			<span class="icon-options-vertical"></span>
		</button>
		<a class="navbar-brand" href="<?php echo $url_web;?>"> <?php echo $meta_title;?></a>
	</div>
    <nav class="collapse navbar-collapse" id="main-navbar">

	                <ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Soccer</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
						  <li class="dropdown-submenu">
							<a class="submenu" href="premier-league.php?match=Premier+League LIVE&live="><span style="color: #a61111;">Premier League</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="premier-league.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="la-liga.php?match=La Liga LIVE&live="><span style="color: #a61111;">La Liga</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="la-liga.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="ligue-1.php?match=Ligue 1 LIVE&live="><span style="color: #a61111;">Ligue 1</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="ligue-1.php?match= LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="serie-a.php?match=Serie A LIVE&live="><span style="color: #a61111;">Serie A</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="serie-a.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="bundesliga.php?match=Bundesliga LIVE&live="><span style="color: #a61111;">Bundesliga</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="bundesliga.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="eredivisie.php?match=Eredivisie LIVE&live="><span style="color: #a61111;">Eredivisie</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="eredivisie.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="mls.php?match=MLS LIVE&live="><span style="color: #a61111;">MLS</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="mls.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="champions-league.php?match=Champions League LIVE&live="><span style="color: #a61111;">Champions League</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="champions-league.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="europa-league.php?match=Europa League LIVE&live="><span style="color: #a61111;">Europa League</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="europa-league.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="copa-america.php?match=Copa America LIVE&live="><span style="color: #a61111;">Copa America</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="copa-america.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="euro.php?match=EURO LIVE&live="><span style="color: #a61111;">EURO</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="euro.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="international.php?match=International Match LIVE&live="><span style="color: #a61111;">International Match</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="international.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NFL</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="nfl.php?match=NFL LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NHL</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="nhl.php?match=NHL LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NBA</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="nba.php?match=NBA LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Boxing</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="boxing.php?match=Boxing LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>UFC</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="ufc.php?match=UFC LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Formula 1</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="formula-1.php?match=Formula 1 LIVE&live="><span style="color: #a61111;">Live Race</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NCAAM</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="ncaam.php?match=NCAAM LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>MLB</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="mlb.php?match=MLB LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NCAAF</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="ncaaf.php?match=NCAAF LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>More</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="baseball.php?match=Baseball LIVE&live="><span style="color: #a61111;" value="Baseball">Baseball</span></a></li>
							<li><a href="baseball.php?match=Baseball LIVE&live="><span style="color: #a61111;" value="Basketball(B)">Basketball(B)</span></a></li>
							<li><a href="baseball.php?match=Baseball LIVE&live="><span style="color: #a61111;" value="Basketball(G)">Basketball(G)</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="Cheer">Cheer</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="CrossCountry(B)">CrossCountry(B)</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="CrossCountry(G)">CrossCountry(G)</span></a></li>
							<li><a href="football.php?match=Football LIVE&live="><span style="color: #a61111;" value="Football">Football</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="Golf">Golf</span></a></li>
							<li><a href="soccer.php?match=Soccer LIVE&live="><span style="color: #a61111;" value="Soccer(B)">Soccer(B)</span></a></li>
							<li><a href="soccer.php?match=Soccer LIVE&live="><span style="color: #a61111;" value="Soccer(G)">Soccer(G)</span></a></li>
							<li><a href="softball.php?match=Softball LIVE&live="><span style="color: #a61111;" value="Softball">Softball</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="Swimming(B)">Swimming(B)</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="Swimming(G)">Swimming(G)</span></a></li>
							<li><a href="tennis.php?match=Tennis LIVE&live="><span style="color: #a61111;" value="Tennis(B)">Tennis(B)</span></a></li>
							<li><a href="tennis.php?match=Tennis LIVE&live="><span style="color: #a61111;" value="Tennis(G)">Tennis(G)</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="Track(B)">Track(B)</span></a></li>
							<li><a href="#"><span style="color: #a61111;" value="Track(G)">Track(G)</span></a></li>
							<li><a href="volleyball.php?match=Volleyball LIVE&live="><span style="color: #a61111;" value="Volleyball">Volleyball</span></a></li>
						</ul>
					</li>
					<li><a href="#" class="button" data-toggle="modal" data-target="#player-modal"><span class="icon fa fa-user-circle-o"></span>Login</a>
					</li>
                </ul>
				</nav>
			</div>
		</div>
	</header>
<div id="main">
   <div id="home" class="clearfix">
      <div class="container">
         <section class="col-md-12">
            <h3 class="widget-title">
               <span>Live Match</span>
            </h3>
            <div class="col-container clearfix">
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $boxing;?>" alt="Boxing">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/boxing.php?match=Boxing Live&live=">Boxing</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/boxing.php?match=Boxing Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $mlb;?>" alt="MLB">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/mlb.php?match=MLB Live&live=">MLB</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/mlb.php?match=MLB Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $moto_gp;?>" alt="MOTO GP">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/moto-gp.php?match=MOTO GP Live&live=">MOTO GP</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="moto-gp.php?match=MOTO GP Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $nba;?>" alt="NBA">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/nba.php?match=NBA Live&live=">NBA</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/nba.php?match=NBA Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $ncaam;?>" alt="NCAAM">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/ncaam.php?match=NCAAM Live&live=">NCAAM</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/ncaam.php?match=NCAAM Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $ncaaf;?>" alt="NCAAF">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/ncaaf.php?match=NCAAF Live&live=">NCAAF</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/ncaaf.php?match=NCAAF Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $nfl;?>" alt="NFL">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/nfl.php?match=NFL Live&live=">NFL</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/nfl.php?match=NFL Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $nhl;?>" alt="NHL">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/nhl.php?match=NHL Live&live=">NHL</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/nhl.php?match=NHL Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $soccer;?>" alt="SOCCER">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/soccer.php?match=SOCCER Live&live=">SOCCER</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/soccer.php?match=SOCCER Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>

               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $tennis;?>" alt="TENNIS">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/tennis.php?match=TENNIS Live&live=">TENNIS</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/tennis.php?match=TENNIS Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $ufc;?>" alt="UFC">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/ufc.php?match=UFC Live&live=">UFC</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/ufc.php?match=UFC Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
               <article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
                  <div class="backdrop-container">
                     <img class="img-responsive ease" style="width: 370px; height:208px;" src="<?php echo $volleyball;?>" alt="VOLLEYBALL">
                     <span class="img-cover"></span>
                  </div>
                  <div class="detail-container ease">
                     <span class="star">
                     <span class="glyphicon glyphicon-bookmark"></span>
                     <span class="rate">HD</span>
                     </span>
                     <header class="entry-header">
                        <h2 class="entry-title text-center">
                           <a href="/volleyball.php?match=VOLLEYBALL Live&live=">VOLLEYBALL</a>
                        </h2>
                     </header>
                     <div class="play-btn">
                        <a href="/soccer.php?match=VOLLEYBALL Live&live=">
                        <span class="play-btn-border ease">
                        <i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
                        </span>
                        </a>
                     </div>
                  </div>
               </article>
            </div>
         </section>
      </div>
   </div>
</div>
<div id="player-modal" class="modal fade nocontext">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-center"> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> LIVE STREAMING</div>
			<div class="modal-body">
				<img class="img-responsive" src="/images/pop.png" width="780" height="439" alt="Aquaman">
					<span class="img-cover"></span>
					<span class="offerlay ease"></span>
					<span class="modal-text ease">Join the network of satisfied members and try this service for 
						<strong>Free.</strong> Fill out the signup form and 
						<strong>start watching instantly.</strong>
					</span>
					<div class="modal-ft ease">
						<ul>
							<li>
								<span class="icon icon-film"></span> Unlimited Access
							</li>
							<li>
								<span class="icon icon-magnifier"></span> Search for Anything
							</li>
							<li>
								<span class="icon icon-ban"></span> Ads Free
							</li>
							<li>
								<span class="icon icon-screen-desktop"></span> All Platforms
							</li>
						</ul>
					</div>
				</div>
				<div class="modal-footer">
					<div class="text-center">
						<button class="btn btn-warning btn-lg btn-responsive" onclick="window.location.href='/sign-in.php?match=<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Sign In
						</button>
						<button class="btn btn-success btn-lg btn-responsive" onclick="window.location.href='<?php echo $offer_serie_a;?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Create Free Account
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>