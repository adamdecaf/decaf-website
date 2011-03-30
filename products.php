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
			<h2>Our products</h2>
				<p>
				We offer the following applications:
					<p>
						<h3>Issue Tracking System</h3>
						
						Have you ever wanted an extremely lightweight issue tracking system?  
						Do you consider yourself a geek who knows how to manage some programming tasks?  
						If so then this application is right for you, go check out a 
						<a href="http://demos.decafproductions.com/issue-tracker/">demo</a> if you would like
						a developemnt copy please email us and we will send one your way.  
					</p>
					
					<p>
						<h3>Message Board System</h3>
						
						Want your own message board or forum system but don't like the others?  
						Why not give ours a <a href="http://demos.decafproductions.com/message-board/">try</a> 
						if you would like a developemnt copy please email us and we will send one your way. 
					</p>
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