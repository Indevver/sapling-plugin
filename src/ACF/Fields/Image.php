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
                    "alignleft" => "<span class=\"dashicons dashicons-align-left\"></span>",
                    "aligncentered" => "<span class=\"dashicons dashicons-align-center\"></span>",
                    "alignright" => "<span class=\"dashicons dashicons-align-right\"></span>",
                ]
            ])->setWidth('50')
            ->addTrueFalse('Full Width')->setWidth('50')->setDefaultValue(true)
            ->addImage('Image')
        ;
    }
}
