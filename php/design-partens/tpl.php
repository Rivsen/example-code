<?php
include_once('readtpl.php');
?>

<form action='readtpl.php' method='post'>
<p>Title: <input type="text" name="title" value="<?php echo $params['title']; ?>" /></p>
<p>Author: <input type="text" name="author" value="<?php echo $params['author']; ?>" /></p>
<p>Desc: <input type="text" name="desc" value="<?php echo $params['desc']; ?>" /></p>
<p>keywords: <input type="text" name="keywords" value="<?php echo $params['keywords']; ?>" /></p>
<p>body: <input type="text" name="body" value="<?php echo $params['body']; ?>" /></p>
<p><input type="hidden" name="backurl" value="tpl.php" /></p>
<p><input type="submit" value="submit" name="submit" /></p>
</form>
