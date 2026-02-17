<?php
/**
 *
 * PostReaction. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026, sebo
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace sebo\postreact\migrations;

class install_data_2_3_1h extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\sebo\postreact\migrations\install_data_2_3'];
	}

	public function update_schema()
	{
		return [
			'add_columns' => [
				USERS_TABLE => [
					'user_postreact_notify_mode' => ['UINT:1', 0],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns' => [
				USERS_TABLE => [
					'user_postreact_notify_mode',
				],
			],
		];
	}
}
