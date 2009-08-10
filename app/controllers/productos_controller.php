<?php
class ProductosController extends AppController {

	var $name = 'Productos';
	//var $helpers = array('Html', 'Form');
	var $helpers = array('Html', 'Form','Javascript', 'Ajax');
	var $components = array('Auth');

	function index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Producto.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('producto', $this->Producto->read(null, $id));
	}
	function movimientos($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Producto.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('producto', $this->Producto->read(null, $id));
	}
	function existencia($id=null,$bodega){
		//$this->render('ajax','ajax');
		$conditions = array("Producto.id" => $id,
							"Detalle.bodega_id" => $bodega,);
		$condicion = array("Producto_id =$id");
		$this->set('bodega', $bodega );				
		$this->set('producto', $this->Producto->Detalle->find($condicion) );
	}
	function lista($id = null) {
		//$this->Producto->recursive = 0;
		$this->set('productos', $this->Producto->find('all'));
		$this->set('usuario', $this->Auth->user('username'));
	}
	

	function add() {
		if (!empty($this->data)) {
			$this->Producto->create();
			if ($this->Producto->save($this->data)) {
				$this->Session->setFlash(__('The Producto has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Producto could not be saved. Please, try again.', true));
			}
		}
		$medidas = $this->Producto->Medida->find('list');
		$lineas = $this->Producto->Linea->find('list');
		$this->set(compact('medidas', 'lineas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Producto', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Producto->save($this->data)) {
				$this->Session->setFlash(__('The Producto has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Producto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Producto->read(null, $id);
		}
		$medidas = $this->Producto->Medida->find('list');
		$lineas = $this->Producto->Linea->find('list');
		$this->set(compact('medidas','lineas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Producto', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Producto->del($id)) {
			$this->Session->setFlash(__('Producto deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>