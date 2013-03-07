<?php
class UsersController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Users';

 public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('add');
	}
	
	
	public function login(){
		if ($this->request->is('post')){
			if ($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}
			else {
				$this ->Session -> setFlash('you username or password is incorrect');

			}
		}
	}




	public function logout(){
		$this->redirect($this->Auth->logout());
	}


	public function index(){
		$this->User->recursive=0;
		$this->set('users',$this->find('all'));
	}

	public function Register ()
	{
		if ($this->request->is('post')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}



	






/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */

	
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
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
		$this->render(implode('/', $path));
	}
}