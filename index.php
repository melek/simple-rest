<?php 
/**
 * Core controller for tarotnotes.lioneltarot.com/api/
 * 
 * @package SimpleRest
 */
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

/* Sample Static Data */
$cards = '[
    {"name": "The Fool"},
    {"name": "The Magician"},
    {"name": "The High Priestess"},
    {"name": "The Empress"},
    {"name": "The Emperor"},
    {"name": "The Hierophant"},
    {"name": "The Lovers"},
    {"name": "The Chariot"},
    {"name": "Strength"},
    {"name": "The Hermit"},
    {"name": "The Wheel of Fortune"},
    {"name": "Justice"},
    {"name": "The Hanged Man"},
    {"name": "Death"},
    {"name": "Temperance"},
    {"name": "The Devil"},
    {"name": "The Tower"},
    {"name": "The Star"},
    {"name": "The Moon"},
    {"name": "The Sun"},
    {"name": "Judgment"},
    {"name": "The World"}]';

$cards = json_decode($cards, true);

function page($title, $body) {
	include("./header.php");
	echo "<h1>".$title."</h1>";
	echo $body;
	?>
	</body></html>
	<?php
}

$url_array = parse_url($request);
$api_call = explode("/", $url_array["path"]);
$api_response = false;
$api_info = var_export($api_call, true);
if($api_call[1] == "api") {
	$request = "/api/";
	if($method != "GET") {
		$api_info .= "Only GET requests are currently accepted by this API.";
	}
	else if($api_call[2] == "card") {
		if($api_call[3] == "single") {
			if(is_numeric($api_call[4])) {
				$card_index = (int)$api_call[4] % 78;
				if($card_index < count($cards)) {
					header('Content-Type: application/json');
					echo json_encode($cards[$card_index]);
				} else {
					header('Content-Type: application/json');
					echo '{"error": "'.$card_index.' Not yet implemented"}';
				}
				$api_response = true;
			} else {
				$api_info .= "<br>Invalid API Enpoint: /card/single/ expects an integer.";	
			}
		}
	}
}

if(!$api_response) {
	switch( $request) {
		case '/api/': 
			page("Tarot Notes API", $api_info . file_get_contents('./api.html'));
			break;	
		default:
			page("404 Not Found", "Sorry, this page doesn't exist!");
			break;
	}
	echo "<hr>";
	echo $request;
	echo "<hr><h2>Headers</h2>";
	echo "<h3>".$_SERVER['REQUEST_METHOD']."</h3>";
	$headers = apache_request_headers();
	
	foreach ($headers as $header => $value) {
	    echo "$header: $value <br />\n";
	}
	echo "<hr>";
}
