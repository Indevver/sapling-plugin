<?php
/**
 * Created by PhpStorm.
 * User: rpark
 * Date: 4/25/2019
 * Time: 4:36 PM
 */

namespace Sapling\Plugin\ACF\Tabs;


class Spacing
{
    public function addTab(&$builder)
    {
        $builder
            ->addTab('Spacing')
            ->addTrueFalse('Vertical Align Center')->setWidth(50)
            ->addTrueFalse('Full Width')->setWidth(25)
            ->addText('Max Width')->setWidth(25)
            ->addSelect('Margin Top', ['choices' => [
                '' => 'Default',
                'mt-none' => 'None',
                'mt-small' => 'Small',
                'mt-medium' => 'Medium',
                'mt-large' => 'Large',
            ]])->setWidth(25)
            ->addSelect('Margin Right', ['choices' => [
                '' => 'Default',
                'mr-none' => 'None',
                'mr-small' => 'Small',
                'mr-medium' => 'Medium',
                'mr-large' => 'Large',
                'mr-auto' => 'None',
            ]])->setWidth(25)
            ->addSelect('Margin Bottom', ['choices' => [
                '' => 'Default',
                'mb-none' => 'None',
                'mb-small' => 'Small',
                'mb-medium' => 'Medium',
                'mb-large' => 'Large',
            ]])->setWidth(25)
            ->addSelect('Margin Left', ['choices' => [
                '' => 'Default',
                'ml-none' => 'None',
                'ml-small' => 'Small',
                'ml-medium' => 'Medium',
                'ml-large' => 'Large',
                'ml-auto' => 'None',
            ]])->setWidth(25)
            ->addSelect('Padding Top', ['choices' => [
                '' => 'Default',
                'pt-none' => 'None',
                'pt-small' => 'Small',
                'pt-medium' => 'Medium',
                'pt-large' => 'Large',
            ]])->setWidth(25)
            ->addSelect('Padding Right', ['choices' => [
                '' => 'Default',
                'pr-none' => 'None',
                'pr-small' => 'Small',
                'pr-medium' => 'Medium',
                'pr-large' => 'Large',
            ]])->setWidth(25)
            ->addSelect('Padding Bottom', ['choices' => [
                '' => 'Default',
                'pb-none' => 'None',
                'pb-small' => 'Small',
                'pb-medium' => 'Medium',
                'pb-large' => 'Large',
            ]])->setWidth(25)
            ->addSelect('Padding Left', ['choices' => [
                '' => 'Default',
                'pl-none' => 'None',
                'pl-small' => 'Small',
                'pl-medium' => 'Medium',
                'pl-large' => 'Large',
            ]])->setWidth(25)
        ;
    }
}