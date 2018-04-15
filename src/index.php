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
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Borguerie Center</title>
		<meta charset="utf-8" />

		<link rel="stylesheet" href="mediaelement/mediaelementplayer.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/design.css" />
		<link rel="icon" type="image/png" href="favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<a href="http://outadoc.fr" style="margin-left: 10px;">&lt;&nbsp;&nbsp;ping timeout</a>
				<ul class="nav pull-right">
					<li>
						<a style="padding-top: 0;" href="feed.rss">Flux RSS</a>
					</li>
					<li>
						<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://borguerie.outadoc.fr" data-text="Les borgueries de Jérôme Keinborg, à portée de clic. À consommer sans modération !" data-count="horizontal" data-via="jeromekeinborg" data-related="outadoc:Le twitter du créateur du Borguerie Center ! Vous l'aimerez, que vous le vouliez ou non." data-related="outadoc:Le créateur du Borguerie Center" data-lang="fr">Tweet</a>
					</li>
					<li>
						<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fborguerie.outadoc.fr&amp;layout=button_count&amp;show_faces=false&amp;width=130&amp;action=recommend&amp;font=tahoma&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; margin-left: 10px; width:130px; height:21px;"></iframe>
					</li>
				</ul>
			</div>
		</div>
		<div class="container-fluid main">
			<div class="row-fluid">
				<div class="span11" id="header">
					<h1>Borguerie Center</h1>
					<h4>Un petit site web pour regrouper les jeux de mots de Jérôme Keinborg, tous plus capillotractés les uns que les autres. On t'aime Jérôme &lt;3<br />
					Les citations proviennent d'AppLoad, un podcast audio de NoWatch sur les applications mobiles que vous pouvez retrouver sur <a href="http://www.nowatch.net/category/nowatch-net/nowatch-fm/AppLoad-nowatch-fm/">NoWatch.net</a>.</h4>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6 borgueries">
					<?php
						if($folder = opendir('./mp3')) {
							$i=0;
							while(false !== ($file = readdir($folder)))	{
								if($file != '.' && $file != '..') {
							 		$tmp = explode('.', $file);
							 		$AppLoad_nb = explode('_', $tmp[0]);
							 		
									$list_files[$i] = $AppLoad_nb[1];
									$i++;
								}
							}
			
							closedir($folder);
							rsort($list_files);
							
							?>
							<table class="table"><thead>
								<tr>
								  <th>AppLoad #</th>
								  <th>Lecteur borguien</th>
								  <th>Lien de téléchargement</th>
								</tr>
							  </thead>
							<?php
							$i=0;
							
							while ($i < count($list_files)) {
								?>
								<tr>
									<td>AppLoad #<?php echo $list_files[$i]; ?></td>
									<td>
										<audio controls="controls" preload="none">
											<source type="audio/mp3" src="<?php echo './mp3/borg_' . str_replace(' ', '%20', $list_files[$i]) . '.mp3' ?>" />
											<object type="application/x-shockwave-flash" data="flashmediaelement.swf" width="160" height="20">
												<param name="movie" value="flashmediaelement.swf" />
												<param name="flashvars" value="controls=true&amp;file=<?php echo 'mp3/borg_' . str_replace(' ', '%20', $list_files[$i]) . '.mp3' ?>" />
											</object>
										</audio>
									</td>
									<td><i class="icon-download-alt"></i>&nbsp;<a href="<?php echo 'mp3/borg_' . str_replace(' ', '%20', $list_files[$i]) . '.mp3' ?>">Téléchargement direct</a></td>
								</tr>
								<?php
								$i++;
							}
							echo '</tr></table>';
						}
					?>
				</div>
				<div class="span6" id="hs">
					<blockquote>
						<p>Quand les plombs sautent, c'est l'orage dedans.</p>
						<small>6 juin 2011 - Twitter</small>
					</blockquote>
					<blockquote>
						<p>Chez NoWatch y'a des canons, et les boulets qui vont avec.</p>
						<small>20 juin 2011 - Twitter</small>
					</blockquote>
					<blockquote>
						<p>Le calembour nous colle à la peau, ça fait peur : c'est la balise stick...</p>
						<small>20 juin 2011 - Twitter</small>
					</blockquote>
					<blockquote>
						<p>C'est @DelphineRivet, c'est un cas... mikase...</p>
						<small>20 juin 2011 - Twitter</small>
					</blockquote>
					<blockquote>
						<p>C'est peut-être un téléphone pour les Inuits ? Puisque c'est un i-N-8 ? Ah non, c'est un N9.</p>
						<small>30 juin 2011 - AppLoad #69</small>
					</blockquote>
					<blockquote>
						<p>Femme qui celeri, à moitié dans ton lit !</p>
						<small>20 juin 2011 - AppLoad #69</small>
					</blockquote>
					<blockquote>
						<p>Le métro roule dans le sens Simplon.</p>
						<small>27 juillet 2011</small>
					</blockquote>
					<blockquote>
						<p>Bref vous vous êtes bien Knackité de la tâche, sans strass ni bourre, pour une nouvelle ère.. ta.</p>
						<small>28 juillet 2011 - Twitter</small>
					</blockquote>
					<blockquote>
						<p>Faut juste que je retrouve le commentaire de mon détracteur, puisque moi aussi j'ai des tracteurs...</p>
						<small>3 août 2011 - AppLoad #74</small>
					</blockquote>
					<blockquote>
						<p>Non mais on nous compare quand même à la Bible, j'vous dis pas, on est dans la Moïse...</p>
						<small>3 août 2011 - AppLoad #74</small>
					</blockquote>
					<blockquote>
						<p>Le patron d'Orange, c'est connu, il est toujours au jus.</p>
						<small>28 septembre 2011 - AppLoad #82</small>
					</blockquote>
					<blockquote>
						<p>Grand mère SFR un bon café... oui, bon, ok je go me coucher...</p>
						<small>9 octobre 2011 - Twitter</small>
					</blockquote>
					<blockquote>
						<p>Apple planche sur une TV scierie.</p>
						<small>19 décembre 2011 - Le Rendez-Vous Tech #76</small>
					</blockquote>
					<blockquote>
						<p>Je vais lancer Stupefy, un abonnement à la drogue en flux continu.</p>
						<small>19 décembre 2011 - Le Rendez-Vous Tech #76</small>
					</blockquote>
					<blockquote>
						<p>Heureusement qu'ils ont pas ajouté un &quot;d&quot; dans le nom [de @bankinapp], bankidnapp, c'est un cas Goule…</p>
						<small>11 janvier 2012 - Twitter</small>
					</blockquote>
					<blockquote>
						<p>J'ai investi dans une camionette pour lancer Frite Mobile.</p>
						<small>17 janvier 2012 - Le Rendez-Vous Tech #78</small>
					</blockquote>
					<blockquote>
						<p>En fait il existe pas : Le forfait Frit est pané ! *prend la porte, elle est fermée ! paf !*</p>
						<small>17 janvier 2012 - Le Rendez-Vous Tech #78</small>
					</blockquote>
					<blockquote>
						<p>Sarko va profiter de la mode Free, son nouveau nom c'est Nicolas SarkoFree.</p>
						<small>17 janvier 2012 - Le Rendez-Vous Tech #78</small>
					</blockquote>
					<blockquote>
						<p>C'est le gateau au Niel Free au beurre.</p>
						<small>17 janvier 2012 - Le Rendez-Vous Tech #78</small>
					</blockquote>
					<blockquote>
						<p>Siri en japonais… ils vont se faire Hara-Siri.</p>
						<small>8 mars 2012 - AppLoad #103</small>
					</blockquote>
					<blockquote>
						<p>Quand vous levez votre canette de #Redbull au dessus de la tête, c'est un #stratoast.</p>
						<small>14 octobre 2012 - Twitter</small>
					</blockquote>
				</div>
			</div>
		</div>
		<footer>
			<div class="container-fluid">
				<div class="row">
					<p>&copy; Baptiste Candellier (<a href="http://twitter.com/#!/outadoc">outadoc</a>) 2012</p>
				</div>
			</div>
		</footer>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="mediaelement/mediaelement-and-player.min.js"></script>
		<script type="text/javascript">
			$('video,audio').mediaelementplayer({audioWidth: 230});
			
			var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-20615472-4']);
			  _gaq.push(['_trackPageview']);
			
			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
		</script>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	</body>
</html>
