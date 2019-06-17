<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Image extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('image', ['label' => 'Image']);
        $this->addTab('Content')
            ->addField('Image Alignment', 'button_group', [
                'choices' => [
                    "text-left" => "<span class=\"dashicons dashicons-align-left\"></span>",
                    "text-centered" => "<span class=\"dashicons dashicons-align-center\"></span>",
                    "text-right" => "<span class=\"dashicons dashicons-align-right\"></span>",
                ]
            ])->setWidth('50')
            ->addTrueFalse('Full Width')->setWidth('50')->setDefaultValue(true)
            ->addImage('Image')
        ;
    }
}