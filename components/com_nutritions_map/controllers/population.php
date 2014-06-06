<?php
defined('_JEXEC') or die();

class NutritionsControllerPopulation extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }

    function edit()
    {
        JRequest::setVar( 'view', 'population' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=population&view=population&task=edit&Itemid=3&cid[]=');                          
    }    
    
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('population');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Informe General grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar informe general' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=population&view=population&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
     }
     
       public function removePopulation() {
        $populationId = JRequest::getInt('populationId', NULL);
        $model = $this->getModel('population');
        $model->removePopulation($populationId);
        $msg = 'Informe Removido!!!';
        $link = 'index.php?option=com_nutritions&view=populations&Itemid=5';
        $this->setRedirect($link, $msg);
    }
    
}
?>
