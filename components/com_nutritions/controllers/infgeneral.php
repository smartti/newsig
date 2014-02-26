<?php
defined('_JEXEC') or die();

class NutritionsControllerInfgeneral extends NutritionsController
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
        JRequest::setVar( 'view', 'infgeneral' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infgeneral&view=infgeneral&task=edit&Itemid=3&cid[]=');
                           
    }
    
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('infgeneral');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Informe General grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar informe general' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=infgeneral&view=infgeneral&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
     }
    
    public function deleteInfgeneral() {
        $infgeneralId = JRequest::getInt('id', 0);
        $model = $this->getModel('infgeneral');
        $model->removeInforme($infgeneralId);
        
        $msg = JText::_( 'Informe eliminado!' );
        
        $link = "index.php?option=com_nutritions&controller=infgeneral&view=infgeneral&task=edit&Itemid=3&cid[]={$infgeneralId}";
        $this->setRedirect($link, $msg);
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $infgeneralId = JRequest::getInt('id', 0);
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( "index.php?option=com_nutritions&controller=infgeneral&view=infgeneral&task=edit&Itemid=3&cid[]={$infgeneralId}", $msg );
    }
        

}
?>
