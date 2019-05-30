<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends FieldsBuilder
{
    public function __construct(array $button_styles, string $default = 'btn-primary')
    {
        parent::__construct('hero', ['label' => 'Hero']);
        $this->addTab('Content')
            ->addImage('Background')
            ->addText('Heading')->setWidth('50')
            ->addRepeater('Call To Action')
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