<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelPregnantgraph extends JModel {

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
            $query = "select id_evaluacion_gestante    
                      FROM evaluacion_gestante 
                      WHERE id_evaluacion_gestante=" . $this->_id;
            //echo $query;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        return $this->_data;
    }

//    public function grafico1($evaluacionId) {
//        $query = "SELECT GC.id_evaluacion_gestante_control, EN.id_actividad, GC.fe_visita, EN.de_peso_habitual, GC.de_peso_actual, GC.nu_hemoglobina, 
//                  D1.tx_descripcion AS img_pc, D2.tx_descripcion AS ganancia_peso 
//                  FROM persona AS P INNER JOIN actividad_entidad AS AE ON (P.id_entidad = AE.id_entidad) 
//                  INNER JOIN evaluacion_gestante AS EN ON ( AE.id_actividad = EN.id_actividad )
//                  INNER JOIN evaluacion_gestante_control GC ON ( GC.id_evaluacion_gestante = EN.id_evaluacion_gestante )
//                  LEFT JOIN detalle_general AS D1 ON ( GC.id_dg_imc_pg = D1.id_detalle_general ) 
//                  LEFT JOIN detalle_general AS D2 ON ( GC.id_dg_ganancia_peso = D2.id_detalle_general ) 
//                  WHERE EN.id_evaluacion_gestante= {$evaluacionId}";
//
//        $this->_db->setQuery($query);
//        $results = $this->_db->loadObjectList();
//        $ladox = array();
//        $ladoy = array();
//
//        foreach ($results as $row) {
//            $ladox[] = $row->fe_visita;
//            $ladoy[] = $row->de_peso_actual;
//        }
//// Creamos el grafico       
//        $grafico = new Graph(500, 400, 'auto');
//        $grafico->SetScale("textint");
//        $grafico->SetShadow();
//        $grafico->title->Set("Evaluaciones1");
//        $grafico->xaxis->title->Set("Orden");
//        $grafico->xaxis->SetTickLabels($ladox);
//        $grafico->yaxis->title->Set("Peso Actual");
//        $barplot1 = new BarPlot($ladoy);
//// Un gradiente Horizontal de morados
//        $barplot1->SetFillGradient("#BE81F7", "#E3CEF6", GRAD_HOR);
//// 30 pixeles de ancho para cada barra
//        $barplot1->SetWidth(30);
//        $grafico->Add($barplot1);
//        $grafico->Stroke();
//    }

    public function grafico($evaluacionId) {
        $query = "SELECT GC.id_evaluacion_gestante_control, EN.id_actividad, GC.fe_visita, EN.de_peso_habitual, GC.de_peso_actual, GC.nu_hemoglobina, 
                  D1.tx_descripcion AS img_pc, D2.tx_descripcion AS ganancia_peso 
                  FROM persona AS P INNER JOIN actividad_entidad AS AE ON (P.id_entidad = AE.id_entidad) 
                  INNER JOIN evaluacion_gestante AS EN ON ( AE.id_actividad = EN.id_actividad )
                  INNER JOIN evaluacion_gestante_control GC ON ( GC.id_evaluacion_gestante = EN.id_evaluacion_gestante )
                  LEFT JOIN detalle_general AS D1 ON ( GC.id_dg_imc_pg = D1.id_detalle_general ) 
                  LEFT JOIN detalle_general AS D2 ON ( GC.id_dg_ganancia_peso = D2.id_detalle_general ) 
                  WHERE EN.id_evaluacion_gestante= {$evaluacionId} ORDER BY GC.fe_visita ASC";

        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
//        $ladox = array();
//        $datay1 = array();
//        $datay2 = array();
//        $datay3 = array();

        foreach ($results as $row) {
            $ladox[] = $row->fe_visita;
            $datay1[] = $row->de_peso_actual;
            $datay2[] = $row->nu_hemoglobina;
            $datay3[] = $row->de_peso_habitual;
        }
// Creamos el grafico       
        $graph = new Graph(600, 250);
        $graph->SetScale("textlin");

        $theme_class = new UniversalTheme;

        $graph->SetTheme($theme_class);
        $graph->img->SetAntiAliasing(false);
        $graph->title->Set('Evolución de gestantes');
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
        $p1->SetLegend('Peso actual');
        $p1->value->Show();  

// Create the second line
        $p2 = new LinePlot($datay2);
        $graph->Add($p2);
        $p2->SetColor("#B22222");
        $p2->SetLegend('Hemoglobina');
        $p2->value->Show(); 

// Create the third line
        $p3 = new LinePlot($datay3);
        $graph->Add($p3);
        $p3->SetColor("#FF1493");
        $p3->SetLegend('Peso habitual');
        $p3->value->Show(); 

        $graph->legend->SetFrameWeight(1);

// Output line
        $graph->Stroke();
    }

}

?>
