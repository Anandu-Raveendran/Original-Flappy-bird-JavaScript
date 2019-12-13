<?php

$data = $_POST['String'];
/* set mode of file to writable. */
chmod("../website-contents.json",0777);
$f = fopen("../website-contents.json", "w+") or die("fopen failed");
fwrite($f, $data);
fclose($f);

echo "Saved to $file successfully!";

?>


