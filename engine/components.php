<?php

/************************************************************************
 * Composants généraux
 ************************************************************************/
function _Header()
{
?>
	<header>
		<div class="container">
			<a class="logo white" href="/">
			<?php print(CorporateLogo()); ?>
			</a>
			<div class="rightAlign">
				<?php Button( $content=$GLOBALS['TEXTS']['buttons']['role'], $class="", $href="/roles/"); ?>
				<?php printHiringButton($content="truc"); ?>
			</div>
		</div> <!-- .container -->
	</header>
<?php
}


function Footer()
{
?>
	<footer>
		<div class="container">
			<div class="whoAreWe">
				<h5 class="logo colored">
					<?php print(CorporateLogo()); ?>
				</h5>
			</div> <!-- .whoAreWe -->
			<div class="socialMediaList">
				<a class="socialMediaMacaro">
					<img class="picto" src="" />
				</a>
				<a class="socialMediaMacaro">
					<img class="picto" src="" />
				</a>
				<a class="socialMediaMacaro">
					<img class="picto" src="" />
				</a>
			</div> <!-- .socialMediaList -->
			<div class="copyright">
			<?php print($GLOBALS["TEXTS"]["footer"]["remind"]); ?>
			</div> <!-- .copyright -->
		</div> <!-- .container -->
	</footer>
<?php
}

function generateMainTestimonies($testimoniesData)
{
	$usedTestimonies=[];
	foreach ($testimoniesData as $aMainTestimony) {
		$usedTestimonies[] = new Testimony($author=$aMainTestimony["author"], $image=$aMainTestimony["image"], $Testimony=$aMainTestimony["testimony"], $isPreview=True);
	}

	return $usedTestimonies;
}

function CardGrid($testimoniesData)
{
	$usedTestimonies=generateMainTestimonies($testimoniesData);
?>
	<div class="CardGrid">
<?php
		foreach ($usedTestimonies as $aTestimony) {
			TestimonieCard($aTestimony);
		}
?>
	</div> <!-- .CardGrid -->
<?php
}


function makeDiscretionIfAny($ticket)
{
	if ($ticket != Null && $ticket != "")
	{
?>
	<h3 class="discretion"><span><?php print($ticket); ?></span></h3>
<?php
	}
}

function makeExtravagantIfAny($title)
{
	if ($title != Null && $title != "")
	{
?>
	<h4 class="extravagant"><?php print($title); ?></h4>
<?php
	}
}

function makeIntroductionIfAny($introduction)
{
	if ($introduction != Null && $introduction != "")
	{
?>
	<p class="large"><?php print($introduction); ?></p>
<?php
	}
}


function fancyTitle($title=Null, $ticket=Null, $introduction=Null)
{
	if ($title!=Null or $ticket!=Null or $introduction!=Null)
	{
		?><div class="centering"><?php
		makeDiscretionIfAny($ticket);
		makeExtravagantIfAny($title);
		makeIntroductionIfAny($introduction);
		?></div> <!-- .centering --><?php
	}
}

/************************************************************************
 * Page d’acceuil
 ************************************************************************/
function LearnMore()
{?>
		<div id="LearnMore">
			<div class="container">
			<h3 class="discretion"><span><?php print($GLOBALS["TEXTS"]["LearnMore"]["label"]); ?></span></h3>
			<h4 class="extravagant"><?php print($GLOBALS["TEXTS"]["LearnMore"]["extravagant"]); ?></h4>

<?php
/*
				<video controls>
					<source src="chemin/de/la/video.mp4" type="video/mp4">
					<?php print($GLOBALS["TEXTS"]["errorMessages"]["brokenVideo"]); ?>
				</video>
 */
?>


				<div class="flipFlap">
					<div class="flipFlapElement">
						<div class="sideRecto">
							<h4 class="extravagant"><?php print($GLOBALS["TEXTS"]["LearnMore"]["firstArticle"]["Title"]); ?></h4>
							<p><?php print($GLOBALS["TEXTS"]["LearnMore"]["firstArticle"]["introduction"]); ?></p>
							<ul class="validate">
								<li><?php print($GLOBALS["TEXTS"]["LearnMore"]["firstArticle"]["list"][0]); ?></li>
								<li><?php print($GLOBALS["TEXTS"]["LearnMore"]["firstArticle"]["list"][1]); ?></li>
								<li><?php print($GLOBALS["TEXTS"]["LearnMore"]["firstArticle"]["list"][2]); ?></li>
							</ul>
						</div> <!-- .sideRecto -->
						<div class="sideVerso">
						<img src="<?php print($GLOBALS["TEXTS"]["LearnMore"]["firstArticle"]["illustration"]); ?>" alt="" class="" />
						</div> <!-- .sideVerso -->
					</div> <!-- .flipFlapElement -->


					<div class="flipFlapElement">
						<div class="sideRecto">
							<h4 class="extravagant"><?php print($GLOBALS["TEXTS"]["LearnMore"]["secondArticle"]["Title"]); ?></h4>
							<p><?php print($GLOBALS["TEXTS"]["LearnMore"]["secondArticle"]["introduction"]); ?></p>
							<?php
								$usedTestimony=$GLOBALS["TEXTS"]["LearnMore"]["secondArticle"]["testimony"];
								$usedTestimonyObject=new Testimony($author=$usedTestimony["author"], $image=$usedTestimony["image"], $testimony=$usedTestimony["testimony"], $isPreview=False);
								TestimonieCard($usedTestimonyObject);
							?>
						</div> <!-- .sideRecto -->
						<div class="sideVerso">
							<img src="https://cdn.prod.website-files.com/5e6947ce3fd8148aa23649ce/6642b208c6ba82daebacfa78_USP%20Large-p-500.jpeg" />
						</div> <!-- .sideVerso -->
					</div> <!-- .flipFlapElement -->


					<div class="flipFlapElement">
						<div class="sideRecto">
							<h4 class="extravagant"><?php print($GLOBALS["TEXTS"]["LearnMore"]["thirdArticle"]["Title"]); ?></h4>
							<p><?php print($GLOBALS["TEXTS"]["LearnMore"]["thirdArticle"]["introduction"]); ?></p>
							<ul  class="validate">
								<li><?php print($GLOBALS["TEXTS"]["LearnMore"]["thirdArticle"]["list"][0]); ?></li>

								<li><?php print($GLOBALS["TEXTS"]["LearnMore"]["thirdArticle"]["list"][1]); ?></li>

								<li><?php print($GLOBALS["TEXTS"]["LearnMore"]["thirdArticle"]["list"][2]); ?></li>

							</ul>
						</div> <!-- .sideRecto -->
						<div class="sideVerso">
							<img src="https://cdn.prod.website-files.com/5e6947ce3fd8148aa23649ce/6642b208c6ba82daebacfa78_USP%20Large-p-500.jpeg" alt="" class="" />
						</div> <!-- .sideVerso -->
					</div> <!-- .flipFlapElement -->
				</div> <!-- .flipFlap -->
			</div> <!-- .container -->
		</div> <!-- #LearnMore -->
<?php
}


function OurAproach()
{
?>
		<div id="OurAproach">
			<div class="container">
				<h3 class="discretion"><span><?php print($GLOBALS["TEXTS"]["whatToExpect"]["upTitle"]); ?></span></h3>
				<h4 class="extravagant"><?php print($GLOBALS["TEXTS"]["whatToExpect"]["title"]); ?></h4>
				<?php BigNumberOL($GLOBALS['TEXTS']['whatToExpect']['list']); ?>
			</div> <!-- .container -->
		</div> <!-- #OurAproach -->
<?php
}


function WhatsPossible()
{
?>
		<div id="WhatsPossible">
			<div class="container">
				<div class="titling">
					<h3 class="discretion"><span><?php print($GLOBALS['TEXTS']['WhatsPossible']['upTitle']); ?></span></h3>
					<h4 class="extravagant">
						<?php print($GLOBALS['TEXTS']['WhatsPossible']['title']); ?>
					</h4>
					<p class="large"><?php print($GLOBALS['TEXTS']['WhatsPossible']['introduction']); ?></p>
				</div>

				<div class="trisection">
					<?php
	foreach ($GLOBALS['TEXTS']['WhatsPossible']['trisectionCard'] as $aSectorCard)
				{
					SectorCard($image=$aSectorCard["image"],$title=$aSectorCard["title"],$comment=$aSectorCard["comment"]);
					}
					?>
				</div> <!-- .trisection -->

				<div class="centering">
					<?php printHiringButton("startHiring highlighted"); ?>
				</div> <!-- .centering -->
			</div> <!-- .container -->
		</div> <!-- #WhatsPossible -->
<?php
}

function NecessaryAsterisc()
{
?><span class="NecessaryAsterisc">*</span><?php
}

function DownloadOurSalaryguide()
{
?>
		<div id="DownloadOurSalaryguide">
			<div class="container">
				<div class="flipFlap">
					<div class="flipFlapElement">
						<div class="sideRecto">
							<h4 class="extravagant"><?php print($GLOBALS['TEXTS']['DownloadOurSalaryguide']['title']); ?></h4>
							<p><?php print($GLOBALS['TEXTS']['DownloadOurSalaryguide']['abstract']); ?></p>
							<form action="/processForm.php" method="post" class="stacked">
								<label for="firstName"><?php print($GLOBALS['TEXTS']['forms']['firstName']); ?><?php NecessaryAsterisc(); ?></label>
								<input type="text" id="first_name" name="first_name" required>
						
								<label for="lastName"><?php print($GLOBALS['TEXTS']['forms']['lastName']); ?><?php NecessaryAsterisc(); ?></label>
								<input type="text" id="last_name" name="last_name" required>
						
								<label name="email" required="" placeholder="" type="email" inputmode="email" autocomplete="email" value="" for="email"><?php print($GLOBALS['TEXTS']['forms']['email']); ?><?php NecessaryAsterisc(); ?></label>
								<input type="email" id="email" name="email" required>
						
								<button type="submit" class="highlighted"><?php print($GLOBALS['TEXTS']['forms']['submit']); ?></button>
							</form>
						</div> <!-- .sideRecto -->
						<div class="sideVerso">
							<img src="https://cdn.prod.website-files.com/5e6947ce836a8f4014824e30/5ec839f806d25c2a7e0a8678_mimi-thian-5ZnS3wK6sUg-unsplash-customersupport-p-1080.jpeg" alt="" class="" />
						</div> <!-- .sideVerso -->
					</div> <!-- .flipFlapElement -->
				</div> <!-- .flipFlapElement -->

			</div> <!-- .container -->
		</div> <!-- #DownloadOurSalaryguide -->
<?php
}

function ReadyToWorkTogether()
{
?>
		<div id="ReadyToWorkTogether">
			<div class="container">
				<div class="centering">
				<h4 class="extravagant"><?php print($GLOBALS['TEXTS']['readyToWorkTogether']['title']); ?></h4>
					<p class="large"><?php print($GLOBALS['TEXTS']['readyToWorkTogether']['introduction']); ?></p>

					<?php printHiringButton("startHiring highlighted"); ?>
				</div> <!-- .centering -->
			</div> <!-- .container -->
		</div> <!-- #ReadyToWorkTogether -->
<?php
}


function HeroSection()
{
?>
	<div id="HeroSection">
		<div class="container">
			<h2>
					<?php print($GLOBALS['TEXTS']['heroSection']["h2"]); ?>
				<br />
			</h2>
			<p class="wide"><?php print($GLOBALS['TEXTS']['heroSection']["introduction"]); ?></p>
			<?php printHiringButton("startHiring highlighted", $content=$GLOBALS['TEXTS']['heroSection']["customHirringButton"]); ?>



		</div> <!-- .container -->
	</div> <!-- #HeroSection -->
<?php
}


function FullPageAfterType($type)
{

	prepareTopHalfPage();
	include_once  $_SERVER['DOCUMENT_ROOT'] . '/../engine/pages/' . $type. '.php'; # TODO factoriser le lien
	prepareBottomHalfPage();
}

function prepareTopHalfPage()
{
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/style.css">
	<title><?php print($GLOBALS['DATA']['COMPANY_NAME']); ?></title>
</head>

<body>
	<?php 
	_Header();
	?>

	<main>
<?php
}

function prepareBottomHalfPage()
{
?>

	</main>

	<?php
	Footer();
	GoToTopPage();
	?>
</body>

<script src="/assets/script/ux.js"></script>
</html>
<?php
}


function FullPageAfterLink($link)
{
	prepareTopHalfPage();
	if ($link)
	{
		include_once $_SERVER['DOCUMENT_ROOT'] . '/' . $link . '/index.php'; # TODO factoriser le lien
	}
	else
	{
		include_once $_SERVER['DOCUMENT_ROOT'] . '/' . '../engine/pages/homepage.php';
	}
	prepareBottomHalfPage();
}

function ARole($role)
{
?>
	<div class="ARole">
		<div class="imageContainer">
			<img src="<?php print($role->image) ; ?>" />
		</div> <!-- .imageContainer -->
		<div class="text-container">
			<h4><?php print($role->headline) ; ?></h4>

			<p class="discretion"><?php print($role->paragraph) ; ?></p>
			<?php printHiringButton("highlighted"); ?>
		</div> <!-- .text-container-->
	</div> <!-- .ARole -->
<?php
}

function printPageSectionHeadlineIfAny($content)
{
	if (! empty($content) )
	{
		?><h1><?php print($content); ?></h1><?php
	}
}

function printPageSectionLabelIfAny($content)
{
	if (! empty($content) )
	{
		?><h3 class="discretion"><span><?php print($content); ?></span></h3><?php
	}
}

function printPageSectionParagraphIfAny($content)
{
	if (! empty($content) )
	{
		?><p><?php print($content); ?></p><?php
	}
}

function PageSectionTitle($headline="", $label="", $paragraph="", $class="")
{
?>
	<div class="PageSectionTitle <?php print($class); ?>">
		<div class="container">
		<?php
			printPageSectionLabelIfAny($label);
			printPageSectionHeadlineIfAny($headline);
			printPageSectionParagraphIfAny($paragraph);
		?>
		</div> <!-- .container -->
	</div> <!-- .PageSectionTitle -->
<?php
}

function generateListOfRolesData($listOfRoles)
{
	$usedRoles=[];
	foreach ($listOfRoles as $aRole) {
		$usedRoles[] = new Role($headline=$aRole["headline"], $paragraph=$aRole["paragraph"], $image=$aRole["image"]);
	}

	return $usedRoles;
}

function Roles($listOfRoles)
{
	$usedRoles=generateListOfRolesData($listOfRoles);
?>
	<div class="Roles">
		<div class="container">
			<div class="RoleGrid trisection">
			<?php
				foreach ($usedRoles as $aRole) {
					ARole($aRole);
				}
			?>
			</div> <!-- .RoleGrid -->
		</div> <!-- .container -->
	</div> <!-- .Roles -->
<?php
}

function makeIdIfAny($id)
{
	if ( $id != Null)
	{
		print("id='" . $id . "'");
	}
}

function contactSection($title=Null, $ticket=Null, $introduction=Null, $class=Null, $id=Null)
{
	?><div <?php makeIdIfAny($id); ?>>
		<div class="container"><?php
	fancyTitle($title=$title, $ticket=$ticket, $introduction=$introduction);
	contactForm();
		?></div> <!-- .container-->
	</div> <!-- <?php makeIdIfAny($id); ?> --><?php
}
