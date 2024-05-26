<?php

Trait Database
{

	private function connect()
	{
		$string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
		$conn = new PDO($string,DBUSER,DBPASS);
//		return $conn;

        // PHP Data Objects(PDO) Sample Code:
//        try {
//            $conn = new PDO("sqlsrv:server = tcp:imperialis-jadeite.database.windows.net,1433; Database = Epicurean-Affair", "imperialis-jadeite", "{aquarius$2002}");
//            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        }
//        catch (PDOException $e) {
//            print("Error connecting to SQL Server.");
//            die(print_r($e));
//        }
//
//        // SQL Server Extension Sample Code:
//        $connectionInfo = array("UID" => "imperialis-jadeite", "pwd" => "{aquarius$2002}", "Database" => "Epicurean-Affair", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
//        $serverName = "tcp:imperialis-jadeite.database.windows.net,1433";
//        $conn = sqlsrv_connect($serverName, $connectionInfo);

        return $conn;
	}

	public function query($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if($check)
		{
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result;
			}
		}

		return false;
	}

	public function get_row($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if($check)
		{
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result[0];
			}
		}

		return false;
	}

}


