<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Correo extends CI_Controller {

	public function nuevo()
	{
		$data['title'] = 'Pagina Nuevo Correo';
		$this->load->view('Pantillas/Header', $data);
		$this->load->view('correo_nav');
		$this->load->view('nuevo');
		$this->load->view('Pantillas/Footer');
	}

	public function insert()
	{
		$this->load->model('model_correo','correo');
		$email = $this->input->post('nemail'); 
		$asunto = $this->input->post('nasunto');
		$mensaje = $this->input->post('nmensaje');
			
		if(isset($this->session->userdata['logged_in'])){

			$id = $this->session->userdata['user_id'];
		}
   			$data  = array(

				
				'destinatario' =>  $email,
				'iduser' => $id , 
				'mensaje' => $mensaje,
				'asunto' => $asunto,
				'estado' => 'Pendiente',
				);
   		
			
			$this->correo->insert($data);
			
			$urln = base_url()."correo/vista/";
			redirect($urln);
	}
	public function editar(){

		$cid = $_REQUEST['cid'];

		$this->load->model('model_correo','correo');
		$correos = $this->correo->getEmailId($cid);
		$data['email'] = $correos;

		$data['title'] = 'Pagina Editar Correo';
		$id = $_REQUEST['id'];
		$data['id'] = $id;
		$this->load->view('Pantillas/Header', $data);
		$this->load->view('editar',$data);
		$this->load->view('Pantillas/Footer');


	} 
	public function update(){
		$email = $this->input->post('nemail'); 
		$asunto = $this->input->post('nasunto');
		$mensaje = $this->input->post('nmensaje');
			
		$idc = $_REQUEST['cid'];	
   			$data  = array(
				
				'destinatario' =>  $email, 
				'mensaje' => $mensaje,
				'asunto' => $asunto,
				);

   		
   		
   		$this->load->model('model_correo','correo');
   		$this->correo->update($idc,$data);
   		$id = $_REQUEST['id'];
   		$urln = base_url()."correo/vista/?id=$id";
   		redirect($urln);
	}

	public function eliminar(){
		$cid = $_REQUEST['cid'];

		$this->load->model('model_correo','correo');
		$this->correo->delete($cid);
		$id= $_REQUEST['id'];
		$urln = base_url()."correo/vista/?id=$id";
		redirect($urln);
	}

	public function vista(){

				$this->load->model('model_correo','correo');
				$id = $_REQUEST['id'];	
				$data['title'] = "Pagina Principal";
				//$data = $this->correo->getId($idc);
				$pendiente = "Pendiente";
				$data['id']=$id;
				
				$emails= $this->correo->getAllBySalida($id,$pendiente);
				$data['emails'] = $emails;
				$enviado ="Enviado";
				$emaile = $this->correo->getAllByEnviado($id,$enviado);
				$data['emaile'] = $emaile;
				
				
				$this->load->view('Pantillas/Header', $data);
				$this->load->view('correo_nav');
         		$this->load->view('vcorreos', $data);
         		$this->load->view('Pantillas/Footer');

	}
}