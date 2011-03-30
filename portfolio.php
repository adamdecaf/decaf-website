<?php
/**
 * Decaf Productions
 * Adam Shannon
 * License: MIT LICENSE
 * 08/08/2009
 */
	
	// Start the docuemnt
	include "includes/html/html.php";
	include "includes/html/header.php";
?>

	<div id="content">
	
		<div id="right">
			<h2>Our Portfolio</h2>
			<p>
				<h3>Hosting</h3>
				
				We currently are the developing support for applications such as 
					<a href="http://html5.tk">HTML5.tk</a>, <a href="http://imgmi.net">IMGMI.net</a> and some private products.
				
				Also we host numerous clients on our servers.
			</p>
			
			<p>
				<h3>Applications</h3>
				
				We fluently design web applications and <a href="products.php">products</a> for our clients and the open source community.
			</p>
				
			<span>
				<?php include "includes/html/news.php"; ?>
			</span>
		</div>
		
		<div id="left">
			<?php include "includes/html/left-nav.php"; ?>
		</div>
		
	</div>

<?php
	// Close the document
	include "includes/html/footer.php";
?>