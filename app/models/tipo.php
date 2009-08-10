<?php
class Tipo extends AppModel {

	var $name = 'Tipo';
	var $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Encabezado' => array(
			'className' => 'Encabezado',
			'foreignKey' => 'tipo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>
