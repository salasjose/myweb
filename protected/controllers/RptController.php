<?php

class RptController  extends Controller {

    public function actionRpt1() {
        $sql = "SELECT p.HOSPCODE ,h.hosname, count(DISTINCT p.CID) as total 
from person p
LEFT JOIN chospital h on p.HOSPCODE = h.hoscode
GROUP BY p.HOSPCODE";
        
        $rawData = Yii::app()->db->createCommand($sql)->queryAll();
        
        $dataProvider = new CArrayDataProvider($rawData,array(
            'totalItemCount'=>  count($rawData),
            'sort'=>array(
                'attributes'=>  array_keys($rawData[0])
            )
        ));
        
        $this->render('rpt1',array(
            'sql'=>$sql,
            'dataProvider'=>$dataProvider,
        ));
        
        
    }

}

