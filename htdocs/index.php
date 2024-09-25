<?php
function includ_once_glob($directory)
{
	$files = glob($directory . '/*.php');
	foreach ($files as $file) {
		include_once $file;
	}
}

include_once '../engine/datas.php';

include_once '../engine/class.php';
includ_once_glob('../engine/class');

include_once '../engine/ui.php';
includ_once_glob('../engine/ui');

include_once '../engine/components.php';
includ_once_glob('../engine/components');

include_once '../engine/texts.php';
includ_once_glob('../engine/texts');


function trimLastSlash($link)
{
	if (substr($link, -1) === '/') {
		return substr($link, 0, -1);
	}
	return $link;
}

$link=Null;
if (isset($_GET['link'])) {
	$link = trimLastSlash($_GET['link']);
}
?>

<?php
if (file_exists('../htdocs/' . $link . "/index.php"))
{
	FullPageAfterLink($link);
}
else
{
	FullPageAfterType("404");
//	print("404 — Nous trouverons les profils qui vous conviendront, mais nous ne trouvons pas cette page.");
}
?>
