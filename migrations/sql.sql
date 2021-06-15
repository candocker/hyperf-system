SELECT * FROM `wp_auth_permission` WHERE `resource_code` = 'mall';

REPLACE INTO `wp_auth_role_permission`(`role_code`, `permission_code`) SELECT 'admin', `code` FROM `wp_auth_permission` WHERE 1 ;
INSERT INTO `wp_auth_role_permission`(`role_code`, `permission_code`) SELECT 'editor', `code` FROM `wp_auth_permission` WHERE `app` IN ('merchant') ;


-------------------旧数据-------------
INSERT INTO `wp_auth_permission` (`code`, `resource_code`, `sort`, `parent_code`, `name`, `app`, `controller`, `action`, `orderlist`, `islog`, `display`, `extparam`) SELECT `code`, `elem_code`, 'backend', `parent_code`, `name`, `module`, `controller`, `method`, `orderlist`, `islog`, `display`, `extparam` FROM `bak_passport`.`wp_auth_permission0808` WHERE `module` = 'merchant' ;
UPDATE `wp_auth_permission` SET `method` = 'get' WHERE `method` = '' AND `action` IN ('listinfo', 'view');
UPDATE `wp_auth_permission` SET `method` = 'post' WHERE `method` = '' AND `action` IN ('add');
UPDATE `wp_auth_permission` SET `method` = 'put' WHERE `method` = '' AND `action` IN ('update');
UPDATE `wp_auth_permission` SET `method` = 'delete' WHERE `method` = '' AND `action` IN ('delete');
UPDATE `wp_auth_permission` SET `method` = 'get' WHERE `method` = '' AND `action` != '';


