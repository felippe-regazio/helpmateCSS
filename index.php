<!-- ***
	
	WELLCOME TO HELLO BOILERPLATE
	
	This is your index page. Would be a good idea start reading the README.md file if you didnt. You can find 
	your config at config.php where you can change to your needings. You will find the footer and header at the 
	require path below here. They're in separated files for organization purposes only. The applicaition flux is 
	very intuitive. Scss at "scss" folder, JS at "js" folder. Keep gulp running and build your page at index.php. 
	Feel free to help improove this boilerplate at github.

*** -->

<?php require_once("webroot/includes/header.php") ?>
	<div class="content">
		
		<div class="block">
			<h1>HelpmateCSS</h1>
			<hr><p>This is a simple page to demonstrate the "Helpmate CSS" classes. The gutter default value is 14px. So the paddings, margins, etc will start on 14px and inc or dec from this. The base value for borders or any other property which requires a thin value to start will begin at 1px and be inc or dec from this. The square size on this demo is 100x100 by default.</p>
			<br/>
		</div>

		<?php
			$p = $_REQUEST['p'];
			if(!empty($p) && file_exists("webroot/includes/helpviews/$p.php")):
				require "webroot/includes/helpviews/$p.php";
			else:
		?>
			<ul>
				<li><a href="?p=padding">Padding</a></li>
				<br/>
				<li><a href="?p=margin">Margin</a></li>
				<br/>
				<li><a href="?p=border">Border</a></li>				
			</ul>
		<?php endif; ?>

		<!-- bottom -->
		<?php if(!empty($p) && !file_exists("webroot/includes/helpviews/$p.php")): ?>
			<br/><br/>
			<p style='color: red'>404: Página "<?=$p?>" Não Encontrada</p>
		<?php endif; ?>
		<?php if(!empty($p)): ?> <a href="?">Voltar</a><?php endif; ?>

	</div>
<?php require_once("webroot/includes/footer.php") ?>	