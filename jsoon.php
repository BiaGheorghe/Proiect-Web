<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
        
        $hostname="localhost";
        $dbname="TW";
        $Username="root";
        $password="";
        $dbconnection=new PDO("mysql::host=$hostname; dbname=$dbname", $Username, $password);
        $row=$dbconnection->prepare("select * from utilizatori order by scor desc");
        $row->execute();
        $data=array();
        foreach($row as $result){
            $jsonformat['Username']=$result['Username'];
            $jsonformat['Parola']=$result['Parola'];
            $jsonformat['Scor']=$result['Scor'];
            array_push($data,$jsonformat);
            
        }
  
        echo json_encode($data);
       

       
   ?>
</body>
</html>