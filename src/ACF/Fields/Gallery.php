<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Gallery extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('gallery', ['label' => 'Gallery']);
        $this->addTab('Content')
            ->addRepeater('Images')
            ->addImage('Image')
            ->endRepeater()
        ;
    }
}