<?php namespace Blog\DB; //using name space


//setting variables to constants

$config=[
	'username'=>'root',
	'password'=>'37414194374'

];

//connectin to the data base
function connect($config)
{
	//what is PDO it is a class to connect to my sql

	 try
	 {
	 	$conn= new \PDO('mysql:host=localhost;dbname=fadfada',$config['username'],$config['password']);
	 	//method in PDO
	 	$conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

	 	return $conn;
     }
	 catch(Exception $e)
	 {
	  	return false;
	 }
}
//function 3sham a3ml beeha query l ay haga
function query($query ,$bindings = null , $conn)
{
	$stmt =$conn->prepare($query);
	if($bindings) {
	$stmt->execute($bindings);
	}
	return ($stmt->rowCount() > 0) ? $stmt :false;
	// $results= $stmt->fetchAll();
	// return $results ? $results : false; 
	
}

function get($tablename, $conn , $limit =10)
{
  try{
  $result= $conn->query("SELECT *FROM $tablename ORDER BY id DESC LIMIT $limit ");
  return ($result->rowcount()>0)
  ? $result:false;
  }
  catch(Exception $e){
  	return false;
  }
}


function get_by_id($id,$conn)
{
	$query= query(
		'select * from users where id= :id LIMIT 1',
		['id'=>$id],
		$conn);

	if ($query) return $query->fetchAll();
}



//a3raf ashoof el haga
function view ($path ,$data =null)
{
	// var_dump($path);
	// die();
	if($data){
		extract($data);
	}
	// $path=$path;
	include "$path";
}




