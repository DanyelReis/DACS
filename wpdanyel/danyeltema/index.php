<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Danyel Reis</title>
    <meta charset="utf-8">
	<style rel="stylesheet">/>
	body { background-color: #cff; } /*azul claro*/
	h2 { background-color: #f00; }   /* vermelho */
	p { background-color: #0f0; }    /*  verde   */
	</style>
	<style type="text/css">
	
		#menubv {
		width: 450px; - LARGURA
		padding: 0;
		margin: 0;
		font: 10px Verdana, sans-serif;
		}
		 
		#menubv ul {
		list-style: none;
		margin: 0;
		padding: 0;
		}
		 
		#menubv li {
		border-bottom: 1px solid #000000;
		margin: 0;
		}
		 
		#menubv li a {
		display: block;
		padding: 20px 20px 20px 0.5em;
		font-weight:bold;
		border-top: 1px solid #000000;
		border-width: 1px solid #000000;
		border-left: 1px solid #000000;
		border-right: 1px solid #000000;
		background-color: blue;
		color: #FFFFFF;
		text-decoration: none;
		}
		 
		#menubv li a:hover {
		border-left: 1px solid #000000;
		border-right: 1px solid #000000;
		background-color: #ff6600;
		color: #fff;
		}
		 
		 
		/* Fix IE. Hide from IE Mac */
		* html #menubv ul li { float: left; height: 1%; }
		* html #menubv ul li a { height: 1%; }
		/* End */
	</style>
  </head>
  <body>
    <?php
		global $wpdb;

		$query = "SELECT post_title, post_content, post_modified FROM $wpdb->posts WHERE post_status = 'publish'";
		$rows = $wpdb->get_results($query);
		foreach ($rows as $row) {
			$postTitle    = $row->post_title;
			$postContent  = $row->post_content;
			$postModified = $row->post_modified;

			echo "<h1>" . $postTitle    . "</h1>";
			echo "<p>"  . $postContent  . "</p>";
			echo "</br>";
			echo "<p>"  . $postModified . "</p>";

			echo "<hr>";
		}
	?>
	<div id="menubv">
		<ul id="menuver">
		<li><a href="#" title="">PHP</a></li>
		<li><a href="#" title="">WORDPRESS</a></li>
		<li><a href="#" title="">WALTER</a></li>
		<li><a href="#" title="">DACS</a></li>
		<li><a href="#" title="">DANYEL REIS</a></li>
		</ul>
	</div>
  </body>
</html>



