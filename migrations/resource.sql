INSERT INTO `wp_auth_resource` (`app`, `code`, `name`, `controller`, `request`, `model`, `service`, `repository`, `resource`, `collection`, `rtype`) VALUES 
('infocms', '', '', '1', '1', '1', '', '1', '1', '1', ''),

('passport', 'manager', '管理员', '1', '1', '1', '1', '1', '1', '1', ''),
('passport', 'entrance', '登录/注册', '1', '1', '', '', '', '', '', ''),
('passport', 'user-permission', '用户权限', '', '', '', '1', '', '', '', ''),
('passport', 'easysms', '短信服务', '', '', '', 'Swoolecan\\Baseapp\\Services\\EasysmsService', '', '', '', ''),


INSERT INTO `wp_auth_permission` ( `code`, `resource_code`, `parent_code`, `name`, `app`, `controller`, `action`, `method`, `orderlist`, `islog`, `display`, `icon`, `extparam`) VALUES
( 'infocms_category_add', 'category', 'infocms_goodsbase', '添加分类', 'infocms', 'category', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_category_delete', 'category', 'infocms_goodsbase', '删除', 'infocms', 'category', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_category_update', 'category', 'infocms_goodsbase', '编辑', 'infocms', 'category', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_category_listinfo', 'category', 'infocms_goodsbase', '分类管理', 'infocms', 'category', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_category_listtree', 'category', 'infocms_goodsbase', '商品分类（树状)', 'infocms', 'category', 'listinfo-tree', 'get', 99, 0, 3, '', ''),

( 'infocms_attribute_add', 'attribute', 'infocms_goodsbase', '添加分类', 'infocms', 'attribute', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_attribute_delete', 'attribute', 'infocms_goodsbase', '删除', 'infocms', 'attribute', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_attribute_update', 'attribute', 'infocms_goodsbase', '编辑', 'infocms', 'attribute', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_attribute_listinfo', 'attribute', 'infocms_goodsbase', '分类管理', 'infocms', 'attribute', 'listinfo', 'get', 99, 0, 3, '', ''),

( 'infocms_attribute-value_add', 'attribute-value', 'infocms_goodsbase', '添加分类', 'infocms', 'attribute-value', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_attribute-value_delete', 'attribute-value', 'infocms_goodsbase', '删除', 'infocms', 'attribute-value', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_attribute-value_update', 'attribute-value', 'infocms_goodsbase', '编辑', 'infocms', 'attribute-value', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_attribute-value_listinfo', 'attribute-value', 'infocms_goodsbase', '分类管理', 'infocms', 'attribute-value', 'listinfo', 'get', 99, 0, 3, '', ''),

( 'infocms_type_add', 'type', 'infocms_goodsbase', '添加分类', 'infocms', 'type', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_type_delete', 'type', 'infocms_goodsbase', '删除', 'infocms', 'type', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_type_update', 'type', 'infocms_goodsbase', '编辑', 'infocms', 'type', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_type_listinfo', 'type', 'infocms_goodsbase', '分类管理', 'infocms', 'type', 'listinfo', 'get', 99, 0, 3, '', ''),

( 'infocms_goods_add', 'goods', 'infocms_goods', '添加分类', 'infocms', 'goods', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_goods_delete', 'goods', 'infocms_goods', '删除', 'infocms', 'goods', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_goods_update', 'goods', 'infocms_goods', '编辑', 'infocms', 'goods', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_goods_listinfo', 'goods', 'infocms_goods', '分类管理', 'infocms', 'goods', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_goods_view', 'goods', 'infocms_goods', '查看', 'infocms', 'goods', 'view', 'get', 0, 0, 5, '', ''),

( 'infocms_goods-attribute_add', 'goods-attribute', 'infocms_goods', '添加分类', 'infocms', 'goods-attribute', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_goods-attribute_delete', 'goods-attribute', 'infocms_goods', '删除', 'infocms', 'goods-attribute', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_goods-attribute_update', 'goods-attribute', 'infocms_goods', '编辑', 'infocms', 'goods-attribute', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_goods-attribute_listinfo', 'goods-attribute', 'infocms_goods', '分类管理', 'infocms', 'goods-attribute', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_goods-attribute_view', 'goods-attribute', 'infocms_goods', '查看', 'infocms', 'goods-attribute', 'view', 'get', 0, 0, 5, '', ''),

( 'infocms_goods-sku_add', 'goods-sku', 'infocms_goods', '添加分类', 'infocms', 'goods-sku', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_goods-sku_delete', 'goods-sku', 'infocms_goods', '删除', 'infocms', 'goods-sku', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_goods-sku_update', 'goods-sku', 'infocms_goods', '编辑', 'infocms', 'goods-sku', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_goods-sku_listinfo', 'goods-sku', 'infocms_goods', '分类管理', 'infocms', 'goods-sku', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_goods-sku_view', 'goods-sku', 'infocms_goods', '查看', 'infocms', 'goods-sku', 'view', 'get', 0, 0, 5, '', ''),

( 'infocms_website-sku_add', 'website-sku', 'infocms_goods', '添加分类', 'infocms', 'website-sku', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_website-sku_delete', 'website-sku', 'infocms_goods', '删除', 'infocms', 'website-sku', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_website-sku_update', 'website-sku', 'infocms_goods', '编辑', 'infocms', 'website-sku', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_website-sku_listinfo', 'website-sku', 'infocms_goods', '分类管理', 'infocms', 'website-sku', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_website-sku_view', 'website-sku', 'infocms_goods', '查看', 'infocms', 'website-sku', 'view', 'get', 0, 0, 5, '', ''),

( 'infocms_website-goods_add', 'website-goods', 'infocms_goods', '添加分类', 'infocms', 'website-goods', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_website-goods_delete', 'website-goods', 'infocms_goods', '删除', 'infocms', 'website-goods', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_website-goods_update', 'website-goods', 'infocms_goods', '编辑', 'infocms', 'website-goods', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_website-goods_listinfo', 'website-goods', 'infocms_goods', '分类管理', 'infocms', 'website-goods', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_website-goods_view', 'website-goods', 'infocms_goods', '查看', 'infocms', 'website-goods', 'view', 'get', 0, 0, 5, '', ''),

( 'infocms', '', '', 'CMS系统', 'infocms', '', '', '', 800, 0, 1, 'nested', ''),
( 'infocms_goodsbase', '', 'infocms', '商品基本信息', 'infocms', '', '', '', 900, 0, 1, 'nested', ''),
( 'infocms_goods', '', 'infocms', '商品', 'infocms', '', '', '', 900, 0, 1, 'nested', ''),

( 'infocms_culture-article_add', 'culture-article', 'infocms_culture', '添加资讯', 'infocms', 'culture-article', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_culture-article_delete', 'culture-article', 'infocms_culture', '删除', 'infocms', 'culture-article', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_culture-article_update', 'culture-article', 'infocms_culture', '编辑', 'infocms', 'culture-article', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_culture-article_listinfo', 'culture-article', 'infocms_culture', '资讯管理', 'infocms', 'culture-article', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_culture-article_view', 'culture-article', 'infocms_culture', '查看', 'infocms', 'culture-article', 'view', 'get', 0, 0, 5, '', ''),

( 'infocms_culture-category_add', 'culture-category', 'infocms_culture', '添加分类', 'infocms', 'culture-category', 'add', 'post', 0, 1, 4, '', ''),
( 'infocms_culture-category_delete', 'culture-category', 'infocms_culture', '删除', 'infocms', 'culture-category', 'delete', 'delete', 0, 1, 5, '', ''),
( 'infocms_culture-category_update', 'culture-category', 'infocms_culture', '编辑', 'infocms', 'culture-category', 'update', 'post', 0, 1, 5, '', ''),
( 'infocms_culture-category_listinfo', 'culture-category', 'infocms_culture', '分类管理', 'infocms', 'culture-category', 'listinfo', 'get', 99, 0, 3, '', ''),
( 'infocms_culture-category_listtree', 'culture-category', 'infocms_culture', '资讯分类（树状)', 'infocms', 'culture-category', 'listinfo-tree', 'get', 99, 0, 3, '', ''),

