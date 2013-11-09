<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            $month_paper = Paper::model()->find(array('condition'=>'type = 0 AND status = 1', 'order'=>'year DESC, month DESC'));
            $mid_month_paper = Paper::model()->find(array('condition'=>'type = 1 AND status = 1', 'order'=>'year DESC, month DESC'));
            
            $this->render('index', array('month_paper'=>$month_paper, 'mid_month_paper'=>$mid_month_paper));
	}

        public function actionArchives() {
            
            $paper = new Paper();
            
            if(isset($_POST['Paper'])){
                $paper->attributes = $_POST['Paper'];
                
                $criteria = new CDbCriteria();
                
                if ($paper->year != '') {
                    $criteria->addCondition('year = ' . $paper->year);
                }
                if ($paper->month != '') {
                    $criteria->addCondition('month = ' . $paper->month);
                }
                if ($paper->type != '') {
                    $criteria->addCondition('type = ' . $paper->type);
                }
                
                $criteria->addCondition('status = 1');
                $criteria->order = 'year DESC, month DESC';
            } else {
                $criteria = new CDbCriteria();
                $criteria->condition = 'status = 1';
                $criteria->order = 'year DESC, month DESC';
            } 
            
            $dataProvider = new CActiveDataProvider('Paper', array('criteria'=>$criteria, 'pagination' => array('pageSize' => 150)));
            
            $this->render('archives', array('model'=>$paper, 'dataProvider' => $dataProvider));
        }
        
        public function actionPaper($id) {
            $paper = Paper::model()->findByPk($id);
            
            if (!isset($paper)) {
                Yii::app()->user->setFlash('notice', 'Invalid Newspaper ID');
                $this->redirect(Yii::app()->baseUrl);
            }
            
            $criteria=new CDbCriteria(array(
                    'condition' => 'paper = ' . $id,
                    'order' => 'TRIM(REPLACE(name, ".pdf", ""))+0'
            ));
            
            $dataProvider = new CActiveDataProvider('Pages', array('criteria'=>$criteria, 'pagination' => array('pageSize' => 4)));
            
            $this->render('paper', array('model'=>$paper, 'dataProvider'=>$dataProvider));
        }
        
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
                                //---------------Email notification to Admin--------------------------------------------------------
                                $message = $this->renderPartial('//email/template/contact_form_submit', array('model'=>$model), true);

                                if (isset($model) && isset($message) && $message != "") {
                                    $mailer = Yii::createComponent('application.extensions.mailer.EMailer');
                                    $mailer->Host = Yii::app()->params['SMTP_Host'];
                                    $mailer->Port = Yii::app()->params['SMTP_Port'];
                                    if (Yii::app()->params['SMTPSecure'] == TRUE){
                                        $mailer->SMTPSecure = 'ssl';
                                    }
                                    $mailer->IsSMTP();
                                    $mailer->SMTPAuth = true;
                                    $mailer->Username = Yii::app()->params['SMTP_Username'];
                                    $mailer->Password = Yii::app()->params['SMTP_password'];
                                    $mailer->From = Yii::app()->params['SMTP_Username'];
                                    $mailer->AddReplyTo($model->email);
                                    $mailer->AddAddress(Yii::app()->params['adminEmail']);
                                    $mailer->FromName = 'Pahana - Contact Enquiry';
                                    $mailer->CharSet = 'UTF-8';
                                    $mailer->Subject = 'Pahana : Contact enquiry from - ' . $model->name;
                                    $mailer->IsHTML();
                                    $mailer->Body = $message;
                                    $mailer->SMTPDebug  = Yii::app()->params['SMTPDebug'];

                                    try{     
                                        $mailer->Send();
                                    }
                                    catch (Exception $ex){
                                        echo $ex->getMessage();
                                    }
                                }
                                
                                $model=new ContactForm;
                                Yii::app()->user->setFlash('success','Thank you for contacting us. We will respond to you as soon as possible.');
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
            $model=new LoginForm;

            /**
             * Check for Remember me cookie and show user name
             */
            if (isset(Yii::app()->request->cookies['remember_me'])) {
               $model->username = Yii::app()->request->cookies['remember_me']->value;
               $model->rememberMe = 1;
            }
            
            // if it is ajax validation request
            if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
            {
                    echo CActiveForm::validate($model);
                    Yii::app()->end();
            }

            // collect user input data
            if(isset($_POST['LoginForm']))
            {
                    $model->attributes=$_POST['LoginForm'];
                    // validate user input and redirect to the previous page if valid
                    if($model->validate() && $model->login()){
                        
                        /**
                         * Configure remember me cookie
                         */
                        if ($model->rememberMe == 1) {
                            unset(Yii::app()->request->cookies['remember_me']);
                            $cookie = new CHttpCookie('remember_me', $model->username);
                            $cookie->expire = time()+60*60*24*180; 
                            Yii::app()->request->cookies['remember_me'] = $cookie;
                        }
                        else{
                            if (isset(Yii::app()->request->cookies['remember_me'])) {
                                unset(Yii::app()->request->cookies['remember_me']);
                            }
                        }
                        
                        $this->redirect(Yii::app()->user->returnUrl);
                    }        
            }
            // display the login form
            $this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}