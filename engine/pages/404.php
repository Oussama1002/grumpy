<?php
PageSectionTitle($headline="Page introuvable", $label="Erreur", $paragraph="Nous trouverons les profils qui vous conviendront, mais nous ne trouvons pas cette page.", $class="center");

?>


<div id="FourHundredAndFourcontainer">
	<div class="container">
<?php FourHundredAndFour(); ?>
	</div> <!-- .container -->


</div> <!-- #FourHundredAndFourcontainer -->



<script>
	const requiredElements = document.querySelectorAll('[required]');

	requiredElements.forEach(element => {
		// Fais quelque chose avec chaque élément
		element.addEventListener("focus", () => {
			element.classList.add("focused");
		});
	});
</script>
