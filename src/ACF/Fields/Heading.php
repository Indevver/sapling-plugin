<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Heading extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('heading', ['label' => 'Heading']);
        $this->addTab('Content')
            ->addSelect('Size', ['choices' => [
                'h1' => 'Heading 1',
                'h2' => 'Heading 2',
            ]])->setWidth('50')
            ->addText('Heading')->setWidth('50')
        ;
    }
}