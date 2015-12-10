<?php
	function list_dir($dir)
	{	
		$list = scandir($dir);
		if (is_array($list)) 
		{
			$list = array_diff($list, array('.', '..'));
			return $list;
		} 
		else 
		{
			echo "Something went wrong";
		}
	}

	function read_file($path)
	{
		$fileContent = file_get_contents($path);
		return $fileContent;
	}
	function update_file($path, $text)
	{
		$content = file_put_contents($path, $text);
		return $content;
	}
	function create_file($path, $filename)
	{
		$file = fopen($path.'/'.$filename, "w");
		fwrite($file, '');
		fclose($file);
		return $file;
	}
	function mk_dir($path, $foldername)
	{
		$newDir = mkdir($path.'/'.$foldername);
		return $newDir;
	}