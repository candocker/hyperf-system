<?php
return array (
  'passport' => 
  array (
    'attachment-info' => 
    array (
      'listinfo' => 
      array (
        'code' => 'passport_attachment-info_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-infos',
        'callback' => 'ModulePassport\\Controllers\\AttachmentInfoController@listinfo',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment-info_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-infos/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentInfoController@view',
      ),
    ),
    'attachment-path' => 
    array (
      'add' => 
      array (
        'code' => 'passport_attachment-path_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachment-paths',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@add',
      ),
      'create' => 
      array (
        'code' => 'passport_attachment-path_create',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachment-paths/create',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@create',
      ),
      'delete' => 
      array (
        'code' => 'passport_attachment-path_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/attachment-paths[/[{id}]]',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_attachment-path_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-paths',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@listinfo',
      ),
      'path' => 
      array (
        'code' => 'passport_attachment-path_path',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-paths/path',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@path',
      ),
      'update' => 
      array (
        'code' => 'passport_attachment-path_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/attachment-paths[/[{id}]]',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@update',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment-path_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-paths/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@view',
      ),
    ),
    'attachment-video' => 
    array (
      'listinfo' => 
      array (
        'code' => 'passport_attachment-video_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-videos',
        'callback' => 'ModulePassport\\Controllers\\AttachmentVideoController@listinfo',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment-video_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-videos/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentVideoController@view',
      ),
    ),
    'attachment' => 
    array (
      'add' => 
      array (
        'code' => 'passport_attachment_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachments',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@add',
      ),
      'delete' => 
      array (
        'code' => 'passport_attachment_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/attachments[/[{id}]]',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_attachment_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachments',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@listinfo',
      ),
      'update' => 
      array (
        'code' => 'passport_attachment_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/attachments[/[{id}]]',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@update',
      ),
      'upload' => 
      array (
        'code' => 'passport_attachment_upload',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachments/upload',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@upload',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachments/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@view',
      ),
    ),
    'managerlog' => 
    array (
      'listinfo' => 
      array (
        'code' => 'passport_managerlog_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/managerlogs',
        'callback' => 'ModulePassport\\Controllers\\ManagerlogController@listinfo',
      ),
    ),
    'manager' => 
    array (
      'add' => 
      array (
        'code' => 'passport_manager_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/managers',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@add',
      ),
      'delete' => 
      array (
        'code' => 'passport_manager_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/managers/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_manager_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/managers',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@listinfo',
      ),
      'update' => 
      array (
        'code' => 'passport_manager_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/managers/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@update',
      ),
      'view' => 
      array (
        'code' => 'passport_manager_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/managers/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@view',
      ),
    ),
    'permission' => 
    array (
      'add' => 
      array (
        'code' => 'passport_permission_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/permissions',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@add',
      ),
      'cache' => 
      array (
        'code' => 'passport_permission_cache',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/permissions/cache',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@cache',
      ),
      'delete' => 
      array (
        'code' => 'passport_permission_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/permissions/{code}',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_permission_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/permissions',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@listinfo',
      ),
      'listinfo-tree' => 
      array (
        'code' => 'passport_permission_listtree',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/permissions/listinfo-tree',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@listinfoTree',
      ),
      'update' => 
      array (
        'code' => 'passport_permission_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/permissions/{code}',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@update',
      ),
      'view' => 
      array (
        'code' => 'passport_permission_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/permissions/{code}',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@view',
      ),
    ),
    'region' => 
    array (
      'add' => 
      array (
        'code' => 'passport_region_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/regions',
        'callback' => 'ModulePassport\\Controllers\\RegionController@add',
      ),
      'cache' => 
      array (
        'code' => 'passport_region_cache',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/regions/cache',
        'callback' => 'ModulePassport\\Controllers\\RegionController@cache',
      ),
      'delete' => 
      array (
        'code' => 'passport_region_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/regions/{code}',
        'callback' => 'ModulePassport\\Controllers\\RegionController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_region_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/regions',
        'callback' => 'ModulePassport\\Controllers\\RegionController@listinfo',
      ),
      'update' => 
      array (
        'code' => 'passport_region_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/regions/{code}',
        'callback' => 'ModulePassport\\Controllers\\RegionController@update',
      ),
      'view' => 
      array (
        'code' => 'passport_region_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/regions/{code}',
        'callback' => 'ModulePassport\\Controllers\\RegionController@view',
      ),
    ),
    'resource' => 
    array (
      'add' => 
      array (
        'code' => 'passport_resource_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/resources',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@add',
      ),
      'cache' => 
      array (
        'code' => 'passport_resource_cache',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/resources/cache',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@cache',
      ),
      'delete' => 
      array (
        'code' => 'passport_resource_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/resources/{code}',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_resource_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/resources',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@listinfo',
      ),
      'update' => 
      array (
        'code' => 'passport_resource_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/resources/{code}',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@update',
      ),
      'view' => 
      array (
        'code' => 'passport_resource_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/resources/{code}',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@view',
      ),
    ),
    'role' => 
    array (
      'add' => 
      array (
        'code' => 'passport_role_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/roles',
        'callback' => 'ModulePassport\\Controllers\\RoleController@add',
      ),
      'delete' => 
      array (
        'code' => 'passport_role_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/roles/{code}',
        'callback' => 'ModulePassport\\Controllers\\RoleController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_role_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/roles',
        'callback' => 'ModulePassport\\Controllers\\RoleController@listinfo',
      ),
      'update' => 
      array (
        'code' => 'passport_role_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/roles/{code}',
        'callback' => 'ModulePassport\\Controllers\\RoleController@update',
      ),
    ),
    'user' => 
    array (
      'add' => 
      array (
        'code' => 'passport_user_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/users',
        'callback' => 'ModulePassport\\Controllers\\UserController@add',
      ),
      'delete' => 
      array (
        'code' => 'passport_user_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/users/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\UserController@delete',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_user_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/users',
        'callback' => 'ModulePassport\\Controllers\\UserController@listinfo',
      ),
      'update' => 
      array (
        'code' => 'passport_user_update',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/users/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\UserController@update',
      ),
      'view' => 
      array (
        'code' => 'passport_user_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/users/{id:\\d+}',
        'callback' => 'ModulePassport\\Controllers\\UserController@view',
      ),
    ),
  ),
);
