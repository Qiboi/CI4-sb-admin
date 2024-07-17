<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LuaranPenelitian extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id_luaran'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_luaran'        => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tahun_luaran'       => [
                'type'           => 'INT',
				'constraint'     => 11,
			],
            'keterangan_luaran'  => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_luaran');
		$this->forge->createTable('luaran_penelitian');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('luaran_penelitian');
	}
}
