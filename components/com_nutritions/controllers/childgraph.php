<?php
defined('_JEXEC') or die();

class NutritionsControllerChildgraph extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit');
    }

    /**
     * display the edit form
     * @return void
     */
    function edit()
    {
        JRequest::setVar( 'view', 'childgraph' );
        parent::display();
    }
            
}
?>
