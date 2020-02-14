<?php
/**
 * Chinese settings file for Userhomepage plugin
 * @author   renwanly <renwanly@163.com>
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

    $lang['create_private_ns'] = '创建用户的私有命名空间（在启用之前[重点检查]所有选项）？';
    $lang['use_name_string'] = '使用用户的全名而非登录名作为其私有命名空间。';
    $lang['use_start_page'] = '对每个私有命名空间的起始页使用wiki的起始页名称（否则，将使用私有命名空间名称）。';
    $lang['users_namespace'] = '用户命名空间将创建于此命名空间之下。';
    $lang['group_by_name'] = '按用户名的第一个字符对用户的命名空间进行分组？';
    $lang['edit_before_create'] = '允许用户在创建时编辑其私有命名空间的起始页（仅当未同时生成公共页时才有效）。';
    $lang['acl_all_private'] = '@All分组在私有命名空间的权限';
    $lang['acl_all_private_o_0'] = '无(默认)';
    $lang['acl_all_private_o_1'] = '阅读';
    $lang['acl_all_private_o_2'] = '编辑';
    $lang['acl_all_private_o_4'] = '创建';
    $lang['acl_all_private_o_8'] = '上传';
    $lang['acl_all_private_o_16'] = '删除';
    $lang['acl_all_private_o_noacl'] = '没有自动ACL';
    $lang['acl_user_private'] = '@user分组在私有命名空间的权限';
    $lang['acl_user_private_o_0'] = '无(默认)';
    $lang['acl_user_private_o_1'] = '阅读';
    $lang['acl_user_private_o_2'] = '编辑';
    $lang['acl_user_private_o_4'] = '创建';
    $lang['acl_user_private_o_8'] = '上传';
    $lang['acl_user_private_o_16'] = '删除';
    $lang['acl_user_private_o_noacl'] = '没有自动ACL';
    $lang['groups_private'] = '与私有命名空间创建相关的逗号分隔用户分组列表（留空以将上述设置应用于所有用户）。';
    $lang['create_public_page'] = '创建用户的公共页？';
    $lang['public_pages_ns'] = '公共页面将创建于此命名空间之下。';
    $lang['acl_all_public'] = '@All分组在公共页面的权限';
    $lang['acl_all_public_o_0'] = '无';
    $lang['acl_all_public_o_1'] = '阅读(默认)';
    $lang['acl_all_public_o_2'] = '编辑';
    $lang['acl_all_public_o_noacl'] = '没有自动ACL';
    $lang['acl_user_public'] = '@user分组在公共页面的权限';
    $lang['acl_user_public_o_0'] = '无';
    $lang['acl_user_public_o_1'] = '阅读(默认)';
    $lang['acl_user_public_o_2'] = '编辑';
    $lang['acl_user_public_o_noacl'] = '没有自动ACL';
    $lang['groups_public'] = '与公共页面创建相关的逗号分隔用户分组列表（留空以将上述设置应用于所有用户）。';
    $lang['templates_path'] = '模板存储的相对路径（自[<code>savedir</code>]开始）（userhomepage_private.txt和userhomepage_public.txt）。示例：<code>./pages/user</code>或<code>../lib/plugins/userhomepage</code>。';
    $lang['templatepath'] = '3.0.4版的模板路径。如果该文件存在，它将用作新的私有命名空间起始页模板的默认源（若不希望则清除该路径）。';
    $lang['acl_all_templates'] = '@ALL分组对模板的权限（如果它们存储在<code>data/pages...</code>）';
    $lang['acl_all_templates_o_0'] = '无';
    $lang['acl_all_templates_o_1'] = '阅读(默认)';
    $lang['acl_all_templates_o_2'] = '编辑';
    $lang['acl_all_templates_o_noacl'] = '没有自动ACL';
    $lang['acl_user_templates'] = '@user分组对模板的权限（如果它们存储在<code>data/pages...</code>）';
    $lang['acl_user_templates_o_0'] = '无';
    $lang['acl_user_templates_o_1'] = '阅读(默认)';
    $lang['acl_user_templates_o_2'] = '编辑';
    $lang['acl_user_templates_o_noacl'] = '没有自动ACL';
    $lang['no_acl'] = '完全没有自动ACL设置，但您必须手动删除迄今为止创建的ACL。别忘了在模板上设置一些ACL。';
    $lang['redirection'] = '启用重定向（即使禁用，它仍会在创建页面时发生）。';
    $lang['action'] = '创建后第一次重定向到公用页（或私有命名空间起始页）时的操作。';
    $lang['action_o_edit'] = '编辑(默认)';
    $lang['action_o_show'] = '显示';
    $lang['userlink_replace'] = '启用[<code>Logged in as</ code>]interwiki链接替换，根据Userhomepage创建的页面（仅当<code>showuseras</ code>选项设置为interwiki链接时有效）。';
    $lang['userlink_classes'] = '以空格分隔的CSS类列表，用于[<code>Logged in as</code>] interwiki链接（默认<code>interwiki iw_user wikilink1</code>）。';
    $lang['userlink_fa'] = '使用 Fontawesome 图标代替图片 (Fontawesome 必须通过模板或插件安装) ?';
