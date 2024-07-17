<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IntegrasiKegiatan extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id_integrasi'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul_integrasi'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'dosen_integrasi'    => [
                'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'matkul_integrasi'   => [
                'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'tahun_integrasi'    => [
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
		$this->forge->addPrimaryKey('id_integrasi');
		$this->forge->createTable('integrasi_kegiatan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('integrasi_kegiatan');
	}
}
