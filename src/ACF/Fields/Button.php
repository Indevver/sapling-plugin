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
            ->addField('Button Alignment', 'button_group', [
                'choices' => [
                    "is-left" => "<span class=\"dashicons dashicons-editor-alignleft\"></span>",
                    "is-centered" => "<span class=\"dashicons dashicons-editor-aligncenter\"></span>",
                    "is-right" => "<span class=\"dashicons dashicons-editor-alignright\"></span>",
                ]
            ])->setDefaultValue('is-left')->setWidth('33')
            ->addTrueFalse('Remove Spacing')->setWidth('33')
            ->addSelect('Button Size', [
                'choices' => [
                    'are-small' => 'Small',
                    'are-medium' => 'Normal',
                    'are-large' => 'Large',
                ],
            ])->setDefaultValue('are-medium')->setWidth('33')
            ->addRepeater('Buttons')
                ->addLink('Button')->setWidth('50')
                ->addSelect('Button Color', [
                    'choices' => $button_styles,
                ])->setDefaultValue($default)->setWidth('50')
            ->endRepeater()
        ;
    }
}