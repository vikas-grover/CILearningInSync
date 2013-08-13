<?php

class Hello extends CI_Controller {

  function Hello()
  {
   
	parent::__construct();  
  }

   function you()
  {
   
	$this->load->view('you_view');
  }

}

?>