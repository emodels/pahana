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
            $criteria = new CDbCriteria();
            $criteria->order = 'id DESC';

            $dataProvider = new CActiveDataProvider('Paper', array('criteria'=>$criteria, 'pagination' => array('pageSize' => 150)));
            
            $this->render('index', array('dataProvider' => $dataProvider));
	}
        
        public function actionDelete($id){
            Paper::model()->deleteByPk($id);
        }
        
        public function actionEdit($id){
            $paper = Paper::model()->findByPk($id);
            
            if (isset($_POST['Paper'])) {
                $paper->attributes = $_POST['Paper'];
                
                if (Paper::model()->exists('id != :id AND year = :year AND month = :month AND type = :type', array(':id' => $id, ':year' => $paper->year, ':month' => $paper->month, ':type' => $paper->type))) {
                    Yii::app()->user->setFlash('error', 'Newspaper alraedy exists');
                } else {
                    if ($paper->save()) {
                        Yii::app()->user->setFlash('success', 'Newspaper Updated');
                        $this->redirect(array('addpages', 'id'=>$paper->id));
                    }
                }    
            }
            
            $this->render('edit_paper', array('model' => $paper));
        }

        public function actionAdd(){
            $paper = new Paper();
            
            $paper->year = date("Y");
            $paper->month = date("m");
            
            if (isset($_POST['Paper'])) {
                $paper->attributes = $_POST['Paper'];
                
                if (Paper::model()->exists('year = :year AND month = :month AND type = :type', array(':year' => $paper->year, ':month' => $paper->month, ':type' => $paper->type))) {
                    Yii::app()->user->setFlash('error', 'Newspaper alraedy exists');
                } else {
                    $paper->entry_date = Yii::app()->dateFormatter->format('yyyy-MM-dd', time());
                    $paper->status = 0;

                    if ($paper->save()) {
                        Yii::app()->user->setFlash('success', 'Newspaper Added');
                        $this->redirect(array('addpages', 'id'=>$paper->id));
                    }
                }
            }
            
            $this->render('add_paper', array('model' => $paper));
        }

        public function actionPageDelete($id){
            if (Yii::app()->request->isAjaxRequest) {
                Pages::model()->deleteByPk($id);
            }
        }
        
        public function actionAddPages($id) {
            
            $paper = Paper::model()->findByPk($id);
            
            if (!isset($paper)) {
                Yii::app()->user->setFlash('notice', 'Invalid Paper');
                $this->redirect(Yii::app()->baseUrl . '/admin');
            }
            
            if (Yii::app()->request->isPostRequest) {
                if ($paper->page_count == count($paper->pages)) {
                    
                    $paper->status = 1;
                    $paper->save();
                    
                    Yii::app()->user->setFlash('success', "Paper published successfully");
                    $this->redirect(Yii::app()->baseUrl . '/admin');
                } else {
                    Yii::app()->user->setFlash('error', 'You must upload ' . $paper->page_count . ' pages before Publish Newspaper online');
                }
            }
            
            //---------Folder specification checkup-------------
            $dir = './uploads/' . $paper->year . '/' . date("F", mktime(0, 0, 0, $paper->month, 10)) . '/' . ($paper->type == 0 ? 'monthly' : 'mid_monthly');

            if (!file_exists($dir)){
                mkdir($dir, 0777, true);
            }
            //--------------------------------------------------
            
            $criteria = new CDbCriteria();
            $criteria->addCondition('paper = ' . $id);
            $criteria->order = 'TRIM(REPLACE(name, ".pdf", ""))+0';

            $dataProvider = new CActiveDataProvider('Pages', array('criteria'=>$criteria, 'pagination' => array('pageSize' => 150)));

            $this->render('add_pages', array('model'=>$paper, 'dataProvider'=>$dataProvider));
        }
        
        public function actionUpload($id, $type, $month, $year)
        {
                Yii::import("ext.EAjaxUpload.qqFileUploader");

                $folder = 'uploads/' . $year . '/' . date("F", mktime(0, 0, 0, $month, 10)) . '/' . ($type == 0 ? 'monthly' : 'mid_monthly') . '/';
                $allowedExtensions = array("pdf");
                $sizeLimit = 100 * 1024 * 1024;
                
                $uploader = new qqFileUploader($allowedExtensions, $sizeLimit, $_FILES['qqfile']);
                
                $result = $uploader->handleUpload($folder, true);
                $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

                $fileSize=filesize($folder.$result['filename']);
                $fileName=$result['filename'];

                //----------Add to Database--------
                $page = new Pages();
                
                $page->paper = $id;
                $page->name = $fileName;
                $page->folder = $folder;
                
                $page->save();
                //---------------------------------
                
                echo $return;
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