<?php

//PHP-2

$discipline = [
    "INFORMATICA" => [
        "C:\\Utenti\\Bob\\Documenti\\Informatica" => [
            "argomento" => "Programmazione PHP",
            "mese" => 3
        ]
    ],
    "SISTEMI" => [
        "C:\\Utenti\\Bob\\Documenti\\Sistemi" => [
            "argomento" => "DHCP",
            "mese" => 5
        ]
    ],
    "TPS" => [
        "C:\\Utenti\\Bob\\Documenti\\TPS" => [
            "argomento" => "Socket",
            "mese" => 4
        ]
    ]
];

// 1) Estrazione argomento e mese
function estraiArgomentoEMese($struttura, $disciplina, $percorso)
{
    if (isset($struttura[$disciplina][$percorso])) {
        return $struttura[$disciplina][$percorso];
    }
    return null;
}

// 2) Inserimento con controlli
function inserisciPercorso(&$struttura, $disciplina, $percorso, $argomento, $mese)
{

    $disciplineConsentite = ["INFORMATICA", "SISTEMI", "TPS"];

    if (!in_array($disciplina, $disciplineConsentite)) {
        return "Errore: disciplina non valida";
    }

    if (isset($struttura[$disciplina][$percorso])) {
        return "Errore: percorso già esistente";
    }

    if ($mese < 1 || $mese > 12) {
        return "Errore: mese non valido";
    }

    $struttura[$disciplina][$percorso] = [
        "argomento" => $argomento,
        "mese" => $mese
    ];

    return "Inserimento corretto";
}

$dati = estraiArgomentoEMese(
    $discipline,
    "TPS",
    "C:\\Utenti\\Bob\\Documenti\\TPS"
);

if ($dati !== null) {
    echo "Argomento: " . $dati["argomento"] . "<br>";
    echo "Mese: " . $dati["mese"] . "<br>";
}

echo inserisciPercorso(
    $discipline,
    "INFORMATICA",
    "C:\\Utenti\\Bob\\Desktop\\Nuovo",
    "Array e funzioni",
    6
);

echo "<br>";
print_r($discipline);
echo "<br>";
