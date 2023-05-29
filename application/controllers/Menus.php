<?php
  class Menus extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
    }
  //Renderización de la vista
  //muestra los desayunos
  public function desayunos(){
    $this->load->view('header');
    $this->load->view('menus/desayunos');
    $this->load->view('footer');
  }

  public function almuerzos(){
    $this->load->view('header');
    $this->load->view('menus/almuerzos');
    $this->load->view('footer');
  }

  public function meriendas(){
    $this->load->view('header');
    $this->load->view('menus/meriendas');
    $this->load->view('footer');
  }



}//No borrar el cierre de la clase
 ?>
