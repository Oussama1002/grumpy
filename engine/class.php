<?php
// Définition d'une classe
$LIST_OF_TESTIMONIES= [];
$LIST_OF_TESTIMONIES_PREVIEW= [];
class Testimony {
	// Propriétés (attributs)
	public $author;
	public $image;
	public $testimony;
	public $isPreview;

	// Constructeur
	public function __construct($author="", $image="", $testimony="", $isPreview=True) {
		$this->author = $author;
		$this->image = $image;
		$this->testimony = $testimony;
		$this->preview = $isPreview;
		
		// Ajouter l'objet actuel à la liste globale
		global $LIST_OF_TESTIMONIES;  // Utilisation de la variable globale
		$LIST_OF_TESTIMONIES[] = $this;

		if ($isPreview)
		{
			global $LIST_OF_TESTIMONIES_PREVIEW;  // Utilisation de la variable globale
			$LIST_OF_TESTIMONIES_PREVIEW[] = $this;
		}
	}
}

class Role {
	// Propriétés (attributs)
	public $headline;
	public $paragraph;
	public $image;

	// Constructeur
	public function __construct($headline="", $paragraph="", $image="") {
		$this->headline = $headline;
		$this->paragraph = $paragraph;
		$this->image = $image;
	}
}

class Apply
{
	// Propriétés (attributs)
	public $firstName;
	public $lastName;
	public $email;
	public $phoneNumber;
	public $companyName;
	public $whereDidYouHearAboutUs;
	public $message;
	public $userLanguage;
	public $userAgent;
	public $userAddress;


	// Constructeur
	public function __construct($firstName="", $lastName="", $email="", $phoneNumber="", $companyName="", $whereDidYouHearAboutUs="", $message="", $userLanguage="",$userAgent="",$userAddress="")
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->phoneNumber = $phoneNumber;
		$this->companyName = $companyName;
		$this->whereDidYouHearAboutUs = $whereDidYouHearAboutUs;
		$this->message = $message;
		$this->userLanguage = $userLanguage;
		$this->userAgent = $userAgent;
		$this->userAddress = $userAddress;
	}

	function prepareCSVLine()
	{
		$csvLine = Array($this->firstName,
			$this->lastName,
			$this->email,
			$this->phoneNumber,
			$this->companyName,
			$this->whereDidYouHearAboutUs,
			$this->message,
			$this->userLanguage,
			$this->userAgent,
			$this->userAddress);
		return $csvLine;
	}

	public function registerOnDB() {
		$handle = fopen($GLOBALS['LEAD_FILE'], 'a');
		$content = $this->prepareCSVLine();

		if ($handle) {
			fputcsv($handle, $content);
			fclose($handle);
			return True;
		} else {
			return False;
		}
	}
}
?>
