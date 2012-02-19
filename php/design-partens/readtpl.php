<?php

$params = array();
$ini = file_get_contents('value.ini');
$iniarr = explode( "\n", $ini );
$ini = null;
$inilist = array();

foreach( $iniarr as $line ){
	if( $line != '' ){
		$ini = explode( '=', $line );
		$inilist[$ini[0]] = $ini[1];
                $params[$ini[0]] = $ini[1];
	}
}

//var_dump($inilist);

/* if( preg_match_all('/\$params\[\'([a-zA-Z0-9_]+)\'\] = [\'\"](.*)[\'\"];/', $file, $match) !== false ){
	for( $i = 0; $i < count($match[1]); $i++ ){
		$params[$match[1][$i]] = $match[2][$i];
	}
}
*/

if( $_POST['submit'] ){
	$file = file_get_contents('tpl.php');
	$post = $_POST;
	if( preg_match_all('/\$params\[\'([a-zA-Z0-9_]+)\'\]/', $file, $match) !== false ){
		foreach( $match[1] as $i => $var ) {
			if( $post[$var] ) {
				$params[$var] = $post[$var];
			}
		}
	}

    exec('echo "" > value.ini');
    foreach( $params as $k => $v ){
        exec('echo "' . $k . '=' . $v . '" >> value.ini');
    }
    //var_dump($post);

	header('Location:' . $post['backurl']);
}

?>
