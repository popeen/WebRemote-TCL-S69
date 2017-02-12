<?php
	
	//OBS, DO NOT RUN THIS CODE OPEN TO THE INTERNET
	
	$ip = "192.168.1.133";
	$port = 4123;
	
	function SendKeyCode($KeyCode){
		global $ip;
		global $port;
		$ch = fsockopen($ip, $port);
		if($ch){
			stream_set_timeout($ch, 60);
			fwrite($ch, "<?xml version=\"1.0\" encoding=\"utf-8\"?><root><action name=\"setKey\" eventAction=\"TR_DOWN\" keyCode=\"$KeyCode\" /></root>");
			fclose($ch);
		}
	}
	
	function goToSource($port){
		SendKeyCode("TR_KEY_EXIT");
		sleep(1);
		SendKeyCode("TR_KEY_MUTE");
		sleep(1);
		SendKeyCode("TR_KEY_TV");
		sleep(6);
		SendKeyCode("TR_KEY_SOURCE");
		sleep(1);
		for($i=0; $i<$port; $i++){
			SendKeyCode("TR_KEY_DOWN");
		}
		SendKeyCode("TR_KEY_OK");
		sleep(1);
		SendKeyCode("TR_KEY_MUTE");
	}
	
	function exitNetflix(){		
		SendKeyCode("TR_KEY_EXIT");
		sleep(1);
		SendKeyCode("TR_KEY_RIGHT");
		sleep(1);
		SendKeyCode("TR_KEY_OK");
	}
	
	function goToNetflix(){
		SendKeyCode("TR_KEY_EXIT");
		sleep(1);
		SendKeyCode("TR_KEY_MAINMENU");
		sleep(1);
		SendKeyCode("TR_KEY_DOWN");
		sleep(1);
		SendKeyCode("TR_KEY_OK");
	}
	
	function goToChromecast(){
		goToSource(3);
	}
	
	function goToKodi(){
		goToSource(4);
	}
	
	$array = array(
		"TR_KEY_RED" => "Red",														//Verifierad
		"TR_KEY_GREEN" => "Green",												//Verifierad
		"TR_KEY_YELLOW" => "Yellow",											//Verifierad
		"TR_KEY_BLUE" => "Blue",													//Verifierad
		"TR_KEY_INPUT" => "Input",													//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_TUNER" => "Tuner",												//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_VOL_UP" => "Volume Up",										//Verifierad
		"TR_KEY_CH_UP" => "Channel Up",										//Verifierad
		"TR_KEY_MUTE" => "Mute",													//Verifierad
		"TR_KEY_VOL_DOWN" => "Volume Down",							//Verifierad
		"TR_KEY_CH_DOWN" => "Channel Down",							//Verifierad
		"TR_KEY_LIST" => "Channel List",											//Verifierad
		"TR_KEY_SMARTTV" => "SmartTV",										//Verifierad
		"TR_KEY_GUIDE" => "Guide",												//Verifierad
		"TR_KEY_MAINMENU" => "Main Menu",									//Verifierad
		"TR_KEY_UP" => "Up",															//Verifierad
		"TR_KEY_INFOWINDOW" => "Info Window",							//Verifierad
		"TR_KEY_LEFT" => "Left",														//Verifierad
		"TR_KEY_OK" => "Ok",															//Verifierad
		"TR_KEY_RIGHT" => "Right",												//Verifierad
		"TR_KEY_BACK" => "Back",													//Verifierad
		"TR_KEY_DOWN" => "Down",												//Verifierad
		"TR_KEY_EXIT" => "Exit",														//Verifierad
		"TR_KEY_1" => "1",																//Verifierad
		"TR_KEY_2" => "2",																//Verifierad
		"TR_KEY_3" => "3",																//Verifierad
		"TR_KEY_4" => "4",																//Verifierad
		"TR_KEY_5" => "5",																//Verifierad
		"TR_KEY_6" => "6",																//Verifierad
		"TR_KEY_7" => "7",																//Verifierad
		"TR_KEY_8" => "8",																//Verifierad
		"TR_KEY_9" => "9",																//Verifierad
		"TR_KEY_0" => "0",																//Verifierad
		"TR_KEY_FAVORITE" => "Favorite",										//Verifierad
		"TR_KEY_YOUTUBE" => "Youtube",										//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_AT" => "AT",															//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_APP" => "App",														//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_PICTURE" => "Picture",											//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_SOUND" => "Sound",												//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_MTS" => "Mts",														//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_CC" => "CC",														//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_USB" => "Usb",														//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_OPTION" => "Option",											//Verifierad
		"TR_KEY_SLEEP" => "Sleep timer",										//Verifierad
		"TR_KEY_3D" => "3D",															//Verifierad, "No function"
		"TR_KEY_REW" => "Rew",													//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_PLAYPAUSE" => "Play/Pause",								//Verifierad
		"TR_KEY_FF" => "FF",															//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_PREVIOUS" => "Previous",										//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_SUSPEND" => "Suspend",										//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_NEXT" => "Next",													//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_AIRCABLE" => "Aircable",										//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_HOME" => "Home",												//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_SEARCH" => "Search",											//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_I" => "I",																//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_REC" => "REC",														//Verifierad
		"TR_KEY_TV" => "TV",															//Verifierad
		"TR_KEY_AMAZON" => "Amazon",										//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_VUDU" => "Vudu",													//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_MGO" => "MGO",													//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_ZOOM_DOWN" => "Zoom Down (ScreenMore)",	//Verifierad
		"TR_KEY_ZOOM_UP" => "Zoom Up (ScreenMore)",				//Verifierad
		"TR_KEY_SLEEP_DOWN" => "Sleep Down",							//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_SLEEP_UP" => "Sleep Up",										//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_MEDIA" => "Media",												//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_SOURCE" => "Source",											//Verifierad
		"TR_KEY_TEXT" => "Text TV",												//Verifierad
		"TR_KEY_PLAY" => "Play",													//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_PAUSE" => "Pause",												//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_FORMAT" => "Format",											//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_SCALE" => "Scale",												//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_PRE_CH" => "Previous Channel",							//Verifierad
		"TR_KEY_FREEZE" => "Freeze",											//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_EPG" => "EPG",														//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_SUBTITLE" => "Subtitle",										//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_DISPLAY" => "Display",											//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_LANG" => "Language",											//Verifierad. verkar visa info ruta och inte språk
		"TR_KEY_APPSTORE" => "Appstore",									//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_ALLAPP" => "All Apps",											//Verkar inte göra något (Testad i TV Läge)
		"TR_KEY_ECO" => "Energy Saving",										//Verifierad
		"TR_KEY_ECO" => "Energy Saving",										//Verifierad
		"TR_KEY_POWER" => "Power"												//Verifierad
	);
	
	if(isset($_REQUEST['cmd'])){
		SendKeyCode($_REQUEST['cmd']);
	}
	elseif(isset($_REQUEST['goto'])){
			
			if($_REQUEST['goto'] == "netflix"){	goToNetflix(); }
			elseif($_REQUEST['goto'] == "notflix"){	exitNetflix(); }
			elseif($_REQUEST['goto'] == "chromecast"){	goToChromecast(); }
			elseif($_REQUEST['goto'] == "kodi"){	goToKodi(); }
			
	}
	else{
		
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
			<?php
				foreach($array as $key => $val){
					echo "<button onclick=\"$('#frame').load('index.php?cmd=$key')\" style='margin:5px;'>$val</button>\n";
				}
			?>
		<button onclick="$('#frame').load('index.php?goto=netflix')" style='margin:5px;'>Netflix</button>
		<button onclick="$('#frame').load('index.php?goto=notflix')" style='margin:5px;'>Exit Netflix</button>
		<button onclick="$('#frame').load('index.php?goto=chromecast')" style='margin:5px;'>Chromecast</button>
		<button onclick="$('#frame').load('index.php?goto=kodi')" style='margin:5px;'>Kodi</button>
		<iframe id="frame" frameborder="0" width="0" height="0"></iframe>
	</body>
</html>
<?php } ?>