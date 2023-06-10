<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Book extends Migration
{
    // Pembuatan tabel buku.
    public function up()
    {
        $field = 
        [
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'penulis' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'penerbit' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'tahun_terbit' => [
                'type'       => 'YEAR',
            ]

        ];
        $this->forge->addField($field);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku', true);
    }

    public function down()
    {
        $this->forge->dropTable('buku', true);
    }
}