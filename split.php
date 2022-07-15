<?php
//------------------------------------------------------------------------------
// TeleMedia / Telemedia Holding | split/split.php
//------------------------------------------------------------------------------
// www.telemedia.hu - TeleMedia WEBOLDAL
// Készítette: Simonszoft - By Simon Nándor <simon.nandor@simonszoft.hu>
//------------------------------------------------------------------------------
// HEADER
header('Content-Type: text/html; charset=UTF-8');
header('Content-Language: content=hu-HU'); 
//------------------------------------------------------------------------------
?>


<div class="top"></div>
<div class="row">
	<div>
	<h2 id="WELCOME">
		Üdvözöljük</h2>
			<p id="TEXT">a TeleMedia cégcsoport weboldalán</p>

	</div>
  <div class="column">
	<div class="right">
		<a id="TM_LINK" href="https://telemedia.hu">
			<img id="TM_IMG" src="https://telemedia.hu/split/callcenter.png" style="padding:2em; margin: -2em;">

			<p><i id="TM_TEXT">Professzionális CRM és call center megoldások 8 nyelven</i></p>
			<p class="button">
				<span id="TM_BUTTON">OK</span> <span style="font-size:20px">&#xbb;</span>
			</p>
		</a>
	</div>
  </div>
  <div class="column">
	<div class="left">
		<a id="TV_LINK" href="http://www.calltv.com">
			<img id="TV_IMG" src="https://telemedia.hu/split/holding.png" style="padding: 3.5em; margin: -2em;">
			<p><i id="TV_TEXT">A világ legnagyobb élő, interaktív TV-műsorok gyártója</i></p>
			<p class="button">
				<span id="TV_BUTTON">OK</span> <span style="font-size:20px">&#xbb;</span>
			</p>
		</a>
	</div>
  </div>
  
</div>

<div class="bottom" ></div>

<script type="text/javascript">
if (/^hu/i.test(navigator.language)) 
	{
	(function($) {
	$('#WELCOME').text("Üdvözöljük");
	$('#TEXT').text("a TeleMedia cégcsoport weboldalán");

	$('#TM_TEXT').text("Professzionális CRM és call center megoldások 8 nyelven");
	$('#TM_IMG').attr("alt",$('#TM_TEXT').text());
	$('#TM_IMG').attr("title",$('#TM_TEXT').text());
	$('#TM_BUTTON').text("Tovább");
	$("#TM_LINK").attr("href", "<?php echo URL."?nyelv=hu"; ?>")

	$('#TV_TEXT').text("A világ legnagyobb élő, interaktív TV-műsorok gyártója");
	$('#TV_IMG').attr("alt",$('#TV_TEXT').text());
	$('#TV_IMG').attr("title",$('#TV_TEXT').text());
	$('#TV_BUTTON').text("Tovább");
	})(jQuery);
	}
else	
	{
	(function($) {
	$('#WELCOME').text("Welcome");
	$('#TEXT').text("The Official Website of The TeleMedia Group");

	$('#TM_TEXT').text("Professional CRM and call center solutions in 8 languages");
	$('#TM_IMG').attr("alt",$('#TM_TEXT').text());
	$('#TM_IMG').attr("title",$('#TM_TEXT').text());
	$('#TM_BUTTON').text("Read more");
	$("#TM_LINK").attr("href", "<?php echo URL."?nyelv=en"; ?>")

	$('#TV_TEXT').text("The world`s largest producer of live, revenue-producing, interactive TV shows");
	$('#TV_IMG').attr("alt",$('#TV_TEXT').text());
	$('#TV_IMG').attr("title",$('#TV_TEXT').text());
	$('#TV_BUTTON').text("Read more");
	})(jQuery);	
	}
</script>

