<?php

class AjaxController extends Controller {

    public function actionLoadGrid() {
        
        
        $filtersForm = new FiltersForm;
        if (isset($_GET['FiltersForm']))
            $filtersForm->filters = $_GET['FiltersForm'];

        $sql = "SELECT p.HOSPCODE ,h.hosname, count(DISTINCT p.CID) as total 
                from person p LEFT JOIN chospital h on p.HOSPCODE = h.hoscode
                GROUP BY p.HOSPCODE";

        $rawData = Yii::app()->db->createCommand($sql)->queryAll();
        $filtersData = $filtersForm->filter($rawData);

        $dataProvider = new CArrayDataProvider($filtersData, array(
            'keyField' => 'HOSPCODE',
            'totalItemCount' => count($rawData),
            'sort' => array(
                'attributes' => array_keys($rawData[0])
            )
        ));

        $this->renderPartial('_rpt1',array(
            'dataProvider'=>$dataProvider,
            'filtersForm' => $filtersForm,
        ));
    }

}

?>
