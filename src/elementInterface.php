<?php

namespace Soldy\retard;

interface ElementInterface
{
    public function multi (
         string &$element = 'div',
         array  &$attributions = [],
         string &$inside = ''
    ) : string
    public function single (
         string &$element,
         array  &$attributions,
    ) : string

}


