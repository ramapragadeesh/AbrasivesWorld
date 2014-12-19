<?php
function findFiles($directory, $extensions = array()) {
	function glob_recursive($directory, &$directories = array()) {
		foreach(glob($directory, GLOB_ONLYDIR | GLOB_NOSORT) as $folder) {
			$directories[] = $folder;
			glob_recursive("{$folder}/*", $directories);
		}
	}
	glob_recursive($directory, $directories);
	$files = array ();
	foreach($directories as $directory) {
		foreach($extensions as $extension) {
			foreach(glob("{$directory}/*.{$extension}") as $file) {
				$files[$extension][] = $file;
				$size = getimagesize($file);
				if ($size[0] > 600) {
					$cmd = 'convert "'.$file.'" -resize 500 "'.$file.'"';
					system($cmd,$retval);
				}
				$sizeinMB = filesize($file)/1000000;
				if ($sizeinMB >= .65 ) {
					echo $sizeinMB." ".$file."\n";
					$cmd = 'convert "'.$file.'" -resize 65% "'.$file.'"';
					system($cmd,$retval1);
				}

			}
		}
	}
}

findFiles("/var/chroot/home/content/64/11453264/html/beta/tinymce/plugins/moxiemanager/data/files", array ("jpg","JPG","png","PNG","jpeg","JPEG","gif","GIF"));


?>