<?php

declare(strict_types=1);

namespace Sectors;

use Segments\Segments;
use Subsectors\Subsectors;

/**
 * Sectors B3
 *
 * @copyright (c) 2019.
 * @link <https://github.com/kadudutra/sectors-b3.git>
 * @author Kadu Dutra <kadudutra7@gmail.com>
 */
class Sectors
{
    const SECTORS = [
        'Bens Industriais' => [
            'Subsectors' => Subsectors::BENS_INDUSTRIAIS,
            'Segments' => Segments::BENS_INDUSTRIAIS
        ],
        'Comunicações' => [
            'Subsectors' => Subsectors::COMUNICACOES,
            'Segments' => Segments::COMUNICACOES
        ],
        'Consumo Cíclico' => [
            'Subsectors' => Subsectors::CONSUMO_CICLICO,
            'Segments' => Segments::CONSUMO_CICLICO
        ],
        'Consumo não Cíclico' => [
            'Subsectors' => Subsectors::CONSUMO_NAO_CICLICO,
            'Segments' => Segments::CONSUMO_NAO_CICLICO
        ],
        'Financeiro' => [
            'Subsectors' => Subsectors::FINANCEIRO,
            'Segments' => Segments::FINANCEIRO
        ],
        'Materiais Básicos' => [
            'Subsectors' => Subsectors::MATERIAIS_BASICOS,
            'Segments' => Segments::MATERIAIS_BASICOS
        ],
        'Outros' => [
            'Subsectors' => ['Outros'],
            'Segments' => ['Outros']
        ],
        'Petróleo. Gás e Biocombustíveis' => [
            'Subsectors' => Subsectors::PETROLEO_GAS_BIOCOMBUSTIVEIS,
            'Segments' => Segments::PETROLEO_GAS_BIOCOMBUSTIVEIS
        ],
        'Saúde' => [
            'Subsectors' => Subsectors::SAUDE,
            'Segments' => Segments::SAUDE
        ],
        'Tecnologia da Informação' => [
            'Subsectors' => Subsectors::TECNOLOGIA_DA_INFORMACAO,
            'Segments' => Segments::TECNOLOGIA_DA_INFORMACAO
        ],
        'Utilidade Pública' => [
            'Subsectors' => Subsectors::UTILIDADE_PUBLICA,
            'Segments' => Segments::UTILIDADE_PUBLICA
        ]
    ];
}
