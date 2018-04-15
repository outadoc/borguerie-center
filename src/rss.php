<?php
/*
    Borguerie Center
    Copyright (C) 2011–2013  Baptiste Candellier

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

header("Content-Type:text/xml");
echo '<rss version="2.0" encoding="utf-8">';
echo("<channel>
	<title>Borguerie Center</title>
	<link>http://borguerie.outadoc.fr/</link>
	<description>Les borgueries de Jérôme Keinborg, juste au-dessus de votre clavier. Oui oui, là. Sur l'écran.</description>
	<language>fr-fr</language>
	<lastBuildDate>" . date("r", filemtime('mp3/')) . "</lastBuildDate>
	<managingEditor>admin@outadoc.fr (Baptiste Candellier)</managingEditor>
	<webMaster>admin@outadoc.fr (Baptiste Candellier)</webMaster>");
	
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
		echo '<item>';
		echo '<title>Appload #' . $list_files[$i] . '</title>';
		echo '<description>La borguerie de l\'épisode #' . $list_files[$i] . ' d\'Appload !</description>';
		echo '<link>http://borguerie.outadoc.fr/mp3/borg_' . str_replace(' ', '%20', $list_files[$i]) . '.mp3</link>';
		echo '<pubDate>' . date("r", filemtime('mp3/borg_' . $list_files[$i] . '.mp3')) . '</pubDate>';
		echo '</item>';
	}
	
	echo '</channel></rss>';
}
?>