function scrollToTop() {
	window.scrollTo({
		top: 0,
		behavior: 'smooth' // Fait défiler en douceur
	});
}

const phoneInput = document.getElementById('phone');

phoneInput.addEventListener('input', function () {
    this.value = this.value
	.replace(/\D/g, '') // Retirer les caractères non numériques
	.replace(/^(33|0)/, '+33') // Ajouter +33 si 0 ou 33 au début
	.replace(/(\+\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/, '$1 $2 $3 $4 $5') // Format
	.trim();
});
