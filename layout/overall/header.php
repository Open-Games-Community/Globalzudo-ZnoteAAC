<html xmlns="http://www.w3.org/1999/xhtml" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script src="files/diffuser.js.téléchargement" async=""></script>
<script type="text/javascript" async="" src="files/recaptcha__es.js.téléchargement" crossorigin="anonymous" integrity="sha384-ZPMuNoDZ03fyq7pTC+g0MvvlrbFNCDaFT+RlkQ5uOXrZK6cTsv0F1nCfk8oblDIM"></script>
<script async="" src="files/fbevents.js.téléchargement"></script><script async="" src="files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-212860524-1');
</script>

<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '403906054721008');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=403906054721008&ev=PageView&noscript=1"
/></noscript>


<meta http-equiv="content-language" content="en">

<base href=".">
<title>Global Server</title>
<link rel="stylesheet" type="text/css" href="files/messages.css">
<script type="text/javascript" src="files/jquery.min.js.téléchargement"></script>
<noscript>
		<div class="warning" style="text-align: center; font-size: 14px;">Your browser does not support JavaScript or its disabled!<br/>
			Please turn it on, or be aware that some features on this website will not work correctly.</div>
	</noscript>
<script src="files/api.js.téléchargement"></script> 
<link rel="shortcut icon" href="files/e1b654104803533.Y3JvcCw0MDQsMzE2LDIwOCwyNTI.png" type="image/x-icon">
<link rel="icon" href="files/e1b654104803533.Y3JvcCw0MDQsMzE2LDIwOCwyNTI.png" type="image/x-icon">
<link href="files/basic.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="files/bootstrap.css">
<link href="files/sweetalert2.min.css" rel="stylesheet" type="text/css">
<link href="files/datatables.min.css" rel="stylesheet" type="text/css">
<link href="files/all.css" rel="stylesheet" type="text/css">
<script src="files/jquery-2.2.3.min.js.téléchargement" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="files/basic.js.téléchargement"></script>
<script type="text/javascript" src="files/ticker.js.téléchargement"></script>
<script id="twitter-wjs" src="files/twitter.js.téléchargement"></script>
<script id="facebook-jssdk" async="" src="files/facebook.js.téléchargement"></script>
<script type="text/javascript" src="files/jquery.flipcountdown.js.téléchargement"></script>
<link rel="stylesheet" type="text/css" href="files/jquery.flipcountdown.css">
<script type="text/javascript" src="files/bootstrap.js.téléchargement"></script>
<script type="text/javascript" src="files/bootstrap.bundle.js.téléchargement"></script>
<script type="text/javascript" src="files/jquery.form.js.téléchargement"></script>
<script type="text/javascript" src="files/swel.js.téléchargement"></script>
<script type="text/javascript" src="files/lost_account.js.téléchargement"></script>
<script type="text/javascript" src="files/buychar.js.téléchargement"></script>
<link href="files/facebook.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
		var loginStatus="false";
				var activeSubmenuItem="news";
		var IMAGES="files";
		var LINK_ACCOUNT="index.php";

		function rowOverEffect(object) {
			if (object.className == 'moduleRow') object.className = 'moduleRowOver';
		}

		function rowOutEffect(object) {
			if (object.className == 'moduleRowOver') object.className = 'moduleRow';
		}

		function InitializePage() {
		  LoadLoginBox();
		  LoadMenu();
		}

		// initialisation of the loginbox status by the value of the variable 'loginStatus' which is provided to the HTML-document by PHP in the file 'header.inc'
		function LoadLoginBox()
		{
		  if(loginStatus == "false") {
			document.getElementById('LoginstatusText_1').style.backgroundImage = "url('" + IMAGES + "loginbox-font-you-are-not-logged-in.gif')";
			document.getElementById('ButtonText').style.backgroundImage = "url('" + IMAGES + "_sbutton_login.gif')";
			document.getElementById('LoginstatusText_2').style.backgroundImage = "url('" + IMAGES + "loginbox-font-create-account.gif')";
			document.getElementById('LoginstatusText_2_1').style.backgroundImage = "url('" + IMAGES + "loginbox-font-create-account.gif')";
			document.getElementById('LoginstatusText_2_2').style.backgroundImage = "url('" + IMAGES + "loginbox-font-create-account-over.gif')";
		  } else {
			document.getElementById('LoginstatusText_1').style.backgroundImage = "url('" + IMAGES + "loginbox-font-welcome.gif')";
			document.getElementById('ButtonText').style.backgroundImage = "url('" + IMAGES + "_sbutton_myaccount.gif')";
			document.getElementById('LoginstatusText_2').style.backgroundImage = "url('" + IMAGES + "loginbox-font-logout.gif')";
			document.getElementById('LoginstatusText_2_1').style.backgroundImage = "url('" + IMAGES + "loginbox-font-logout.gif')";
			document.getElementById('LoginstatusText_2_2').style.backgroundImage = "url('" + IMAGES + "loginbox-font-logout-over.gif')";
		  }
		}

		// mouse-over and click events of the loginbox
		function MouseOverLoginBoxText(source)
		{
		  source.lastChild.style.visibility = "visible";
		  source.firstChild.style.visibility = "hidden";
		}
		function MouseOutLoginBoxText(source)
		{
		  source.firstChild.style.visibility = "visible";
		  source.lastChild.style.visibility = "hidden";
		}
		function LoginButtonAction()
		{
		  if(loginStatus == "false") {
			window.location = "myaccount.php";
		  } else {
			window.location = "myaccount.php";
		  }
		}
		
		
		
		
		function LoginstatusTextAction(source) {
		  if(loginStatus == "false") {
			window.location = "register.php";
		  } else {
			window.location = "logout.php";
		  }
		}

		var menu = new Array();
		menu[0] = new Object();
		var unloadhelper = false;

		// load the menu and set the active submenu item by using the variable 'activeSubmenuItem'
		function LoadMenu()
		{
		  document.getElementById("submenu_"+activeSubmenuItem).style.color = "white";
		  document.getElementById("ActiveSubmenuItemIcon_"+activeSubmenuItem).style.visibility = "visible";
		  if(self.name.lastIndexOf("&") == -1) {
			self.name = "news=1&account=0&community=0&library=0&forum=0&shops=0&";
		  }
		  FillMenuArray();
		  InitializeMenu();
		}

		function SaveMenu()
		{
		  if(unloadhelper == false) {
			SaveMenuArray();
			unloadhelper = true;
		  }
		}

		// store the values of the variable 'self.name' in the array menu
		function FillMenuArray()
		{
		  while(self.name.length > 0 ){
			var mark1 = self.name.indexOf("=");
			var mark2 = self.name.indexOf("&");
			var menuItemName = self.name.substr(0, mark1);
			menu[0][menuItemName] = self.name.substring(mark1 + 1, mark2);
			self.name = self.name.substr(mark2 + 1, self.name.length);
		  }
		}

		// hide or show the corresponding submenus
		function InitializeMenu()
		{
		  for(menuItemName in menu[0]) {
			if(menu[0][menuItemName] == "0") {
			  document.getElementById(menuItemName+"_Submenu").style.visibility = "hidden";
			  document.getElementById(menuItemName+"_Submenu").style.display = "none";
			  document.getElementById(menuItemName+"_Lights").style.visibility = "visible";
			  document.getElementById(menuItemName+"_Extend").style.backgroundImage = "url(" + IMAGES + "plus.gif)";
			}
			else {
			  document.getElementById(menuItemName+"_Submenu").style.visibility = "visible";
			  document.getElementById(menuItemName+"_Submenu").style.display = "block";
			  document.getElementById(menuItemName+"_Lights").style.visibility = "hidden";
			  document.getElementById(menuItemName+"_Extend").style.backgroundImage = "url(" + IMAGES + "minus.gif)";
			}
		  }
		}

		// reconstruct the variable "self.name" out of the array menu
		function SaveMenuArray()
		{
		  var stringSlices = "";
		  var temp = "";
		  for(menuItemName in menu[0]) {
			stringSlices = menuItemName + "=" + menu[0][menuItemName] + "&";
			temp = temp + stringSlices;
		  }
		  self.name = temp;
		}

		// onClick open or close submenus
		function MenuItemAction(sourceId)
		{
		  if(menu[0][sourceId] == 1) {
			CloseMenuItem(sourceId);
		  }
		  else {
			OpenMenuItem(sourceId);
		  }
		}
		function OpenMenuItem(sourceId)
		{
		  menu[0][sourceId] = 1;
		  document.getElementById(sourceId+"_Submenu").style.visibility = "visible";
		  document.getElementById(sourceId+"_Submenu").style.display = "block";
		  document.getElementById(sourceId+"_Lights").style.visibility = "hidden";
		  document.getElementById(sourceId+"_Extend").style.backgroundImage = "url(" + IMAGES + "minus.gif)";
		}
		function CloseMenuItem(sourceId)
		{
		  menu[0][sourceId] = 0;
		  document.getElementById(sourceId+"_Submenu").style.visibility = "hidden";
		  document.getElementById(sourceId+"_Submenu").style.display = "none";
		  document.getElementById(sourceId+"_Lights").style.visibility = "visible";
		  document.getElementById(sourceId+"_Extend").style.backgroundImage = "url(" + IMAGES + "plus.gif)";
		}

		// mouse-over effects of menubuttons and submenuitems
		function MouseOverMenuItem(source)
		{
		  source.firstChild.style.visibility = "visible";
		}
		function MouseOutMenuItem(source)
		{
		  source.firstChild.style.visibility = "hidden";
		}
		function MouseOverSubmenuItem(source)
		{
		  source.style.backgroundColor = "#360c4e";
		}
		function MouseOutSubmenuItem(source)
		{
		  source.style.backgroundColor = "#1e082b";
		}
	</script>
<style>
        .swal2-popup {
            font-size: 15px;
        }
        .swal2-popup .swal2-title {
            font-size: 15px;
        }
    </style>
<script type="text/javascript">
        function showFrontendAlert(type, message){
            if(type == 'danger'){
                type = 'error';
            }
            swal({
                position: 'top-end',
                type: type,
                title: message,
                showConfirmButton: false,
                timer: 60000
            });
        }
    </script>
<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}
.fb_invisible{display:none}
.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}
.fb_reset > div{overflow:hidden}
.fb_link img{border:none}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}
.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}
.fb_dialog_content{background:#fff;color:#333}
.fb_dialog_close_icon{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px;top:8px\9;right:7px\9}
.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}
.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}
.fb_dialog_close_icon:hover{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_close_icon:active{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_loader{background-color:#f2f2f2;border:1px solid #606060;font-size:24px;padding:20px}
.fb_dialog_top_left,
.fb_dialog_top_right,
.fb_dialog_bottom_left,
.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}
.fb_dialog_top_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}
.fb_dialog_top_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}
.fb_dialog_bottom_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}
.fb_dialog_bottom_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}
.fb_dialog_vert_left,
.fb_dialog_vert_right,
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}
.fb_dialog_vert_left,
.fb_dialog_vert_right{width:10px;height:100%}
.fb_dialog_vert_left{margin-left:-10px}
.fb_dialog_vert_right{right:0;margin-right:-10px}
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{width:100%;height:10px}
.fb_dialog_horiz_top{margin-top:-10px}
.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}
.fb_dialog_iframe{line-height:0}
.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3b5998;color:#fff;font-size:14px;font-weight:bold;margin:0}
.fb_dialog_content .dialog_title > span{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif)
no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}
body.fb_hidden{-webkit-transform:none;height:100%;margin:0;left:-10000px;overflow:visible;position:absolute;top:-10000px;width:100%
}
.fb_dialog.fb_dialog_mobile.loading{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif)
white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}
.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}
#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}
#fb-root #fb_dialog_ipad_overlay.hidden{display:none}
.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}
.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0 0, 0 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}
.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%
}
.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0 0, 0 100%, from(#4966A6),
color-stop(0.5, #355492), to(#2A4887));border:1px solid #29447e;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset,
rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}
.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}
.fb_dialog_content .dialog_content{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}
.fb_dialog_content .dialog_footer{background:#f2f2f2;border:1px solid #555;border-top-color:#ccc;height:40px}
#fb_dialog_loader_close{float:left}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
.fb_iframe_widget{display:inline-block;position:relative}
.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}
.fb_iframe_widget iframe{position:absolute}
.fb_iframe_widget_lift{z-index:1}
.fb_hide_iframes iframe{position:relative;left:-10000px}
.fb_iframe_widget_loader{position:relative;display:inline-block}
.fb_iframe_widget_fluid{display:inline}
.fb_iframe_widget_fluid span{width:100%}
.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}
.fb_iframe_widget_loader .FB_Loader{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_connect_bar_container div,
.fb_connect_bar_container span,
.fb_connect_bar_container a,
.fb_connect_bar_container img,
.fb_connect_bar_container strong{background:none;border-spacing:0;border:0;direction:ltr;font-style:normal;font-variant:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal;vertical-align:baseline}
.fb_connect_bar_container{position:fixed;left:0 !important;right:0 !important;height:42px !important;padding:0 25px !important;margin:0 !important;vertical-align:middle !important;border-bottom:1px solid #333 !important;background:#3b5998 !important;z-index:99999999 !important;overflow:hidden !important}
.fb_connect_bar_container_ie6{position:absolute;top:expression(document.compatMode=="CSS1Compat"? document.documentElement.scrollTop+"px":body.scrollTop+"px")}
.fb_connect_bar{position:relative;margin:auto;height:100%;width:100%;padding:6px 0 0 0 !important;background:none;color:#fff !important;font-family:"lucida grande", tahoma, verdana, arial, sans-serif !important;font-size:13px !important;font-style:normal !important;font-variant:normal !important;font-weight:normal !important;letter-spacing:normal !important;line-height:1 !important;text-decoration:none !important;text-indent:0 !important;text-shadow:none !important;text-transform:none !important;white-space:normal !important;word-spacing:normal !important}
.fb_connect_bar a:hover{color:#fff}
.fb_connect_bar .fb_profile img{height:30px;width:30px;vertical-align:middle;margin:0 6px 5px 0}
.fb_connect_bar div a,
.fb_connect_bar span,
.fb_connect_bar span a{color:#bac6da;font-size:11px;text-decoration:none}
.fb_connect_bar .fb_buttons{float:right;margin-top:7px}
.fb_edge_widget_with_comment{position:relative;*z-index:1000}
.fb_edge_widget_with_comment span.fb_edge_comment_widget{position:absolute}
.fb_edge_widget_with_comment span.fb_send_button_form_widget{z-index:1}
.fb_edge_widget_with_comment span.fb_send_button_form_widget .FB_Loader{left:0;top:1px;margin-top:6px;margin-left:0;background-position:50% 50%;background-color:#fff;height:150px;width:394px;border:1px #666 solid;border-bottom:2px solid #283e6c;z-index:1}
.fb_edge_widget_with_comment span.fb_send_button_form_widget.dark .FB_Loader{background-color:#000;border-bottom:2px solid #ccc}
.fb_edge_widget_with_comment span.fb_send_button_form_widget.siderender
.FB_Loader{margin-top:0}
.fbpluginrecommendationsbarleft,
.fbpluginrecommendationsbarright{position:fixed !important;bottom:0;z-index:999}
.fbpluginrecommendationsbarleft{left:10px}
.fbpluginrecommendationsbarright{right:10px}</style></head>
<body onbeforeunload="SaveMenu();" onunload="SaveMenu();" data-twttr-rendered="true">
<div class="over">
<div class="loader"></div>
</div>
<style>
	.dbtable{position:absolute;margin-left:33%;text-align:left;background:#01010185;border:1px solid #d96900;padding:9px 10px 6px 45px;border-radius:0 0 15px 15px;color:#fff;margin-top:-2px;font:400 9pt Verdana,Arial,Times New Roman,sans-serif;box-shadow:10px 10px 60px 10px #fff3d5;z-index:10000;transition:all 800ms ease-out}.dbtable:hover{box-shadow:2px 2px 18px 1px #f6bf36;border:1px solid #e0a204;background:#000000;transition:all 500ms ease-out;z-index:10000;cursor:pointer}.dbtable img{position:absolute;margin-left:-45px;margin-top:-9px;width:42px}.dbtable small{transition:all 800ms ease-out;display:none}.dbtable:hover small{transition:all 800ms ease-out;display:block}
	</style>

<script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
                appId      : 497232093667125, // App ID
                status     : true,              // check login status
                cookie     : true,              // enable cookies to allow the server to access the session
                xfbml      : true               // parse XFBML
            });
            FB.Event.subscribe('auth.login', function() {
                var URLHelper = "?";
                if (window.location.search.replace("?", "").length > 0) {
                    URLHelper = "&";
                }
                if (FB_TryLogin == 1) {
                    window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
                } else if (FB_TryLogin == 2) {
                    window.location = window.location + URLHelper + "page=facebooktrylogin&wasreloaded=1";
                } else {
                    window.location = window.location + URLHelper + "wasreloaded=1";
                }
            });
            FB.Event.subscribe('auth.logout', function(a_Response) {
                if (a_Response.status !== 'connected') {
                    window.location.href=window.location.href;
                } else {
                    /* nothing to do here*/
                }
            });
            FB.Event.subscribe('auth.statusChange', function(response) {
                if (FB_ForceReload == 1 && response.status == "connected") {
                    var URLHelper = "?";
                    if (window.location.search.replace("?", "").length > 0) {
                        URLHelper = "&";
                    }
                    window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
                }
            });
        };
        (function(d){
            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));
	</script>
<div id="top"></div>
<div id="ArtworkHelper" style="background-image:url(files/background-artworkNewBlack.jpg);">
<div id="Bodycontainer">
<div id="ContentRow">
<div id="MenuColumn">
<div id="LeftArtwork">
<img id="TibiaLogoArtworkTop" src="files/O2DEEVW.png" alt="logoartwork">
</div>
<div id="Loginbox">
<div id="LoginTop" style="background-image:url(files/box-top.gif)"></div>
<div id="BorderLeft" class="LoginBorder" style="background-image:url(files/chain.gif)"></div>
<div id="LoginButtonContainer" style="background-image:url(files/loginbox-textfield-background.gif); height: 39px;">
<div id="PlayNowContainer">
<form class="MediumButtonForm" action="register.php" method="post">
<input type="hidden" name="page" value="overview"> 
<div class="MediumButtonBackground" style="background-image:url(files/mediumbuttonGreen.gif) " onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);">
<div class="MediumButtonOver" style="background-image:url(files/mediumbutton-overGreen.gif)" onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);"></div>
<input class="MediumButtonText" type="image" name="Play Now" alt="Play Now" src="files/mediumbutton_playnow.png"></div>
</form></div>
</div>
<div class="Loginstatus" style="background-image:url(files/loginbox-textfield-background.gif)">
<div id="LoginstatusText_1" onclick="LoginstatusTextAction(this);" onmouseover="MouseOverLoginBoxText(this);" onmouseout="MouseOutLoginBoxText(this);" style="background-image: url(&quot;files/loginbox-font-you-are-not-logged-in.gif&quot;);">
<div id="LoginstatusText_1_1" name="LoginstatusText_1" class="LoginstatusText" style="background-image: url(&quot;files/loginbox-font-create-account.gif&quot;); visibility: visible;"></div>
<div id="LoginstatusText_2" class="LoginstatusText" style="background-image: url(&quot;files/loginbox-font-create-account.gif&quot;); visibility: hidden;"></div></div> 
<div id="ButtonText" style="background-image: url(&quot;files/_sbutton_login.gif&quot;);"></div>
</div>
<div style="clear:both"></div>
<div class="Loginstatus" style="background-image:url(files/loginbox-textfield-background.gif); height: 0px;">
<div id="LoginstatusText_2" onclick="LoginstatusTextAction(this);" onmouseover="MouseOverLoginBoxText(this);" onmouseout="MouseOutLoginBoxText(this);">
<div id="LoginstatusText_2_1" class="LoginstatusText" style="background-image:url(files/loginbox-font-create-account.gif);height: 0px;"></div>
<div id="LoginstatusText_2_2" class="LoginstatusText" style="background-image:url(files/loginbox-font-create-account-over.gif);height: 0px;"></div></div>
</div>
<div id="BorderRight" class="LoginBorder" style="background-image:url(files/general/chain.gif)"></div>
<div id="LoginBottom" class="Loginstatus" style="background-image:url(files/box-bottom.gif)"></div>
</div>
<div style="clear:both"></div>
<div id="Loginbox">
<div id="LoginTop" style="background-image:url(files/box-top.gif)"></div>
<div id="BorderLeft" class="LoginBorder" style="background-image:url(files/chain.gif); height: 39px;"></div>
<div id="LoginButtonContainer" style="background-image:url(files/loginbox-textfield-background.gif); height: 39px;">
<div id="PlayNowContainer">
<form class="MediumButtonForm" action="downloads.php" method="post">
<div class="MediumButtonBackground" style="background-image:url(files/mediumbuttonGreen.gif)" onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);">
<div class="MediumButtonOver" style="background-image:url(files/mediumbutton-overGreen.gif)" onmouseover="MouseOverMediumButton(this);" onmouseout="MouseOutMediumButton(this);"></div>
<input class="MediumButtonText" type="image" name="Download" alt="Download" src="files/mediumbutton_download.png"></div></form></div>
</div>
<div id="BorderRight" class="LoginBorder" style="background-image:url(files/chain.gif); height: 39px;"></div>
<div id="LoginBottom" class="Loginstatus" style="background-image:url(files/box-bottom.gif); top: 39px;"></div>
</div>
<div-- id="Menu">
<div id="MenuTop" style="background-image:url(files/box-top.gif);"></div>
<div id="news" class="menuitem">
<span onclick="MenuItemAction(&#39;news&#39;)">
<div class="MenuButton" style="background-image:url(files/button-background.gif);">
<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(files/button-background-over.gif);"></div>
<span id="news_Lights" class="Lights">
<div class="light_lu" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ld" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ru" style="background-image:url(files/green-light.gif);"></div>
</span>

<div id="news_Label" class="Label" style="background-image:url(files/label-news2.gif);"></div>
<div id="news_Extend" class="Extend" style="background-image:url(files/plus.gif);"></div>
</div>
</div>
</span>
<div id="news_Submenu" class="Submenu">
<a href="home.php">
<div id="submenu_http:globalzudo.comsite.phpnews" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpnews" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Latest News</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
</div>
</div>
<div id="account" class="menuitem">
<span onclick="MenuItemAction(&#39;account&#39;)">
<div class="MenuButton" style="background-image:url(files/button-background.gif);">
<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image: url(&quot;files/button-background-over.gif&quot;); visibility: hidden;"></div>
<span id="account_Lights" class="Lights">
<div class="light_lu" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ld" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ru" style="background-image:url(files/green-light.gif);"></div>
</span>

<div id="account_Label" class="Label" style="background-image:url(files/label-account2.gif);"></div>
<div id="account_Extend" class="Extend" style="background-image:url(files/plus.gif);"></div>
</div>
</div>
</span>
<div id="account_Submenu" class="Submenu">
</a>
<a href="login_1.php">
<div id="submenu_http:globalzudo.comsite.phpaccountcreate" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpaccountcreate" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Login</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="myaccount.php">
<div id="submenu_http:globalzudo.comsite.phpaccountmanage" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpaccountmanage" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Manage Account</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="register.php">
<div id="submenu_http:globalzudo.comsite.phpaccountcreate" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpaccountcreate" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Register</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="serverinfo.php">
<div id="submenu_http:globalzudo.comsite.phprules" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: rgb(255, 255, 0); background-color: rgb(30, 8, 43);">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phprules" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffff00;">Server Info</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
</div>
</div>
<div id="community" class="menuitem">
<span onclick="MenuItemAction(&#39;community&#39;)">
<div class="MenuButton" style="background-image:url(files/button-background.gif);">
<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(files/button-background-over.gif);"></div>
<span id="community_Lights" class="Lights">
<div class="light_lu" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ld" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ru" style="background-image:url(files/green-light.gif);"></div>
</span>

<div id="community_Label" class="Label" style="background-image:url(files/label-community2.gif);"></div>
<div id="community_Extend" class="Extend" style="background-image:url(files/plus.gif);"></div>
</div>
</div>
</span>
<div id="community_Submenu" class="Submenu">
<a href="forum.php">
<div id="submenu_http:globalzudo.comsite.phpcharacters" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpcharacters" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Forum</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="onlinelist.php">
<div id="submenu_http:globalzudo.comsite.phponline" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phponline" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Who is Online ?</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="highscores.php">
<div id="submenu_http:globalzudo.comsite.phphighscores" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: rgb(255, 255, 0); background-color: rgb(30, 8, 43);">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phphighscores" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffff00;">Highscores</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="killers.php">
<div id="submenu_http:globalzudo.comsite.phplastkills" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: rgb(255, 255, 255); background-color: rgb(30, 8, 43);">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phplastkills" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Lasts Kills</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="houses.php">
<div id="submenu_http:globalzudo.comsite.phphouses" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: rgb(255, 255, 255); background-color: rgb(30, 8, 43);">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phphouses" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Houses</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="guilds.php" target="_blank">
<div id="submenu_guilds" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: rgb(255, 255, 255); background-color: rgb(30, 8, 43);">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Guilds</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="guildwar.php">
<div id="submenu_http:globalzudo.comsite.phpteam" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpteam" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Guild War</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="support.php">
<div id="submenu_http:globalzudo.comsite.phpbuychar" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #00e4ff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpbuychar" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #00e4ff;">Team</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="auctionchar.php">
<div id="submenu_http:globalzudo.comsite.phpbuychar" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #00e4ff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpbuychar" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #00e4ff;">Auction Char</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
</div>
</div>
<div id="library" class="menuitem">
<span onclick="MenuItemAction(&#39;library&#39;)">
<div class="MenuButton" style="background-image:url(files/button-background.gif);">
<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(files/button-background-over.gif);"></div>
<span id="library_Lights" class="Lights">
<div class="light_lu" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ld" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ru" style="background-image:url(files/green-light.gif);"></div>
</span>

<div id="library_Label" class="Label" style="background-image:url(files/label-library2.gif);"></div>
<div id="library_Extend" class="Extend" style="background-image:url(files/plus.gif);"></div>
</div>
</div>
</span>
<div id="library_Submenu" class="Submenu">
<a href="market.php">
<div id="submenu_http:globalzudo.comsite.phpcommands" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffffff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpcommands" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Market</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="downloads.php">
<div id="submenu_http:globalzudo.comsite.phpserverInfo" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: rgb(255, 255, 255); background-color: rgb(30, 8, 43);">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpserverInfo" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffffff;">Downloads</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="powergamers.php">
<div id="submenu_http:globalzudo.comsite.phpquicklooting" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #ffff00;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpquicklooting" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #ffff00;">Power Gamers</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="deaths.php">
<div id="submenu_http:globalzudo.comsite.phpcastle" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #00e4ff;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpcastle" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #00e4ff;">Deaths</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>

</div>
</div>
<div id="shops" class="menuitem">
<span onclick="MenuItemAction(&#39;shops&#39;)">
<div class="MenuButton" style="background-image:url(files/button-background.gif);">
<div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(files/button-background-over.gif);"></div>
<span id="shops_Lights" class="Lights">
<div class="light_lu" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ld" style="background-image:url(files/green-light.gif);"></div>
<div class="light_ru" style="background-image:url(files/green-light.gif);"></div>
</span>

<div id="shops_Label" class="Label" style="background-image:url(files/label-shops2.gif);"></div>
<div id="shops_Extend" class="Extend" style="background-image:url(files/plus.gif);"></div>
</div>
</div>
</span>
<div id="shops_Submenu" class="Submenu">
<a href="buypoints.php">
<div id="submenu_http:globalzudo.comsite.phpaccountdonate" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #3ccd5f;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpaccountdonate" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #3ccd5f;">Donate</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
<a href="shop.php">
<div id="submenu_http:globalzudo.comsite.phpaccountdonate" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)" style="color: #3ccd5f;">
<div class="LeftChain" style="background-image:url(files/chain.gif);"></div>
<div id="ActiveSubmenuItemIcon_http:globalzudo.comsite.phpaccountdonate" class="ActiveSubmenuItemIcon" style="background-image:url(files/icon-activesubmenu.gif);"></div>
<div class="SubmenuitemLabel" style="color: #3ccd5f;">Store</div>
<div class="RightChain" style="background-image:url(files/chain.gif);"></div>
</div>
</a>
</div>
<div id="MenuBottom" style="background-image:url(files/box-bottom.gif);"></div>
</div>
<script type="text/javascript">
            InitializePage();
        </script>
</div--></div><style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 750px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #ffc600;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #ff9c00;
}

/* Fading animation */
.fadeSlide {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<br>
<script>

</script><br><br><br><br><br>
<img class="logoTopo" src="files/2Lkjglj.png" width="650" height="127" alt="Contentbox headline"><br>

<div id="ContentColumn">
<div class="Content">
<div id="ContentHelper">
<div id="FeaturedArticle" class="Box">
<div class="Corner-tl" style="background-image:url(files/corner-tl.gif);"></div>
<div class="Corner-tr" style="background-image:url(files/corner-tr.gif);"></div>
<div class="Border_1" style="background-image:url(files/border-1.gif);"></div>
<div class="BorderTitleText" style="background-image: url(files/title-background-green.gif);"></div>

<div class="Border_2">
<div class="Border_3">
<div class="BoxContent" style="background-image:url(files/Forge 2.jpg);">
<div class="slideshow-container">
<div class="mySlides fadeSlide" style="display: none;">
<div class="numbertext">1 / 8</div>
<img src="files/The_Scourge_of_Oblivion_Popicii.png" style="width:100%">
</div>
<div class="mySlides fadeSlide" style="display: block;">
<div class="numbertext">2 / 8</div>
<img src="files/maxresdefault.jpg" style="width:100%">
</div>
<div class="mySlides fadeSlide" style="display: none;">
<div class="numbertext">3 / 8</div>
<img src="files/9.png.7cb6c1384db32f00c4df42412a165ca2.png" style="width:100%">
</div>
<div class="mySlides fadeSlide" style="display: none;">
<div class="numbertext">4 / 8</div>
<img src="files/7.png.f52ee236fb2af3a23bc5808069e1eff3.png" style="width:100%">
</div>
<div class="mySlides fadeSlide" style="display: none;">
<div class="numbertext">5 / 8</div>
<img src="files/1498593957538-1494361635944-one-players-journey-to-open-a-secret-door-thats-been-locked-for-11-years-1470433217.jpg" style="width:100%">
</div>
<div class="mySlides fadeSlide" style="display: none;">
<div class="numbertext">6 / 8</div>
<img src="files/20170820025520!Tibia_Banner.png" style="width:100%">
</div>
<div class="mySlides fadeSlide" style="display: none;">
<div class="numbertext">7 / 8</div>
<img src="files/header_spiele_tibia_DE.png" style="width:100%">
</div>
<div class="mySlides fadeSlide" style="display: none;">
<div class="numbertext">8 / 8</div>
<img src="files/maxresdefault.jpg" style="width:100%">
</div>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
</div>
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot active" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
<span class="dot" onclick="currentSlide(6)"></span>
<span class="dot" onclick="currentSlide(7)"></span>
<span class="dot" onclick="currentSlide(8)"></span>
 </div>
</div>
<font size="2px"><font face="Verdana">
</font></font></div><font size="2px"><font face="Verdana">
</font></font></div><font size="2px"><font face="Verdana">
<div class="Border_1" style="background-image: url(files/border-1.gif);"></div>
<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image: url(files/corner-bl.gif);"></div></div>
<div class="CornerWrapper-b"><div class="Corner-br" style="background-image: url(files/corner-br.gif);"></div></div>
</font></font></div>
</div>
</div>
</div>
<script>
              var slideIndex = 1;
              showSlides(slideIndex);

              function plusSlides(n) {
                  showSlides(slideIndex += n);
              }

              function currentSlide(n) {
                  showSlides(slideIndex = n);
              }

              function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
              }
          </script>
<style>
.textwiki {
	font-size:8pt;
	white-space:pre-wrap;
	word-wrap:break-word;
}
</style>







<div id="ContentColumn">
<div class="Content">
<div id="ContentHelper">
<div id="newsticker" class="Box">
<div class="Corner-tl" style="background-image: url(files/corner-tl.gif);"></div>
<div class="Corner-tr" style="background-image: url(files/corner-tr.gif);"></div>
<div class="Border_1" style="background-image: url(files/border-1.gif);"></div>
<div class="BorderTitleText" style="background-image: url(files/title-background-green.gif);"></div>
<img class="Title" src="files/Br8ahjY.gif" alt="Contentbox headline">
<div class="Border_2">
<div class="Border_3">
<div class="BoxContent" style="background-image:url(files/scroll.gif);">
<center><div style="padding: 1em;">
<table style="text-align:center;font-weight:bold; font-size: 8pt;width:100%;">
<tbody><tr>
<td style="width:16%; padding:0 1em"><a href="index.php/Quests" title="Quests"><img alt="Icone7.png" src="files/Icone7.png" decoding="async" width="52" height="51"></a></td>
<td style="width:16%; padding:0 1em"><a href="index.php/Script_Bot" title="Script Bot"><img alt="Icone1.png" src="files/Icone1.png" decoding="async" width="47" height="54"></a></td>
<td style="width:16%; padding:0 1em"><a href="index.php/Itens" title="Itens"><img alt="Icone3.png" src="files/Icone3.png" decoding="async" width="68" height="52"></a></td>
<td style="width:16%; padding:0 1em"><a href="index.php/Imbuement_Tool" title="Imbuement Tool"><img alt="Imbuement Home.gif" src="files/Imbuement_Home.gif" decoding="async" width="96" height="96"></a></td>
<td style="width:16%; padding:0 1em"><a href="index.php/VIPZUDO" title="VIPZUDO"><img alt="Vip.gif" src="files/Vip.gif" decoding="async" width="34" height="34"></a></td>
<td style="width:16%; padding:0 1em"><a href="index.php/Criaturas" title="Criaturas"><img alt="The Mutated Pumpkin.gif" src="files/The_Mutated_Pumpkin.gif" decoding="async" width="64" height="64"></a></td>
</tr>
<tr>
<td><a href="index.php/Quests" title="Quests">Quests</a></td>
<td><a href="index.php/Script_Bot" title="Script Bot">Script Bot</a></td>
<td><a href="index.php/Itens" title="Itens">Items</a></td>
<td><a href="index.php/Imbuement_Tool" title="Imbuement Tool">Imbuement Tool</a></td>
<td><a href="index.php/VIPZUDO" title="VIPZUDO">V.I.P</a></td>
<td><a href="index.php/Criaturas" title="Criaturas">Creatures</a></td>
</tr>
<tr>
<td><a href="index.php/Addons" title="Addons"><img alt="Icone10.png" src="files/Icone10.png" decoding="async" width="71" height="64"></a></td>
<td><a href="index.php/Montarias" title="Montarias"><img alt="Icone11.png" src="files/Icone11.png" decoding="async" width="61" height="73"></a></td>
<td><a href="index.php/NPCs" title="NPCs"><img alt="Icone5.png" src="files/Icone5.png" decoding="async" width="65" height="63"></a></td>
<td><a href="index.php/Sistemas" title="Sistemas"><img alt="Bricklayers&#39; Kit1.gif" src="files/Bricklayers&#39;_Kit1.gif" decoding="async" width="64" height="64"></a></td>
<td><a href="index.php/Eventos" title="Eventos"><img alt="Evento.gif" src="files/Evento.gif" decoding="async" width="64" height="64"></a></td>
<td><a href="index.php/Cidades" title="Cidades"><img alt="Icone6.gif" src="files/Icone6.gif" decoding="async" width="53" height="40"></a></td>
</tr>
<tr>
<td><a href="index.php/Addons" title="Addons">Addons</a></td>
<td><a href="index.php/Montarias" title="Montarias">Mounts</a></td>
<td><a href="index.php/NPCs" title="NPCs">NPCs</a></td>
<td><a href="index.php/Sistemas/_Comandos" title="Sistemas/ Comandos">Systems / Commands</a></td>
<td><a href="index.php/Eventos/_Bosses" title="Eventos/ Bosses">Events / Bosses</a></td>
<td>Citys</td>
</tr>
<tr>
<td><a href="index.php/Druids" title="Druids"><img alt="Druid Home.gif" src="files/Druid_Home.gif" decoding="async" width="96" height="96"></a></td>
<td><a href="index.php/Sorcerers" title="Sorcerers"><img alt="Sorcerer Home.gif" src="files/Sorcerer_Home.gif" decoding="async" width="96" height="96"></a></td>
<td><a href="index.php/Paladins" title="Paladins"><img alt="Paladin Home.gif" src="files/Paladin_Home.gif" decoding="async" width="96" height="96"></a></td>
<td><a href="index.php/Knights" title="Knights"><img alt="Knight Home.gif" src="files/Knight_Home.gif" decoding="async" width="96" height="96"></a></td>
<td><a href="index.php/Verdadeiro" title="Verdadeiro"><img alt="Verdadeira.gif" src="files/Verdadeira.gif" decoding="async" width="32" height="32"></a></td>
<td><a href="index.php/Banimentos" title="Banimentos"><img alt="Ban.gif" src="files/Ban.gif" decoding="async" width="50" height="50"></a></td>
</tr>
<tr>
<td><a href="index.php/Druids" title="Druids">Druids</a></td>
<td><a href="index.php/Sorcerers" title="Sorcerers">Sorcerers</a></td>
<td><a href="index.php/Paladins" title="Paladins">Paladins</a></td>
<td><a href="index.php/Knights" title="Knights">Knights</a></td>
<td><a href="index.php/Verdadeiro" title="Verdadeiro">Real</a></td>
<td><a href="index.php/Banimentos" title="Banimentos">Bans</a></td>
</tr>
</tbody></table>
</div></center></div></div></div>
<div class="Border_1" style="background-image: url(files/border-1.gif);"></div>
<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image: url(files/corner-bl.gif);"></div></div>
<div class="CornerWrapper-b"><div class="Corner-br" style="background-image: url(files/corner-br.gif);"></div></div>
</div>
<div id="news" class="Box">
<div class="Corner-tl" style="background-image:url(files/corner-tl.gif);"></div>
<div class="Corner-tr" style="background-image:url(files/corner-tr.gif);"></div>
<div class="Border_1" style="background-image:url(files/border-1.gif);"></div>
<div class="BorderTitleText" style="background-image:url(files/title-background-green.gif);"></div>
<img class="Title" src="files/headline-news.gif" alt="Contentbox headline">
<div class="Border_2">
<div class="Border_3">
<div class="BoxContent" style="background-image:url(files/scroll.gif);">



<div class="NewsHeadline">

</div>
<table style="clear:both" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>