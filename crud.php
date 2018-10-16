<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Desar i crear nou',
    'save_action_save_and_edit' => 'Desar i continuar editant',
    'save_action_save_and_back' => 'Desar i regresar',
    'save_action_changed_notification' => 'L\'acció per defecte del botó desar va ser modificada.',

    // Create form
    'add'                 => 'Afegir',
    'back_to_all'         => 'Tornar al llistat de',
    'cancel'              => 'Cancelar',
    'add_a_new'           => 'Afegir ',

    // Edit form
    'edit'                 => 'Editar',
    'save'                 => 'Desar',

    // Revisions
    'revisions'            => 'Les revisions',
    'no_revisions'         => 'No hi ha revisions trobades',
    'created_this'         => 'creat aquest',
    'changed_the'          => 'canviat el',
    'restore_this_value'   => 'restaurar aquest valor',
    'from'                 => 'de',
    'to'                   => 'a',
    'undo'                 => 'Desfer',
    'revision_restored'    => 'Revisió restaurada correctament',

    // Translatable models
    'edit_translations' => 'EDITAR TRADUCCIONS',
    'language'          => 'Idioma',

    // CRUD table view
    'all'                       => 'Tots els registres de ',
    'in_the_database'           => 'a la base de dades',
    'list'                      => 'Llistar',
    'actions'                   => 'Accions',
    'preview'                   => 'Vista previa',
    'delete'                    => 'Eliminar',
    'admin'                     => 'Admin',
    'details_row'               => 'Aquesta és la fila de detalls. Modificar al seu gust.',
    'details_row_loading_error' => 'S\'ha produït un error en carregar les dades. Si us plau, proveu de nou.',

    // Confirmation messages and bubbles
    'delete_confirm'                              => 'Està segur que desitja eliminar aquest element?',
    'delete_confirmation_title'                   => 'Element eliminat',
    'delete_confirmation_message'                 => 'El element ha estat eliminat de manera correcta.',
    'delete_confirmation_not_title'               => 'No s\'ha pogut eliminar',
    'delete_confirmation_not_message'             => 'Hi ha hagut un error. Potser l\'element no hagi estat eliminat.',
    'delete_confirmation_not_deleted_title'       => 'No s\'ha pogut eliminar',
    'delete_confirmation_not_deleted_message'     => 'No ha passat res. El seu element està segur.',

    // DataTables translation
    'emptyTable'     => 'No hi ha dades disponibles a la taula',
    'info'           => 'Ara es mostren registres _START_ a _END_ d\'un total de _TOTAL_ registros',
    'infoEmpty'      => 'Ara es mostren 0 registres',
    'infoFiltered'   => '(filtrant de _MAX_ registres totals)',
    'infoPostFix'    => '',
    'thousands'      => ',',
    'lengthMenu'     => '_MENU_ elements per pàgina',
    'loadingRecords' => 'Carregant...',
    'processing'     => 'En procés...',
    'search'         => 'Cercar: ',
    'zeroRecords'    => 'No es van trobar elements',
    'paginate'       => [
        'first'    => 'Primer',
        'last'     => 'Últim',
        'next'     => 'Següent',
        'previous' => 'Anterior',
    ],
    'aria' => [
        'sortAscending'  => ': activar per ordenar ascendentemente',
        'sortDescending' => ': activar per ordenar descendentemente',
    ],

    // global crud - errors
    'unauthorized_access' => 'Accés denegat - vostè no té els permisos necessaris per veure aquesta pàgina.',
    'please_fix' => 'Si us plau corregiu els següents errors:',

    // global crud - success / error notification bubbles
    'insert_success' => 'L\'element ha estat afegit de manera correcta.',
    'update_success' => 'L\'element ha estat modificat de manera correcta.',

    // CRUD reorder view
    'reorder'                      => 'Reordenar',
    'reorder_text'                 => 'Arrossegar i deixar anar per reordenar.',
    'reorder_success_title'        => 'Fet',
    'reorder_success_message'      => 'L\'ordre ha estat guardat.',
    'reorder_error_title'          => 'Error',
    'reorder_error_message'        => 'L\'ordre no ha estat guardat.',

    // CRUD yes/no
    'yes' => 'Sí',
    'no' => 'No',

    // Fields
    'browse_uploads' => 'Pujar arxius',
    'clear' => 'Netejar',
    'page_link' => 'Enllaç',
    'page_link_placeholder' => 'http://backpackforlaravel.com',
    'internal_link' => 'Enllaç intern',
    'internal_link_placeholder' => 'Slug intern. Example: \'admin/page\' (sense cometes) para \':url\'',
    'external_link' => 'Enllaç extern',

];
