<?php
class LineasController extends AppController {

	var $name = 'Lineas';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Linea->recursive = 0;
		$this->set('lineas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Linea.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('linea', $this->Linea->read(null, $id));
	}
	function nombre($id = null) {
		$this->layout = 'ajax';
		if (!$id) {
			$this->Session->setFlash(__('Invalid Linea.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('linea', $this->Linea->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Linea->create();
			if ($this->Linea->save($this->data)) {
				$this->Session->setFlash(__('The Linea has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Linea could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Linea', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Linea->save($this->data)) {
				$this->Session->setFlash(__('The Linea has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Linea could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Linea->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Linea', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Linea->del($id)) {
			$this->Session->setFlash(__('Linea deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>