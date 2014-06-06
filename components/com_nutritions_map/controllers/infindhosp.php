<?php
defined('_JEXEC') or die();

class NutritionsControllerInfindhosp extends NutritionsController
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
        JRequest::setVar( 'view', 'infindhosp' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infindhosp&view=infindhosp&task=edit&Itemid=3&cid[]=');
                           
    }
    

    
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('infindhosp');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Informe Indicadores Hospitalarios grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar informe indicadores hospitalarios' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=infindhosp&view=infindhosp&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
     }
     
       public function removeInfindhosp() {
        $infindhospId = JRequest::getInt('infindhospId', NULL);
        $model = $this->getModel('infindhosp');
        $model->removeInfindhosp($infindhospId);
        $msg = 'Informe Removido!!!';
        $link = 'index.php?option=com_nutritions&view=infindhosps&Itemid=5';
        $this->setRedirect($link, $msg);
    }
    
}
?>
