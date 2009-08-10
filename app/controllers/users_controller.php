<?php
/**
 *User Controller File
 *
 * User Controller
 *
 * @copyright		Copyright 2007-2008, 3HN Deisngs.
* @author			Baz L
* @link			http://www.WebDevelopment2.com/
 */
 
/**
 * User Controller class
 *
 * @author			Kevin Lloyd
 */
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form', 'Session' );
	var $components = array('Auth'); 

	function beforeFilter() {
   		$this->Auth->allow('index','view','add');
     }

	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data))
			{
				$this->Session->setFlash('The User has been saved');
				$this->redirect(array('action'=>'index'), null, true);
		} else 
			{
				$this->Session->setFlash('The User could not be saved. Please, try again.');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}
/**
 * All the admin_ functions are straight from cake's console bake
 *
 */
	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid User.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid User');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data))
			{
				$this->Session->setFlash('The User has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			}
			else
			{
				$this->Session->setFlash('The User could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid id for User');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash('User #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data))
			{
				$this->Session->setFlash('The User has been saved');
				$this->redirect(array('action'=>'index'), null, true);
		} else 
			{
				$this->Session->setFlash('The User could not be saved. Please, try again.');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}
/**
 * End of baked views
 */

/**
 * Login the user
 *
 * Again, keeping it simple this just needs to remain empty. The component handles everything
 *
 */	
	function login()
	{
		//Agregaremos el usuario a la sesion.
		echo $this->Auth->user();
		if ($this->Auth->user()) {
			echo "no esto solito";
            if (!empty($this->data)) {
                
				if (empty($this->data['User']['remember_me'])) {
                    $this->Session->del('User');
                }
                else {
                    //$session = array();
                    //$cookie['email'] = $this->data['User']['email'];
                    //$cookie['token'] = $this->data['User']['pasword'];
					//$session['usuario'] = $this->data['User']['username'];
                    $this->Session->write('User', 'Admin');
                }

                unset($this->data['User']['remember_me']);
            }

            $this->redirect($this->Auth->redirect());

        }

	}

	/**
	 * Log out user
	 *
	 */
	
	function logout(){
        $this->Session->setFlash('Logout');
	    $this->redirect($this->Auth->logout());
    }
}
?>