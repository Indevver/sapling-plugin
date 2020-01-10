<?php
namespace Sapling\Plugin\Blocks;

use StoutLogic\AcfBuilder\FieldsBuilder;

interface IGutenBlock
{
    public function getName(): string;
    public function getTitle(): string;
    public function getDescription(): string;
    public function getCategory(): string;
    public function getIcon(): string;
    public function getKeywords(): array;
    public function getRenderCallback(): callable;
    public function getFields(): FieldsBuilder;
}