<?php
class DetallesController extends AppController {

	var $name = 'Detalles';
	var $helpers = array('Html', 'Form','Time','Ajax');

	function index() {
		$this->Detalle->recursive = 0;
		$this->set('detalles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Detalle.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('detalle', $this->Detalle->read(null, $id));
	}
	function existencia($id = null, $bodega = null) {
		 $this->layout = 'ajax';
		if (!$id) {
			$this->Session->setFlash(__('Invalid Detalle.', true));
			$this->redirect(array('action'=>'index'));
		}
		$conditions = array("Producto_id" => $id,
							"Bodega_id" => $bodega,);
	
		//this->render('ajax');

		$this->set('detalles', $this->Detalle->findAll($conditions));
	}
	function movimientos($id = null, $bodega = null) {
		 $this->layout = 'ajax';
		if (!$id) {
			$this->Session->setFlash(__('Invalid Detalle.', true));
			$this->redirect(array('action'=>'index'));
		}
		$conditions = array("Producto_id" => $id,
							"Bodega_id" => $bodega,);
	
		//this->render('ajax');

		$this->set('detalles', $this->Detalle->findAll($conditions));
	}
	

	function add() {
		if (!empty($this->data)) {
			$this->Detalle->create();
			if ($this->Detalle->save($this->data)) {
				$this->Session->setFlash(__('The Detalle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Detalle could not be saved. Please, try again.', true));
			}
		}
		$bodegas = $this->Detalle->Bodega->find('list');
		$productos = $this->Detalle->Producto->find('list');
		$this->set(compact('bodegas', 'productos'));
	}
	function agregar(){
		$this->layout = 'ajax';
		if (!empty($this->data)) {
			$this->Detalle->create();
			if ($this->Detalle->save($this->data)) {
				$this->Session->setFlash(__('The Detalle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Detalle could not be saved. Please, try again.', true));
			}
		}
		$bodegas = $this->Detalle->Bodega->find('list');
		$productos = $this->Detalle->Producto->find('list');
		$this->set(compact('bodegas', 'productos'));
	}

	function edit($id = null) {
		$this->layout = 'ajax';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Detalle', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Detalle->save($this->data)) {
				$this->Session->setFlash(__('The Detalle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Detalle could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Detalle->read(null, $id);
		}
		$bodegas = $this->Detalle->Bodega->find('list');
		$productos = $this->Detalle->Producto->find('list');
		$this->set(compact('bodegas','productos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Detalle', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Detalle->del($id)) {
			$this->Session->setFlash(__('Detalle deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>