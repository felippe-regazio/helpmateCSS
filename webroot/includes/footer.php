<?php 
  require "hotreloader.php";
  $reloader = new HotReloader();
  $reloader->setRoot(__DIR__);
  $reloader->init();
?>
</body>
</html>