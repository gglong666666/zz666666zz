<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<form action="" method="post">
請輸入原始網址:<input type="text" name="longlong"><br/>
<input type="submit">
<input type="reset">
</form>
</body>
</html>
<?php

$bitly=$_POST["longlong"];

function make_bitly_url($url,$login,$appkey,$format = 'xml',$version = '2.0.1')
{
$bitly = ‘http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;
$response = file_get_contents($bitly);
if(strtolower($format) == 'json')
{
$json = @json_decode($response,true);
return $json['results'][$url]['short'];
}
else 
{
$xml = simplexml_load_string($response);
return ‘http://bit.ly/'.$xml->results->nodeKeyVal->hash;
}
}
$short = make_bitly_url('http:www.inside.com.tw','xxxxxxx','ooooooo','json');
echo ‘新產生的短網址是： ‘.$short;
?>