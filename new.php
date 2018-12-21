<?php
function db_connect()
{
try
	{
	
		$pdo=new PDO("mysql:host=localhost; dbname=db7;","root","");
		return $pdo;
	}
catch(expression $e)
	{
	return false;
	}
	
}

function dbname($name)
{
	if($dbo=db_connect())
	{
	  $stmt=$dbo->prepare("insert into new(name) values('$name')");
	  $stmt->execute();
	  if($stmt->rowcount()>0)
	  {
	  	echo "value inserted";
	  }
	  }
	  else
	  {
	  return false;
	  }
	  }
?>

