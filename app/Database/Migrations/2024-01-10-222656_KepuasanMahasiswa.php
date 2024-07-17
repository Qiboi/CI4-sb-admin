<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KepuasanMahasiswa extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id_kepuasan'        => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'aspek_kepuasan'     => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'sangat_baik'        => [
                'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
			'baik'               => [
                'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
			'cukup'              => [
                'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
			'kurang'             => [
                'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
			'rencana_kepuasan'   => [
                'type'           => 'VARCHAR',
				'constraint'     => '15',
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
		$this->forge->addPrimaryKey('id_kepuasan');
		$this->forge->createTable('kepuasan_mahasiswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kepuasan_mahasiswa');
	}
}
