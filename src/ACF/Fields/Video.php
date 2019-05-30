<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Video extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('video', ['label' => 'Video']);
        $this->addTab('Content')
            ->addOembed('video')
        ;
    }
}