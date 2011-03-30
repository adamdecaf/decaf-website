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
			<h2>What is Decaf?</h2>
				<p>
				Decaf Productions is an open source web software application design company.  
				We specialize in creating secure, compatible, speedy and dynamic applications.  
				We are self taught and eager to try new things.     
				</p>
				
			<h2>What do we offer?</h2>
				<p>
				We offer a wide range of products, from blogging applications, message boards, to even full site CMS* systems. 
				We are passionate about building quality applications and backing them with the highest support.
				</p>
				
			<h2>What have we done?</h2>
				<p>
				We have partnered  with <a href="http://radiantwebdesigniowa.com" title="Radiant Web Design">Radiant Web Design</a> 
				and are currently creating and supporting sites such as 
				<a href="http://html5.tk" title="HTML5.tk A demo site for HTML5">HTML5.tk</a> and 
				<a href="http://imgmi.net" title="IMGMI.net - Your open image host">IMGMI.net</a> as an independent company.
				
				<br />
				
				Also we support our current <a href="products.php">products</a>.
				
				<br /><br />
				
				Please visit our <a href="portfolio.php">portfolio</a> for more detailed information.
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