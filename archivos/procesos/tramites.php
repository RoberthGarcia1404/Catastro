<?php
$tramites = [
    [
        "id" => 1,
        "nombre" => "Cambio de propietario o poseedor",
        "tipos" => [
            ["id" => 1, "nombre" => "Cambio de propietario", "documentos" => [
                ["nombre" => "Certificado de tradición y libertad", "requerido" => true],
                ["nombre" => "Escritura pública", "requerido" => true]
            ]],
            ["id" => 2, "nombre" => "Cambio de poseedor", "documentos" => [
                ["nombre" => "Certificado de tradición y libertad", "requerido" => true],
                ["nombre" => "Escritura pública", "requerido" => true]
            ]]
        ]
    ],
    [
        "id" => 2,
        "nombre" => "Segregación y agregación",
        "tipos" => [
            ["id" => 1, "nombre" => "Segregación", "documentos" => [
                ["nombre" => "Plano de segregación", "requerido" => true],
                ["nombre" => "Certificado de tradición y libertad", "requerido" => true]
            ]],
            ["id" => 2, "nombre" => "Agregación", "documentos" => [
                ["nombre" => "Plano de agregación", "requerido" => true],
                ["nombre" => "Certificado de tradición y libertad", "requerido" => true]
            ]]
        ]
    ],
    [
        "id" => 3,
        "nombre" => "Rectificaciones",
        "tipos" => [
            ["id" => 1, "nombre" => "Corrección en la inscripción de datos", "documentos" => [
                ["nombre" => "Certificado de tradición y libertad", "requerido" => true],
                ["nombre" => "Pruebas documentales", "requerido" => false] // Documento opcional
            ]]
        ]
    ]
];

header('Content-Type: application/json');
echo json_encode($tramites);
?>
