<?php
$datos = [
    [
        'Nro' => 1,
        'Apellidos' => 'Juan Perez',

        'Edad' => 25,
        'Materia' => 'SIS-256',
        'Not' => 83
    ],
    [
        'Nro' => 2,
        'Apellidos' => 'Ricardo Luna',
        'Edad' => 30,
        'Materia' => 'SIS-258',
        'Not' => 70
    ],
    [
        'Nro' => 3,
        'Apellidos' => 'Teresa Tomasa',

        'Edad' => 26,
        'Materia' => 'SIS-256',
        'Not' => 84
    ],
    [
        'Nro' => 4,
        'Apellidos' => 'Favian Umbre',
        'Edad' => 24,
        'Materia' => 'SIS-258',
        'Not' => 70
    ]
];

header('Content-Type: application/json');
echo json_encode($datos);
?>
