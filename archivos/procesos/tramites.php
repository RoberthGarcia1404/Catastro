<?php
$tramites = [
    [
        "id" => 1,
        "nombre" => "Cambio de propietario o poseedor",
        "tipos" => [
            ["id" => 1, "nombre" => "Cambio de propietario", "documentos" => ["Certificado de tradición y libertad", "Escritura pública"]],
            ["id" => 2, "nombre" => "Cambio de poseedor", "documentos" => ["Certificado de tradición y libertad", "Escritura pública"]]
        ]
    ],
    [
        "id" => 2,
        "nombre" => "Segregación y agregación",
        "tipos" => [
            ["id" => 1, "nombre" => "Segregación", "documentos" => ["Plano de segregación", "Certificado de tradición y libertad"]],
            ["id" => 2, "nombre" => "Agregación", "documentos" => ["Plano de agregación", "Certificado de tradición y libertad"]]
        ]
    ],
    [
        "id" => 3,
        "nombre" => "Rectificaciones",
        "tipos" => [
            ["id" => 1, "nombre" => "Corrección en la inscripción de datos", "documentos" => ["Certificado de tradición y libertad", "Pruebas documentales"]]
        ]
    ]
];

header('Content-Type: application/json');
echo json_encode($tramites);
