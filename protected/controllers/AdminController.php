<?php

class AdminController extends Controller
{
        public $layout = 'main_admin';
    
        public function filters()
	{
            return array(
                    'AccessControl'
            );
	}
        
	public function actionIndex()
	{
            $this->render('index');
	}
        
        public function actionAdd(){
            $this->render('add_paper');
        }

        public function actionProfile(){
                $model = User::model()->findByPk(Yii::app()->user->id);
                
                if (isset($_POST['User'])) {
                    $model->attributes = $_POST['User'];
                    
                    if ($model->save()){
                        Yii::app()->user->setFlash('success', "User Profile Updated");
                        $this->redirect(Yii::app()->baseUrl . '/admin');
                    }
                    else{
                        Yii::app()->user->setFlash('notice', $model->getErrors());
                    }
                }
                
		$this->render('profile',array('model'=>$model));
        }
        
        public function filterAccessControl($filterChain)
        {
            if (Yii::app()->user->isGuest){
                Yii::app()->user->setReturnUrl(Yii::app()->request->requestUri);
                $this->redirect(Yii::app()->baseUrl . '/site/login');
            }
            
            $filterChain->run();
        }         
}