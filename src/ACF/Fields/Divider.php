<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Divider extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('divider', ['label' => 'Divider']);
        $this->addTab('Content')
            ->addMessage('Divider', 'Divider')
        ;
    }
}