<?php
/**
 * Created by PhpStorm.
 * User: rpark
 * Date: 4/25/2019
 * Time: 4:36 PM
 */

namespace Sapling\Plugin\ACF\Tabs;


class Heading
{

    public function addTab(&$builder)
    {
        $builder->addTab('Heading')
            ->addSelect('Heading Size', ['choices' => [
                'h1' => 'Heading 1',
                'h2' => 'Heading 2',
                'h3' => 'Heading 3',
                'h4' => 'Heading 4',
                'h5' => 'Heading 5',
                'h6' => 'Heading 6',
            ]])->setWidth('50')
            ->addText('Heading')->setWidth('50')
        ;
    }
}