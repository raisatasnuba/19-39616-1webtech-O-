<?php 

require_once 'db_connect.php';




function addCus($data){
	$conn = db_conn();
    $selectQuery = "INSERT into cusreg (name, email, username, phone, password, address, gender, date)
VALUES (:name,:email, :username, :phone, :password, :address, :gender, :date)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':email' => $data['email'],
           
        	':username' => $data['username'],
        	':phone' => $data['phone'],
        	':password' => $data['password'],
            ':address' => $data['address'],
            ':gender' => $data['gender'],
            ':date' => $data['date'],
            
            

        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function search($q){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM food WHERE name LIKE '%$q%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

?>
