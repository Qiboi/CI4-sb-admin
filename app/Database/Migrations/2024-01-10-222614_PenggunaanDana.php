<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PenggunaanDana extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id_penggunaan'      => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'jenis_penggunaan'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'biaya_penggunaan'   => [
                'type'           => 'INT',
				'constraint'     => 15,
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
		$this->forge->addPrimaryKey('id_penggunaan');
		$this->forge->createTable('penggunaan_dana');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('penggunaan_dana');
	}
}
