<?php require_once("inc/header.php") ?>
	<div class="content">

		<!-- If a page was passed -->
		<?php
			if(isset($_REQUEST['p'])){
				$notfound = false;
				$viewname = $_REQUEST['p'];
				$viewfile = $viewname.'.php';
				$viewpath = "inc/views/$viewfile";
				if(file_exists($viewpath))
					require $viewpath;
				else
					$notfound = true;
			}
		?>

		<!-- define if is a page or not -->
		<?php $isPage = isset($_REQUEST['p']) && !$notfound ? true : false;  ?>

		<!-- If paged passed but not found -->
		<?php if(isset($notfound) && $notfound): ?>
			<h3 style="color:red">Sorry, page "<?= $viewname ?>" not found :(</h3>
			<br/>
		<?php endif; ?>		

		<!-- If not, shows the index -->
		<?php if(!$isPage): ?>
			<ul>
				<?php $doclist = array_slice(scandir( __DIR__ . "/inc/views" ), 2); ?>
				<?php foreach($doclist as $link): ?>
					<?php $link = str_replace('.php', '', $link) ?>
					<li><a href="<?='?p='.$link?>"><?=ucfirst($link)?></a></li><br/>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<!-- Go back button if in a page -->
		<?php if(isset($viewname)): ?>
			<br/>
			<a href="?">Home</a>
		<?php endif; ?>

	</div>
<?php require_once("inc/footer.php") ?>