<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH .'../application/controllers/common.php');

class staticpage extends common {


    public function intro()
    {   
        
        $menu  = $this->getMenu();
        $non_menu = $this->getNonMenuCategories();
        $positions = array(array('name' => '协会概况', 'url' => ''));
        $data = array(
            'header' => $this->load->view('frontend/_header', array('focus' => 'intro','menu' => $menu
            ), true),
            'main' => $this->load->view('frontend/intro_main', array('non_menu' => $non_menu), true),
            'notice' => $this->load->view('frontend/_notice', array('positions' => $positions), true)
        );
        $this->setView($data);
    }
    public function contactus()
    {   
        
        $menu  = $this->getMenu();
        $non_menu = $this->getNonMenuCategories();
        $positions = array(array('name' => '联系我们', 'url' => ''));
        $data = array(
            'header' => $this->load->view('frontend/_header', array('focus' => 'contactus','menu' => $menu
            ), true),
            'main' => $this->load->view('frontend/contactus_main', array('non_menu' => $non_menu), true),
            'notice' => $this->load->view('frontend/_notice', array('positions' => $positions), true)
        );
        $this->setView($data);
    }


}
