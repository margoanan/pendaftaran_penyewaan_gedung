<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
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
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $penyakit = [
        'kode_penyakit' => 'required|min_length[3]|max_length[10]',
        'nama_penyakit' => 'required|min_length[3]|max_length[100]',
        'deskripsi_penyakit' => 'required|min_length[10]',
        'solusi_penyakit' => 'required|min_length[10]'
    ];
    
    public $penyakit_errors = [
        'kode_penyakit' => [
            'required' => 'Kode penyakit wajib diisi.',
            'min_length' => 'Kode penyakit minimal terdiri dari 3 karakter.',
            'max_length' => 'Kode penyakit maksimal terdiri dari 10 karakter.'
        ],
        'nama_penyakit' => [
            'required' => 'Nama penyakit wajib diisi.',
            'min_length' => 'Nama penyakit minimal terdiri dari 3 karakter.',
            'max_length' => 'Nama penyakit maksimal terdiri dari 100 karakter.'
        ],
        'deskripsi_penyakit' => [
            'required' => 'Deskripsi penyakit wajib diisi.',
            'min_length' => 'Deskripsi penyakit minimal terdiri dari 10 karakter.'
        ],
        'solusi_penyakit' => [
            'required' => 'Solusi penyakit wajib diisi.',
            'min_length' => 'Solusi penyakit minimal terdiri dari 10 karakter.'
        ]
    ];
    

	public $authlogin = [
        'email' => 'required|valid_email',
        'password' => 'required'
    ];

    public $authlogin_errors = [
        'email' => [
            'required' => 'Email wajib diisi.',
            'valid_email' => 'Format email tidak valid.'
        ],
        'password' => [
            'required' => 'Password wajib diisi.'
        ]
    ];

	public $authregister = [
        'email' => 'required|valid_email|is_unique[users.email]',
        'username' => 'required|alpha_numeric|is_unique[users.username]|min_length[8]|max_length[35]',
        'name' => 'required|alpha_numeric_space|min_length[3]|max_length[35]',
        'password' => 'required|string|min_length[8]|max_length[35]',
        'confirm_password' => 'required|string|matches[password]|min_length[8]|max_length[35]',
    ];

	public $authregister_errors = [
        'email' => [
            'required' => 'Email wajib diisi.',
            'valid_email' => 'Format email tidak valid.',
            'is_unique' => 'Email sudah terdaftar.'
        ],
        'username' => [
            'required' => 'Username wajib diisi.',
            'alpha_numeric' => 'Username hanya boleh berisi huruf dan angka.',
            'is_unique' => 'Username sudah terdaftar.',
            'min_length' => 'Username minimal 8 karakter.',
            'max_length' => 'Username maksimal 35 karakter.'
        ],
        'name' => [
            'required' => 'Nama wajib diisi.',
            'alpha_numeric_space' => 'Nama hanya boleh berisi huruf, angka, dan spasi.',
            'min_length' => 'Nama minimal 3 karakter.',
            'max_length' => 'Nama maksimal 35 karakter.'
        ],
        'password' => [
            'required' => 'Password wajib diisi.',
            'string' => 'Password hanya boleh berisi huruf, angka, spasi, dan karakter lain.',
            'min_length' => 'Password minimal 8 karakter.',
            'max_length' => 'Password maksimal 35 karakter.'
        ],
        'confirm_password' => [
            'required' => 'Konfirmasi password wajib diisi.',
            'string' => 'Konfirmasi password hanya boleh berisi huruf, angka, spasi, dan karakter lain.',
            'matches' => 'Konfirmasi password tidak sesuai dengan password.',
            'min_length' => 'Konfirmasi password minimal 8 karakter.',
            'max_length' => 'Konfirmasi password maksimal 35 karakter.'
        ]
    ];
    



	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
