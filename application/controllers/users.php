<?php

class Users extends CI_Controller {


	public function show() {

		// $this->load->model('user_model');

		$data['results'] = $this->user_model->get_users();

		//$result = $this->user_model->get_users();

		// $data['welcome'] = "Welcome Priya!";

		$this->load->view('user_view', $data);

		// foreach ($result as $object) {
			// echo $object->username . "<br>";
			// echo $object->password . "<br>";
			// echo $object->id . "<br>";
		// }
	}
} 


?>