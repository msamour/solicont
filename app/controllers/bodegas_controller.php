<?php
class BodegasController extends AppController {

	var $name = 'Bodegas';
	var $helpers = array('Html', 'Form','Javascript', 'Ajax');
	
	var $components = array('Auth', 'Cookie');
	


	function index() {
		$this->Bodega->recursive = 0;
		$this->set('bodegas', $this->paginate());
	}

	function view($id = null) {
		//$this->render('layout file', 'ajax');
		if (!$id) {
			$this->Session->setFlash(__('Invalid Bodega.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('bodega', $this->Bodega->read(null, $id));
		$this->set('mibod', $id);
	}
	function nombre($id = null) {
		$this->layout = 'ajax';
		//$this->layout('ajax');
		//$this->render('layout file', 'ajax');
		if (!$id) {
			$this->Session->setFlash(__('Invalid Bodega.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('bodega', $this->Bodega->read(null, $id));
		//$this->set('mibod', $id);
	}
	
	function existencia($id = null) {
		//$this->render('layout file', 'ajax');
		if (!$id) {
			$this->Session->setFlash(__('Invalid Bodega.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('bodega', $this->Bodega->read(null, $id));
	}
	function add() {
		if (!empty($this->data)) {
			$this->Bodega->create();
			if ($this->Bodega->save($this->data)) {
				$this->Session->setFlash(__('The Bodega has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Bodega could not be saved. Please, try again.', true));
			}
		}
		$productos = $this->Bodega->Producto->find('list');
		$empresas = $this->Bodega->Empresa->find('list');
		$this->set(compact('productos', 'empresas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Bodega', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Bodega->save($this->data)) {
				$this->Session->setFlash(__('The Bodega has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Bodega could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Bodega->read(null, $id);
		}
		$productos = $this->Bodega->Producto->find('list');
		$empresas = $this->Bodega->Empresa->find('list');
		$this->set(compact('productos','empresas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Bodega', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Bodega->del($id)) {
			$this->Session->setFlash(__('Bodega deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>