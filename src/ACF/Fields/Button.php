<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Button extends FieldsBuilder
{
    public function __construct(array $button_styles, string $default = 'btn-primary')
    {
        parent::__construct('button', ['label' => 'Button']);
        $this->addTab('Content')
            ->addRepeater('Buttons')
            ->addLink('Button')->setWidth('50')
            ->addSelect('Button Style', [
                'choices' => $button_styles,
            ])->setDefaultValue($default)->setWidth('25')
            ->addSelect('Button Size', [
                'choices' => [
                    'btn-sm' => 'Small',
                    'btn-md' => 'Normal',
                    'btn-lg' => 'Large',
                ],
            ])->setDefaultValue('btn-md')->setWidth('25')
            ->endRepeater()
        ;
    }
}