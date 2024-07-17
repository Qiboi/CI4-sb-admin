<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penelitian extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id_penelitian'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'dosen_penelitian'        => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'mahasiswa_penelitian'       => [
                'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'judul_penelitian'       => [
                'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tahun_penelitian'       => [
                'type'           => 'INT',
				'constraint'     => 5,
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
		$this->forge->addPrimaryKey('id_penelitian');
		$this->forge->createTable('penelitian');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('penelitian');
	}
}
