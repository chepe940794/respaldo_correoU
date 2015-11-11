<?php 
	
	class Model_User extends CI_Model{

		public function insert($data){
			$this->db->insert('users',$data);
			$id=mysql_insert_id();
			return $id;
		}

		public function getUser($user,$pass){

        $consulta="SELECT * FROM `users` WHERE user = '$user' and password = '$pass'";
        $query = $this->db->query("$consulta");
        return $query->row();
    

		}

		public function getUserID($id){

			$consulta='SELECT * FROM `users` WHERE id ='.$id;
        	$query = $this->db->query("$consulta");
        	return $query->result_arrat();
		}

		public function verificando($code,$id){
			$consulta="UPDATE `users` SET `estado`=1 WHERE id ='$id' and code='$code'";
        	$query = $this->db->query("$consulta");
        	return $query;

		}

		public function estado($ide){
			$consulta='SELECT estado FROM `users` WHERE id ='.$ide;
        	$query = $this->db->query("$consulta");
        	return $query->row();

		}


	}
?>