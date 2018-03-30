<?php

  $controller=$_GET['controller'];
  $modo=$_GET['modo'];

  switch ($controller)
  {
    case 'contatos':

      /*  Require */
        //require
        //include
        //include_once

      require_once('controllers/contatos_controller.php');
      require_once('models/contato_class.php');

      switch ($modo)
      {
        case 'novo':
          //Instanciando a classe da controller
          $controll_contato = new ControllerContatos();

          //$controll_contato->Novo();
          $controll_contato::Novo();

          break;

        case 'buscar':
          //Instanciando a classe da controller
          $controll_contato = new ControllerContatos();

          //$controll_contato->Buscar();
          $controll_contato::Buscar();

          break;
        case 'Editar':
          //Instanciando a classe da controller
          $controll_contato = new ControllerContatos();

          //$controll_contato->Buscar();
          $controll_contato::Editar();
          break;

        case 'excluir':
          //Instanciando a classe da controller
          $controll_contato = new ControllerContatos();

          //$controll_contato->Excluir();
          $controll_contato::Excluir();

          break;
      }
  }

 ?>
