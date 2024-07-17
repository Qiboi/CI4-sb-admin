<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kurikulum extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id_kurikulum'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'semester'           => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kode_matkul'        => [
                'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'nama_matkul'        => [
                'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'sks'                => [
                'type'           => 'INT',
				'constraint'     => 5,
			],
			'konversi'           => [
                'type'           => 'INT',
				'constraint'     => 5,
			],
			'unit'           => [
                'type'           => 'VARCHAR',
				'constraint'     => '30',
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
		$this->forge->addPrimaryKey('id_kurikulum');
		$this->forge->createTable('kurikulum');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kurikulum');
	}
}
