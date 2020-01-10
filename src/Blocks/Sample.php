<?php
namespace Sapling\Plugin\Blocks;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Sample extends AbstractBlock
{

    public function getName(): string
    {
        return 'sample';
    }

    public function getTitle(): string
    {
        return __('Sample');
    }

    public function getDescription(): string
    {
        return __('Description');
    }

    public function getFields(): FieldsBuilder
    {
        $builder = new FieldsBuilder('sample');
        $builder
            ->addText('title')
        ;
        return $builder;
    }
}