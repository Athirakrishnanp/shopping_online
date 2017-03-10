<?php

/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 8/03/2017
*/


namespace app\controllers;
use \yii\web\Controller;
use yii;
use app\models\TblProduct;

/**
<<<<<<< HEAD
     * class  class name is MobilephoneController and extends controller
     * functions actionReadmobiledata
     
*/


=======
 * MobilephoneController implements the actions for TblProduct model.
 */
>>>>>>> f1aff845daa3b3b55dd54c8b73e6448da795e186
class MobilephoneController extends Controller
{

    /**
     * actionReadmobiledata its function and calling index page
     * @parm no param
     * $TblProduct_model its object TblProduct
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
