<?php
/**
 * Here we create the demo table with different datatypes to use in TbJsonGridView
 *
 * @package migrations
 */
class m130107_170612_add_playground_for_json_gridview extends CDbMigration
{

	public function up()
	{

		$this->createTable(
			'json_gridview_demo',
			array(
				'id' => 'pk',
				'textfield' => 'string',
				'numberfield' => 'int',
				'boolfield' => 'boolean',
			),
			'ENGINE=InnoDB'
		);

	}

	public function down()
	{

		$this->dropTable('json_gridview_demo');

	}

}

