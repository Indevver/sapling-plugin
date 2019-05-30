<?php
/**
 * Created by PhpStorm.
 * User: rpark
 * Date: 4/25/2019
 * Time: 4:36 PM
 */

namespace Sapling\Plugin\ACF\Tabs;


class Advanced
{
    public function addTab(&$builder)
    {
        $builder
            ->addTab('Advanced')
            ->addText('Admin Label')
            ->addText('ID')->setWidth('50')
            ->addText('Class(es)')->setWidth('50')
        ;
    }
}