<?php
	$id=intval(@$_GET['d']);
	if ($id=="") exit;
	$con=mysql_connect('localhost','root','19951025');
	$statement="select url from capubbs.downloads where id=$id";
	$results=mysql_query($statement,$con);
	if (mysql_num_rows($results)==0) exit;
	$res=mysql_fetch_row($results);
	$url=$res[0];
	$statement="update capubbs.downloads set times=times+1 where id=$id";
	mysql_query($statement,$con);
	header("Location: $url");
	exit;
?>
