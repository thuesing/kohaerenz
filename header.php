<?php
$cwd = str_replace("\\", "/", getcwd());
if(strpos($cwd, "/examples") !== false) {
	$pathPrefix = "../";
	$examplePathPrefix = "";
}
else {
	$pathPrefix = "";
	$examplePathPrefix = "examples/";
}

/*

$version = file_get_contents($pathPrefix . "version");
*/
function prettyprint($code) {
	echo '<pre class="prettyprint linenums">', str_replace("\t", str_repeat("&nbsp", 4), htmlspecialchars($code)), '</pre>';
}

?>	

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Kohärenzwiki</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="<?php echo $pathPrefix; ?>PFBC/Resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}

			ul.nav.nav-tabs {
				margin: -1px !important;
			}

    	</style>
		<link href="<?php echo $pathPrefix; ?>PFBC/Resources/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php echo $pathPrefix; ?>prettify/prettify.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script type="text/javascript" src="<?php echo $pathPrefix; ?>PFBC/Resources/jquery.min.js"></script>
		<script src="<?php echo $pathPrefix; ?>PFBC/Resources/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo $pathPrefix; ?>prettify/prettify.js"></script>
	</head>
   <body onload="prettyPrint()">
<!--

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<p class="brand">Kohärenzwiki</p>
					<div class="nav-collapse collapse">
						<p class="navbar-text pull-right">
							Sponsored by <img src="http://www.imavex.com/schemes/IMAVEX.COM/images/imavex-logo.png" alt="imavex" style="height: 25px; margin-top: -3px; cursor: pointer;" onclick="window.location = 'http://www.imavex.com/';"/>
						</p>
					</div>
				</div>
			</div>
		</div>
-->

<?php
$script = basename($_SERVER["PHP_SELF"]);
?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">

          <a class="brand" href="#">Kohärenzwiki</a>


          <div class="nav-collapse collapse">
    
            <ul class="nav pull-right">
              <li <?php if($script == "thema.php") echo ' class="active"';?>>
                <a href="./thema.php">Thema</a>
              </li>
              <li <?php if($script == "problem.php") echo ' class="active"';?>>
                <a href="./problem.php">Problem</a>
              </li>
              <li <?php if($script == "ursache.php") echo ' class="active"';?>>
                <a href="./ursache.php">Ursache</a>
              </li>
              <li <?php if($script == "ziel.php") echo ' class="active"';?>>
                <a href="./ziel.php">Ziel</a>
              </li>
              <li <?php if($script == "sektor.php") echo ' class="active"';?>>
                <a href="./sektor.php">Sektor</a>
              </li>
              <li <?php if($script == "verhalten.php") echo ' class="active"';?>>
                <a href="./verhalten.php">Verhalten</a>
              </li>
               <li <?php if($script == "massnahme.php") echo ' class="active"';?>>
                <a href="./massnahme.php">Massnahme</a>
              </li>             
            </ul>
 
          </div>
        </div>
      </div>
    </div>




