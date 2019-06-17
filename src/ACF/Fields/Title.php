<?php
namespace Sapling\Plugin\ACF\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Title extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('title', ['label' => 'Title']);
        $this->addTab('Content')
            ->addSelect('Size', ['choices' => [
                'h1' => 'Heading 1',
                'h2' => 'Heading 2',
                'h3' => 'Heading 3',
                'h4' => 'Heading 4',
                'h5' => 'Heading 5',
                'h6' => 'Heading 6',
            ]])->setWidth('25')
            ->addTrueFalse('Is Subtitle')->setWidth('25')
            ->addText('Heading')->setWidth('50')
        ;
    }
}