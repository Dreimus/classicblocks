<?php

namespace ClassicBlocks\Block\Custom;

use ClassicBlocks\Block\AbstractBlock;
use Context;

final class ClassicColumn extends AbstractBlock
{
    /**
     * @return array
     */
    public static function getContent(): array
    {
        $translator = Context::getContext()->getTranslator();

        return [
            'name' => $translator->trans('Column'),
            'description' => $translator->trans('Display columns where you want'),
            'code' => 'classic_column',
            'tab' => 'general',
            'icon' => 'PhotoIcon',
            'need_reload' => true,
            'templates' => [
                'default' => 'module:classicblocks/views/templates/blocks/ps_column.tpl'
            ],
            'structure' => [
                'fields' => [
                    'title' => [
                        'type' => 'text',
                        'label' => 'Title image',
                        'default' => 'Column title'
                    ],
                    'menu_columns' => [
                        'type' => 'components',
                        'component_name' => 'columns',
                        'label' => 'Columns ',
                        'repeatable' => true,
                    ],
                ],
            ],
        ];
    }
}
