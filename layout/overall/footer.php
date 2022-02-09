</tr>
</tbody></table>
</div></div></div>
<div class="Border_1" style="background-image:url(files/border-1.gif);"></div>
<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(files/corner-bl.gif);"></div></div>
<div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(files/corner-br.gif);"></div></div>
</div></div></div>
<div id="Footer"></div>
</div>
<div id="ThemeboxesColumn">
<div id="RightArtwork">
<img id="Monster" src="files/tentacle.gif" onclick="window.location = &#39;site.php?subtopic=creatures&amp;creature=Tentacle&#39;;" alt="Monster of the Week">
<img id="PedestalAndOnline" src="files/pedestal-and-online.gif" alt="Monster Pedestal and Players Online Box">
<div id="PlayersOnline" onclick="window.location = &#39;http://globalzudo.com/site.php/online&#39;">
<div id="players" style="display: inline;"><?php echo user_count_online();?></div><br>Players Online</div>
</div>
<div id="Themeboxes">
<style type="text/css">
	.top_level {
		position: absolute;
		top: 29px;
		left: 6px;
		height: 405px;
		width: 168px;
		z-index: 20;
		padding-top: 6px;
		font-family: Tahoma, Geneva, sans-serif;
		font-size: 9.2pt;
		color: #fff;
		font-weight: bold;
		text-align: right;
		text-decoration: inherit;
	}
	#Topbar a {
		text-decoration: none;
	}
	.online {
		color: #88ff88;
	}
	.offline {
		color: #ff7070;
	}
	a.topfont {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
		text-decoration: none
	}
	a:hover.topfont {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px;
		color: #000;
		text-decoration:none
	}
</style>
<div id="Topbar" class="Themebox" style="background-image:url(files/highscores.png);">
<div class="top_level" style="background:url(files/bg_top.png)"><center>
<?php
            $cache = new Cache('engine/cache/topPlayer');
            if ($cache->hasExpired()) {
                $players = mysql_select_multi('SELECT `name`, `level`, `experience`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `experience` DESC LIMIT 6;');
                $cache->setContent($players);
                $cache->save();
            } else {
                $players = $cache->load();
            }
            if ($players) {
            $count = 1;
            foreach($players as $player) {
            echo '<img style="margin-top: -35px; margin-left: -35px;" src="https://outfit-images.ots.me/1285_walk_animation/animoutfit.php?id='.$player['looktype'].'&addons='.$player['lookaddons'].'&head='.$player['lookhead'].'&body='.$player['lookbody'].'&legs='.$player['looklegs'].'&feet='.$player['lookfeet'].'&g=0&h=3&i=1"></img> <a href="characterprofile.php?name='.$player['name'].'" style="color:#88ff88;font-size:10px">'.$player['name'].'</a><p style="font-size:10px"> Level: ('. $player['level'].')</p>';
           $count++;
            }
            }
            ?></center>
</div>
</div>
<br><br><br>
<center><div id="PremiumBox" class="Themebox" style="background-image:url(files/premiumboxnew.gif);">
<img style="margin-top: 35px;width:120px" src="files/ieMMG8X.png">
<br>
<a style="text-decoration: none;color:white; " href="#">A link...</a>
</div>
</center>


 </div>
 
</div>
<center><p style="color:white"><sup>
Theme converted by <a href="https://lepiigortv.com"> Alex </a> from <a href="https://opengamescommunity.com"> Open Games Community </a>.</sup></center></div>
<div>

</div>

</div>
</div>

<script>
    $(document).ready(function () {
        $('[data-urlbutton]').click(function (e) {
            e.preventDefault();
            var data = $(this).data();
            $(window.document.location).attr('href', data.urlbutton);
        });
    });
</script>
<script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
    vgo('setAccount', '252723709');
    vgo('setTrackByDefault', true);

    vgo('process');
</script>



<div id="fb-root" class=" fb_reset">
<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
<iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="files/xd_arbiter.html" style="border: none;"></iframe>
</div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div></body></html>