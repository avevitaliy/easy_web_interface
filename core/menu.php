<?php


if(file_exists(Q_PATH.'/routers/index')) {
    if($router == 'index') {
	echo "<li class='active'><a href='#'>General</a></li>";
    }
    else {
	echo "<li><a href='/'>General</a></li>";
    }
}
    $dir = opendir(Q_PATH.'/routers');
        while($routdir = readdir($dir)){
            if($routdir == '.' || $routdir == '..' || $routdir == 'index'){
                continue;
            }
	    $menus[] = $routdir;
        }
	    sort($menus);
    	    foreach ($menus as $routdir) {
		if($routdir == $router) {
		    echo "<li class='active'><a href='#'>".$routdir."</a></li>";
		}
		else {
		    echo "<li><a href='/".$routdir."'>".$routdir."</a></li>";
		}
	    }
?>
