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
'list' => 'CodeIgniter\Validation\Views\list',
'single' => 'CodeIgniter\Validation\Views\single',
];
//--------------------------------------------------------------------
// Rules
//--------------------------------------------------------------------

public $buah = [
    'namabuah' => [
    'rules' => 'required',
    ],
    'tutorialbuah' => [
    'rules' => 'required',
    ],
    'manfaatbuah' => [
    'rules' => 'required',
    ],
];

public $update_buah = [
    'namabuah' => [
    'rules' => 'required',
    ],
    'tutorialbuah' => [
    'rules' => 'required',
    ],
    'manfaatbuah' => [
    'rules' => 'required',
    ],
];

public $sayur = [
    'namasayur' => [
    'rules' => 'required',
    ],
    'tutorialsayur' => [
    'rules' => 'required',
    ],
    'manfaatsayur' => [
    'rules' => 'required',
    ],
];

public $update_sayur = [
    'namasayur' => [
    'rules' => 'required',
    ],
    'tutorialsayur' => [
    'rules' => 'required',
    ],
    'manfaatsayur' => [
    'rules' => 'required',
    ],
];

public $tanamanlain = [
    'namatanamanlain' => [
    'rules' => 'required',
    ],
    'tutorialtanamanlain' => [
    'rules' => 'required',
    ],
    'manfaattanamanlain' => [
    'rules' => 'required',
    ],
];

public $update_tanamanlain = [
    'namabuah' => [
    'rules' => 'required',
    ],
    'tutorialbuah' => [
    'rules' => 'required',
    ],
    'manfaatbuah' => [
    'rules' => 'required',
    ],
];


public $register = [
    'username' => [
    'rules' => 'required|min_length[3]|is_unique[users.username]',
    ],
    'email' => [
    'rules' => 'required',
    ],
    'alamat' => [
    'rules' => 'required',
    ],
    'password' => [
    'rules' => 'required',
    ],
];

public $update_user = [
    'username' => [
    'rules' => 'required|min_length[3]|is_unique[users.username]',
    ],
    'email' => [
    'rules' => 'required',
    ],
    'alamat' => [
    'rules' => 'required',
    ],
    'password' => [
    'rules' => 'required',
    ],
    ];
}