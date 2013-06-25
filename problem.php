<?php
use PFBC\Form;
use PFBC\Element;
use PFBC\View;

session_start();
error_reporting(E_ALL);
include("PFBC/Form.php");

if(isset($_POST["form"])) {
	Form::isValid($_POST["form"]);
	header("Location: " . $_SERVER["PHP_SELF"]);
	exit();	
}

include("header.php");

?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span9">
			<div class="page-header">
				<h1>Problem</h1>
			</div>

		    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
			dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
			Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
			dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
			Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            

			<br/>
			<ul class="nav nav-tabs">
  				<li class="active"><a href="#">Edit</a></li>
  				<li class=""><a href="#">New</a></li>
			</ul>

			<?php
			$ursachen = array("Ursache #1", "Ursache #2", "Ursache #3");
			$ziele = array("Ziel #1", "Ziel #2", "Ziel #3");

			$form = new Form("vertical");

			$form->configure(array(
				"prevent" => array("bootstrap", "jQuery", "focus"),
			    "view" => new View\Vertical,
			    "labelToPlaceholder" => 0
			));

			$form->addElement(new Element\Hidden("form", "vertical"));
			$form->addElement(new Element\HTML('<br/>'));

			$form->addElement(new Element\CKEditor("", "CKEditor"));

            $form->addElement(new Element\HTML('<br/>'));
			$form->addElement(new Element\HTML('<legend>Beziehung hinzufügen</legend>'));
			$form->addElement(new Element\Select("verstärkt durch Ursache:", "Select", $ursachen));

			$form->addElement(new Element\Select("adressiert durch Ziel:", "Select", $ziele));

			$form->addElement(new Element\Button);
			$form->addElement(new Element\Button("Cancel", "button", array(
				"onclick" => "history.go(-1);"
			)));
			$form->render();
			?>

		</div> <!-- span9 -->
		<div class="span3">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="nav-header">verstärkt durch Ursachen</li>
					<li><a href="./ursache.php">Ursache #10</a></li>
					<li><a href="./ursache.php">Ursache #12</a></li>
					<li><a href="./ursache.php">Ursache #20</a></li>
					<li class="nav-header">adressiert durch Ziel</li>
					<li><a href="./ziel.php">Ziel #11</a></li>
					<li><a href="./ziel.php">Ziel #18</a></li>
					<li><a href="./ziel.php">Ziel #19</a></li>
				</ul>
			</div>
		</div>	
</div> <!-- row-fluid -->

<?php
include("footer.php");
