<?php
	//homework
	require_once 'actions.php';


	if ($_REQUEST['dir']) 
	{
		$dirNew = $_REQUEST['dir'];
		$path = $_SERVER['DOCUMENT_ROOT'].$dirNew;
	}
	else 
	{
		$path = $_SERVER['DOCUMENT_ROOT'];
	}
	if ($_REQUEST['update']) {
		$path = $_REQUEST['path'];
		$content = update_file($path, $_REQUEST['text']);
		echo "File has been updated";
	}
	if ($_REQUEST['create_file']) {
		$file = create_file($_REQUEST['path'], $_REQUEST['filename']);
	}
	elseif ($_REQUEST['create_folder']) {
		mk_dir($_REQUEST['path'], $_REQUEST['folder_name']);
	}
?>
<?  if (is_file($path)) :?>
		<?$content = read_file($path);?>
		<form>
			<textarea name="text" cols="100" rows="20"><?=$content?></textarea>
			<input type="hidden" name="path" value="<?=$path?>">
			<input type="submit" name="update">
		</form>
	<?elseif (is_dir($path)) :?>
		<?$content = list_dir($path);
		foreach ($content as $dirEl) :?>
			<a href="?dir=<?=$dirNew.'/'.$dirEl?>"><?=$dirEl;?></a><br>	
		<?endforeach?>
		<br>
		<form>
			<input type="text" name="filename" placeholder="example.txt">
			<input type="hidden" name="path" value="<?=$path?>">
			<input type="submit" name="create_file" value="Create file">
		</form>
	
		<form>
			<input type="text" name="folder_name" placeholder="Folder">
			<input type="hidden" name="path" value="<?=$path?>">
			<input type="submit" name="create_folder" value="Create folder">
		</form>
	<?endif?>
	
	
