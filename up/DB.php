<?php
class DB {

		public $datab;

	public function __construct($username = 'ipmansul', $password = 'INcorrect@0', $host = 'localhost:3306', $db = 'ipmansul_ipman') {
		try {
				$this->datab = new PDO("mysql:host={$host};dbname={$db}", $username, $password);
				$this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());

		}
	}

	public function getRow($query, $params = []) {

		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchObject();

		} catch(PDOException $e) {
			throw new Exception($e->getMessage());

		}

	}

	public function getRows($query, $params = []) {
			try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();

		} catch(PDOException $e) {
			throw new Exception($e->getMessage());

		}

	}
	public function getRowCount($query, $params = []) {
			try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->rowCount();
			return true;
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());

		}

	}

	public function insertRow($query, $params = []) {
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return TRUE;
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());

		}

	}

	public function updateRow($query, $params = []) {
		$this->insertRow($query, $params);
		return true;
	}

	public function deleteRow($query, $params = []) {
		$this->insertRow($query, $params);

	}
}
