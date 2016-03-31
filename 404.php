<?php

$page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
$server_url = "http://" . $_SERVER["SERVER_NAME"] . "/";
$redirect_url = $_SERVER["REDIRECT_URL"];
$redirect_url_array = parse_url($redirect_url);
$end_of_path = strrchr($redirect_url_array["path"], "/");

?>

<?php
	get_header();
?>
			<div id="bc"></div>
				<div id="left">
					
				</div>
				<div id="right">
                	<img src="<?php bloginfo('template_url'); ?>/images/hw_error.jpg" alt="Error image" />
                </div>
			<div id="bottom">
				<div id="content">
                <h2>Error Code 404 - Page not found</h2>
                
                	<p>The <a href="http://en.wikipedia.org/wiki/Uniform_resource_locator">URL</a> you requested was not found. <?PHP echo($explanation); ?></p>
                	<p><strong>If you came across a broken link, please email the <a href="mailto:rmevjen@asu.edu">webmaster</a>.</strong></p>
                	<p>You may also want to try starting from the home page: <a href="<?php print ($server_url); ?>"><?php print ($server_url); ?></a></p>
           		     
           		</div>
           	</div>
<?php
	get_footer();
?>