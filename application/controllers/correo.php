<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Correo extends CI_Controller {

	public function nuevo() //Método para crear nuevo correo
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

		$session =  $this->session->userdata['logged_in'];

			
		if($session["is_loged"] == true){

			$id = $session['user_id'];

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
   			
		else{
			$urln = base_url()."user/login";
			redirect($urln);

		}
	}

	public function editar(){
		$session =  $this->session->userdata['logged_in'];

		if($session["is_loged"] == true){
		$id = $session['user_id'];
		$cid = $_REQUEST['cid'];
		$this->load->model('model_correo','correo');
		$correos = $this->correo->getEmailId($cid,$id);
		$data['email'] = $correos;
		
			if (!empty($data['email'])) {
				$data['title'] = 'Pagina Editar Correo';
				$this->load->view('Pantillas/Header', $data);
				$this->load->view('correo_nav');
				$this->load->view('editar',$data);
				$this->load->view('Pantillas/Footer');
			}else{
				$urln = base_url()."correo/vista";
			redirect($urln);
			}
		
		}else{

			$urln = base_url()."user/login";
			redirect($urln);
		}
	} 

	public function update(){
		$email = $this->input->post('nemail'); 
		$asunto = $this->input->post('nasunto');
		$mensaje = $this->input->post('nmensaje');
		$session =  $this->session->userdata['logged_in'];


		if($session["is_loged"] == true){
		$id = $session['user_id'];	

   			$data  = array(
				
				'destinatario' =>  $email, 
				'mensaje' => $mensaje,
				'asunto' => $asunto,
				);

   		$idc = $_REQUEST['cid'];
   		
   		
   		$this->load->model('model_correo','correo');
   		$this->correo->update($idc,$data);
   		
   		$urln = base_url()."correo/vista";
   		redirect($urln);
   		}
   		else{

   			$urln = base_url()."user/login";
			redirect($urln);
   		}
	}

	public function eliminar(){
		$session =  $this->session->userdata['logged_in'];

		if($session["is_loged"] == true){
		$id = $session['user_id'];
		$cid = $_REQUEST['cid'];

		$this->load->model('model_correo','correo');
		$v = $this->correo->delete($cid,$id);
		if ($v == 1) {
			$urln = base_url()."correo/vista/";
		redirect($urln);
		}else{
			$urln = base_url()."correo/vista/";
		redirect($urln);
		}
		
		
		}else{
			$urln = base_url()."user/login";
			redirect($urln);
		}
	}

	public function vista(){
			$session =  $this->session->userdata['logged_in'];

			if($session["is_loged"] == true){

				$this->load->model('model_correo','correo');
				$id = $session['user_id'];	
				$data['title'] = "Pagina Principal";
				//$data = $this->correo->getId($idc);
				$pendiente = "Pendiente";
				//$data['id']=$id;
				
				$emails= $this->correo->getAllBySalida($id,$pendiente);
				$data['emails'] = $emails;
				$enviado ="Enviado";
				$emaile = $this->correo->getAllByEnviado($id,$enviado);
				$data['emaile'] = $emaile;
				
				
				$this->load->view('Pantillas/Header', $data);
				$this->load->view('correo_nav');
         		$this->load->view('vcorreos', $data);
         		$this->load->view('Pantillas/Footer');
         	}else{
         		$urln = base_url()."user/login";
			redirect($urln);
         	}

	}
}


