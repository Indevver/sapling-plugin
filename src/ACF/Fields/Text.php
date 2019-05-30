<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Text extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('text', ['label' => 'Text']);
        $this->addTab('Content')
            ->addWysiwyg('Content');
    }
}