<?php
	class DBController {
		private $hostname = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname   = "itjobs";

		// creating connection
		public function connect() {
			$conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname) or die("Failed to connect" . $conn->error);
			return $conn;
		}

		// closing connection
		public function close($conn) {
			$conn->close();
		}
	}
?>