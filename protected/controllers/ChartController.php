<?php
class ChartController extends Controller{
    public function actionPyramid(){
        
        $this->render('pyramid');
        
    }
    
    public function actionPie(){
        $this->render('pie');
    }
    
    
}
