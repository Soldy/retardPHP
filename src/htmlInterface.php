<?php

namespace Soldy\retard;

interface HtmlInterface
{
    public function addJs(string &$url) : bool;
    public function addCss(string &$url) : bool;
    public function addMeta(array &$meta) : bool;
    public function addToBody(string &$element) : bool;
    public function changeTitle(string &$element) : bool;
}
