<?php
class Pfay_Test_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    public function mamethodeAction()
    {
        echo 'Test mamethode';
    }

//    public function saveAction()
//    {
//        //выбираем данные из пришедшего запроса POST
//        $nom = ''.$this->getRequest()->getPost('nom');
//        $prenom = ''.$this->getRequest()->getPost('prenom');
//        $telephone = ''.$this->getRequest()->getPost('telephone');
//
//
//        if(isset($nom)&&($nom!='') && isset($prenom)&&($prenom!='')
//            && isset($telephone)&&($telephone!='') )
//        {
//            //записываем данные в базу
//            $contact = Mage::getModel('Test/Test');
//            $contact->setData('nom', $nom);
//            $contact->setData('prenom', $prenom);
//            $contact->setData('telephone', $telephone);
//            $contact->save();
//        }
//        //перенаправление на метод index контроллера indexController
//
//        $this->_redirect('Test/index/index');
//    }
}

