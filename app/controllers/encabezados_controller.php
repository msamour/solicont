<?php
class EncabezadosController extends AppController {

	var $name = 'Encabezados';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Encabezado->recursive = 0;
		$this->set('encabezados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Encabezado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('encabezado', $this->Encabezado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Encabezado->create();
			if ($this->Encabezado->save($this->data)) {
				$this->Session->setFlash(__('The Encabezado has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Encabezado could not be saved. Please, try again.', true));
			}
		}
		$tipos = $this->Encabezado->Tipo->find('list');
		$bodegas = $this->Encabezado->Bodega->find('list');
		$this->set(compact('tipos', 'bodegas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Encabezado', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Encabezado->save($this->data)) {
				$this->Session->setFlash(__('The Encabezado has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Encabezado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Encabezado->read(null, $id);
		}
		$tipos = $this->Encabezado->Tipo->find('list');
		$bodegas = $this->Encabezado->Bodega->find('list');
		$this->set(compact('tipos','bodegas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Encabezado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Encabezado->del($id)) {
			$this->Session->setFlash(__('Encabezado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
