<?php
namespace Fuel\Migrations;
/**
 * @link https://fuelphp.com/docs/general/migrations.html
 */
class Example
{

    function up()
    {
        \DBUtil::create_table('posts', array(
            'id' => array('type' => 'int', 'constraint' => 5,'auto_increment' => true),
            'title' => array('type' => 'varchar', 'constraint' => 100),
            'body' => array('type' => 'text'),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('posts');
    }
}