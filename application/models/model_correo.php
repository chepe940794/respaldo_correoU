<?php 
	
	class Model_Correo extends CI_Model{

		public function insert($data){
			$this->db->insert('emails',$data);
		}

		public function getAllBySalida($id,$pendiente){

        $consulta="SELECT `id`,`destinatario`,`asunto`,`mensaje` FROM `emails` WHERE iduser= '$id' and estado ='$pendiente'";
        $query = $this->db->query("$consulta");
        return $query->result_array();
    

		}
		public function getAllByEnviado($id,$enviado){

        $consulta="SELECT `id`,`destinatario`,`asunto`,`mensaje` FROM `emails` WHERE iduser= '$id' and estado ='$enviado'";
        $query = $this->db->query("$consulta");
        return $query->result_array();
    

		}
		public function getEmailId($cid){

			$consulta='SELECT * FROM `emails` WHERE id ='.$cid;
        	$query = $this->db->query("$consulta");
        	return $query->result_array();
		}

		public function update($idc,$data){

			$this->db->where('id',$idc);
			$this->db->update('emails',$data);
		}
		
		public function getID($idc){
			$consulta='SELECT iduser FROM `emails` WHERE id ='.$idc;
        	$query = $this->db->query("$consulta");
        	return $query->result_array();

		}
		public function delete($cid){

			$this->db->where('id',$cid);
			$this->db->delete('emails');

		}


	}