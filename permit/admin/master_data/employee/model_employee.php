<?php 
	require_once('../../../class/database.php');
	$database= new database();

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
				if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['department']) && isset($_POST['position']) && isset($_POST['contact'])&& isset($_POST['date_of_birth']) && isset($_POST['email']) && isset($_POST['gender'])) {
					if (!empty($_POST['id']) && isset($_POST['name']) && isset($_POST['department']) && isset($_POST['position']) && isset($_POST['contact'])&& isset($_POST['date_of_birth']) && isset($_POST['email']) && isset($_POST['gender']) ) {
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $department = $_POST['department'];
                        $position = $_POST['position'];
						$contact = $_POST['contact'];
                        $date_of_birth = $_POST['date_of_birth'];
						$email = $_POST['email'];
						$gender = $_POST['gender'];

						$query = "INSERT INTO user (id, name, department, position, contact, date_of_birth, email, gender) VALUES ('$id', '$name', '$department', '$position', '$contact', '$date_of_birth', '$email','$gender')";
						if ($sql = $this->conn->query($query)) {
                            echo "<script type='text/javascript'>alert('Employee has been added!');window.location.href='employee_data.php';</script>";
						}
                        else{
                            echo "<script type='text/javascript'>alert('Employee ID duplicated! Please Insert new ID!');window.location.href='employee_data.php';</script>";
						}
					}
                    
                    else{
                        echo "<script type='text/javascript'>alert('Please insert employee data!');window.location.href='employee_data.php';</script>";
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM user";
            $no=1;
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM user where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function read($id){
			$data = null;

			$query = "SELECT department.head_of_department FROM user INNER JOIN department WHERE department.department_name = user.department AND (id ='$id')";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
			$result = selectdata($query);
		}
		
		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM user WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}

        public function selectDepartment(){
            $query=mysqli_query($this->conn,"select * from department");
            
            while ($row = mysqli_fetch_array($query)){
                echo "<option> $row[1] </option>";
            }
        }

        public function editDepartment($id){
			$id=$_GET['id'];
			$data = mysqli_query($this->conn,"select * from user where id='$id'");
			while($d = mysqli_fetch_array($data)){
			if ($d['department']==$d['department']) {
				$select="selected";
			}
			else{
				$select="";
			}
			echo "<option $select>".$d['department']."</option>";
			}
		}


        public function selectGender(){
            $query=mysqli_query($this->conn,"select * from gender");
            
            while ($row = mysqli_fetch_array($query)){
                echo "<option> $row[0] </option>";
            }
        }

		public function editGender($id){
			$id=$_GET['id'];
			$data = mysqli_query($this->conn,"select * from user where id='$id'");
			while($d = mysqli_fetch_array($data)){
			if ($d['gender']==$d['gender']) {
				$select="selected";
			}
			else{
				$select="";
			}
			echo "<option $select>".$d['gender']."</option>";
			}
		}

		public function edit($id){
			$data = null;
			$query = "SELECT * FROM user WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}
		
		public function update($data){

			$query = "UPDATE user SET name='$data[name]', department='$data[department]', position='$data[position]', contact='$data[contact]', date_of_birth='$data[date_of_birth]', email='$data[email]',gender='$data[gender]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>
