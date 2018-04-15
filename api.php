<?php
	header("Content-Type:application/json");
	echo '[';
	
	if($folder = opendir('./mp3')) {
		$i=0;
	    while(false !== ($file = readdir($folder))) {
	        if($file != '.' && $file != '..' && $file != 'index.php') {
	     		$tmp = explode('.', $file);
	     		$appload_nb = explode('_', $tmp[0]);
	     		
	            $list_files[$i] = $appload_nb[1];
	            $i++;
	        }
	    }
	
	    closedir($folder);
		rsort($list_files);
		
		for($i = 0; $i < count($list_files); $i++) {
			echo '{"id":"' . $list_files[$i] . '","url":"http://borguerie.outadoc.fr/mp3/borg_' . str_replace(' ', '%20', $list_files[$i]) . '.mp3","pubdate":"' . date("r", filemtime('mp3/borg_' . $list_files[$i] . '.mp3')) . '"}';
			if($i != count($list_files) - 1) {
				echo ',';
			}
		}
	}
	
	echo ']';
?>