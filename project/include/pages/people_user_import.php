<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id',
'name',
'last_name',
'birth_date',
'fk_type_doc',
'document',
'telf',
'country' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'import_field' ),
'name' => array( 'import_field1' ),
'last_name' => array( 'import_field2' ),
'birth_date' => array( 'import_field3' ),
'fk_type_doc' => array( 'import_field8' ),
'document' => array( 'import_field9' ),
'telf' => array( 'import_field10' ),
'country' => array( 'import_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field8',
'import_field9',
'import_field10',
'import_field11' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field8',
'import_field9',
'import_field10',
'import_field11' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field8',
'import_field9',
'import_field10',
'import_field11' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'name',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'last_name',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'birth_date',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'fk_type_doc',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'document',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'telf',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'country',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>