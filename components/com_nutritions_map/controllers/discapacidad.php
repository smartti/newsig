<?php
defined('_JEXEC') or die();

class NutritionsControllerDiscapacidad extends NutritionsController
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
        JRequest::setVar( 'view', 'discapacidad' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }

    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('discapacidad');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'discapacidad grabada!' );
        } else {
            $msg = JText::_( 'Error al grabar discapacidad.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=discapacidad&view=discapacidad&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
    }
    
    






    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_nutritions&view=discapacidad&Itemid=3', $msg );
    }
    
     
    
}
?>
