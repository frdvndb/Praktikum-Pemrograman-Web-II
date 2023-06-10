<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // Aturan Pengisian Data.

    // Aturan Pengisian Buku.
    public array $aturanBuku = [
        'judul' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Judul harus diisi dan berupa string.',
                'string' => 'Judul harus berupa string.'
            ],
        ],
        'penulis' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Penulis harus diisi dan berupa string.',
                'string' => 'Penulis harus berupa string.'
            ],
        ],
        'penerbit' => [
            'rules' => 'required|string',
            'errors' => [
                'required' => 'Penerbit harus diisi dan berupa string.',
                'string' => 'Penerbit harus berupa string.'
            ],
        ],
        'tahun_terbit' => [
            'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
            'errors' => [
                'required' => 'Tahun terbit harus diisi dan berupa angka, angka harus lebih besar dari 1800 dan lebih kecil dari 2024.',
                'integer' => 'Tahun terbit harus berupa angka dan bilangan bulat.',
                'greater_than' => 'Tahun terbit harus lebih besar dari 1800 dan lebih kecil dari 2024.',
                'less_than' => 'Tahun terbit harus lebih besar dari 1800 dan lebih kecil dari 2024.'
            ],
        ],
    ];

    // Aturan Pengisian Login.
    public array $aturanLogin = [
        'email' => [
            'rules' => 'required|max_length[150]',
            'errors' => [
                'required' => 'Email harus diisi dan berupa email.',
                'max_length' => 'Email tidak boleh melebihi 150 karakter.'
            ],
        ],
        'password' => [
            'rules' => 'required|max_length[150]',
            'errors' => [
                'required' => 'Password harus diisi.',
                'max_length' => 'Password tidak boleh melebihi 150 karakter.'
            ],
        ],
    ];

    // Aturan Pengisian Register.
    public array $aturanRegister = [
        'email' => [
            'rules' => 'required|max_length[150]',
            'errors' => [
                'required' => 'Email harus diisi dan berupa email.',
                'max_length' => 'Email tidak boleh melebihi 150 karakter.'
            ],
        ],
        'password' => [
            'rules' => 'required|max_length[150]',
            'errors' => [
                'required' => 'Password harus diisi.',
                'max_length' => 'Password tidak boleh melebihi 150 karakter.'
            ],
        ],
        'username' => [
            'rules' => 'required|max_length[150]',
            'errors' => [
                'required' => 'Username harus diisi.',
                'max_length' => 'Username tidak boleh melebihi 150 karakter.'
            ],
        ],
    ];
}