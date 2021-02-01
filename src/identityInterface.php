<?php

namespace Soldy\retard;

interface IdentityInterface
{
    public function getId() : string;
    public function getParent() : string;
    public function setParent(string &$parent) : bool;
    public function getChilds() : array
    public function addChild(string &$child) : bool;
}
