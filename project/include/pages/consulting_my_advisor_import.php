<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'start',
'end',
'fk_id_status_consulting',
'access',
'start_h',
'end_h',
'name',
'last_name',
'document',
'fk_id_people' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'start' => array( 'import_field3' ),
'end' => array( 'import_field4' ),
'fk_id_status_consulting' => array( 'import_field5' ),
'access' => array( 'import_field6' ),
'start_h' => array( 'import_field7' ),
'end_h' => array( 'import_field8' ),
'name' => array( 'import_field9' ),
'last_name' => array( 'import_field10' ),
'document' => array( 'import_field11' ),
'fk_id_people' => array( 'import_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field' ) ),
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
'items' => array( 'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field3' => array( 'field' => 'start',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'end',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'fk_id_status_consulting',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'access',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'start_h',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'end_h',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'name',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'last_name',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'document',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'fk_id_people',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>