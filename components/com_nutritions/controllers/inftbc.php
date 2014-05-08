<?php
defined('_JEXEC') or die();

class NutritionsControllerInftbc extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }

    /**
     * display the edit form
     * @return void
     */
    function edit()
    {
        JRequest::setVar( 'view', 'inftbc' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=inftbc&view=inftbc&task=edit&Itemid=3&cid[]=');
                           
    }
    

    
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('inftbc');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Informe General grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar informe general' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=inftbc&view=inftbc&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
     }
     
       public function removeInftbc() {
        $inftbcId = JRequest::getInt('inftbcId', NULL);
        $model = $this->getModel('inftbc');
        $model->removeInftbc($inftbcId);
        $msg = 'Informe Removido!!!';
        $link = 'index.php?option=com_nutritions&view=inftbcs&Itemid=5';
        $this->setRedirect($link, $msg);
    }
    
}
?>
