<?php

App::uses('AppController', 'Controller', 'CakeEmail', 'Network/Email');

class PagesController extends AppController {

	public $uses = array();
	public $components = array('Email');

	public function display() {

		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
	
	public function about() {}
	public function contact() {

		if (!empty($this->request->data['contact']) and isset($_POST['g-recaptcha-response'])) {
			$userIP = $_SERVER["REMOTE_ADDR"];
			$recaptchaResponse = $_POST["g-recaptcha-response"];
			$secretKey = "6Lf8tgETAAAAAM_1NYCL568eyfevZwVPuaKMRMOw";
    		$request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$recaptchaResponse."&remoteip=".$userIP);
			$Email = new CakeEmail();
			$Email->template('contact');
			$Email->emailFormat('html');
			$Email->config('smtp');
			$Email->from($this->data['contact']['email']);
			$Email->to('utahshrinkwrap@gmail.com');
			$Email->subject('Contact Request Submitted - ' . date('m/d/Y h:i:s'));
			$Email->viewVars(array('content' => $this->request->data));
			if (strpos($request, 'true')) {
				$Email->send();
				$this->Session->setFlash('Thank You. A Shrink Wrap Professional will contact you shortly!', 'alert', array('plugin' => 'BoostCake', 'class' => 'alert alert-success'));
				$this->redirect(array('action' => '/contact'));
			} else if (strpos($request, 'false')){
				$this->Session->setFlash('Please fill out recaptcha.','alert', array('plugin' => 'BoostCake', 'class'=>'alert alert-danger'));
			} else {
				$this->Session->setFlash('There was a problem submitting your request. Please try again later.','alert', array('plugin' => 'BoostCake', 'class'=>'alert alert-danger'));
			}
		}

	}
}