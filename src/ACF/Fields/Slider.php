<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Slider extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('slider', ['label' => 'Slider']);
        $this->addTab('Content')
            ->addRepeater('Slides')
            ->addImage('Slide')
            ->endRepeater()
        ;
    }
}