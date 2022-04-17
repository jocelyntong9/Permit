<?php 

	Class Model{

		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "permit";
		private $conn;

		public function __construct(){
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

		public function insert(){
			if (isset($_POST['submit'])) {
				if (isset($_POST['id']) && isset($_POST['department_name'])) {
					if (!empty($_POST['id']) && !empty($_POST['department_name']) ) {
                        $id = $_POST['id'];
                        $department_name = $_POST['department_name'];

						$query = "INSERT INTO department (id, department_name) VALUES ('$id', '$department_name')";
						if ($sql = $this->conn->query($query)) {
                            echo "<script type='text/javascript'>alert('Department has been added!');window.location.href='department_data.php';</script>";
						}
                        else{
                            echo "<script type='text/javascript'>alert('Department ID duplicated! Please Insert new ID!');window.location.href='department_data.php';</script>";
						}
					}
                    
                    else{
                        echo "<script type='text/javascript'>alert('Please insert department data!');window.location.href='department_data.php';</script>";
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM department";
            $no=1;
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM department where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM department WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}

		public function edit($id){

			$data = null;

			$query = "SELECT * FROM department WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}
		
		public function update($data){

			$query = "UPDATE department SET department_name='$data[department_name]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
        

	}
?>
