<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'active' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ),
'fk_id_rol' => array( 'totalsType' => '' ),
'password' => array( 'totalsType' => '' ),
'username' => array( 'totalsType' => '' ),
'reset_token' => array( 'totalsType' => '' ),
'created' => array( 'totalsType' => '' ),
'updated' => array( 'totalsType' => '' ),
'fk_id_people' => array( 'totalsType' => '' ),
'userpic' => array( 'totalsType' => '' ),
'ext_security_id' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id',
'active',
'email',
'fk_id_rol',
'password',
'username',
'reset_token',
'created',
'updated',
'fk_id_people',
'ext_security_id' ),
'exportFields' => array( 'id',
'active',
'email',
'fk_id_rol',
'password',
'username',
'reset_token',
'created',
'updated',
'fk_id_people',
'ext_security_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'export_field' ),
'active' => array( 'export_field1' ),
'email' => array( 'export_field2' ),
'fk_id_rol' => array( 'export_field3' ),
'password' => array( 'export_field4' ),
'username' => array( 'export_field5' ),
'reset_token' => array( 'export_field6' ),
'created' => array( 'export_field7' ),
'updated' => array( 'export_field8' ),
'fk_id_people' => array( 'export_field9' ),
'ext_security_id' => array( 'export_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'active',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'email',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'fk_id_rol',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'password',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'username',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'reset_token',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'created',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'updated',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'fk_id_people',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'ext_security_id',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 7,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>