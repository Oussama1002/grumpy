<div class="container">
<?php

print_r($_POST);
?>
</div>

<?php

print("truc");
// Connexion à la base de données
$host = 'localhost';
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

try {
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die("Error: Could not connect. " . $e->getMessage());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Récupérer les données du formulaire
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
	$companyName = $_POST['companyName'];
	$whereDidYouHearAboutUs = $_POST['whereDidYouHearAboutUs'];
	$message = $_POST['message'];

	// Préparer la requête d'insertion
	$sql = "INSERT INTO contacts (firstName, lastName, email, phoneNumber, companyName, whereDidYouHearAboutUs, message)
		VALUES (:firstName, :lastName, :email, :phoneNumber, :companyName, :whereDidYouHearAboutUs, :message)";

	$stmt = $pdo->prepare($sql);

	// Lier les paramètres
	$stmt->bindParam(':firstName', $firstName);
	$stmt->bindParam(':lastName', $lastName);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':phoneNumber', $phoneNumber);
	$stmt->bindParam(':companyName', $companyName);
	$stmt->bindParam(':whereDidYouHearAboutUs', $whereDidYouHearAboutUs);
	$stmt->bindParam(':message', $message);

	// Exécuter la requête
	if ($stmt->execute()) {
		echo "Form submitted successfully!";
	} else {
		echo "Error submitting the form!";
	}
}
?>

