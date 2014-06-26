<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelChildgraph extends JModel {

    var $_id;
    var $_data;

    function __construct() {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');

        $this->setId((int) $array[0]);
    }

    function setId($id) {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData() {
        // Load the data
        if (empty($this->_data)) {
            $query = "SELECT id_entidad    
                      FROM persona
                      WHERE id_entidad=" . $this->_id;
            //echo $query;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        return $this->_data;
    }

    public function grafico($ninoId) {
        $query = "SELECT EN.id_evaluacion_nino, EN.id_actividad, EN.fe_visita, EN.de_peso, EN.de_talla, EN.nu_hemoglobina, 
                  D1.tx_descripcion AS PE, D2.tx_descripcion AS TE, D3.tx_descripcion AS PT
                  FROM persona AS P 
		  INNER JOIN actividad_entidad AS AE ON (P.id_entidad = AE.id_entidad) 
                  INNER JOIN evaluacion_nino AS EN ON ( AE.id_actividad = EN.id_actividad )
                  LEFT JOIN detalle_general AS D1 ON ( EN.id_dg_diag_pe = D1.id_detalle_general ) 
                  LEFT JOIN detalle_general AS D2 ON ( EN.id_dg_diag_te = D2.id_detalle_general ) 
		  LEFT JOIN detalle_general AS D3 ON ( EN.id_dg_diag_pt = D3.id_detalle_general ) 
                  WHERE P.id_entidad= {$ninoId} order by EN.fe_visita ASC";

        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
//        $ladox = array();
//        $datay1 = array();
//        $datay2 = array();
//        $datay3 = array();

        foreach ($results as $row) {
            $ladox[] = $row->fe_visita;
            $datay1[] = $row->de_peso;
            $datay2[] = $row->de_talla;
            $datay3[] = $row->nu_hemoglobina;
//            echo $row->fe_visita;
//            echo $row->de_peso;
//            echo $row->de_talla;
//            echo $row->nu_hemoglobina;
        }

// Creamos el grafico       
        $graph = new Graph(600, 250);
        $graph->SetScale("textlin");

        $theme_class = new UniversalTheme;

        $graph->SetTheme($theme_class);
        $graph->img->SetAntiAliasing(false);
        $graph->title->Set('Evolución de Niños');
        $graph->SetBox(false);

        $graph->img->SetAntiAliasing();

        $graph->yaxis->HideZeroLabel();
        $graph->yaxis->HideLine(false);
        $graph->yaxis->HideTicks(false, false);

        $graph->xgrid->Show();
        $graph->xgrid->SetLineStyle("solid");
        $graph->xaxis->SetTickLabels($ladox);
        $graph->xgrid->SetColor('#E3E3E3');


// Create the first line
        $p1 = new LinePlot($datay1);
        $graph->Add($p1);
        $p1->SetColor("#6495ED");
        $p1->SetLegend('Peso');
        $p1->value->Show();

// Create the second line
        $p2 = new LinePlot($datay2);
        $graph->Add($p2);
        $p2->SetColor("#B22222");
        $p2->SetLegend('Talla');
        $p2->value->Show();

// Create the third line
        $p3 = new LinePlot($datay3);
        $graph->Add($p3);
        $p3->SetColor("#FF1493");
        $p3->SetLegend('Hemoglobina');
        $p3->value->Show();

        $graph->legend->SetFrameWeight(1);

// Output line
        $graph->Stroke();
    }

}

?>
