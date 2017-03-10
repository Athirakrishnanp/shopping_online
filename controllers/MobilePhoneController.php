<?php

/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 8/03/2017
*/


namespace app\controllers;
use \yii\web\Controller;
use yii;
use app\models\TblProduct;
class MobilephoneController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * actionReadmobiledata its function and calling index page
     * @param no param
     * @return its return 'where you going link and two datas,data_mobile_lenovo and data_mobile_moto
     */

    public function actionReadmobiledata()
    {


      $TblProduct_model=new TblProduct();
        $data_mobile_moto=$TblProduct_model->readmobilemoto();
        $data_mobile_lenovo=$TblProduct_model->readmobilelenovo();
        //$data_laptop=$TblProduct_model->readlaptopdata();

         return $this->render('index', [
            'data_mobile_moto' => $data_mobile_moto,
            'data_mobile_lenovo' => $data_mobile_lenovo]);	


    }

}
