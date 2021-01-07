<?php

namespace Soldy\retard;

interface formInterface
{
    public function setForm(
        string &$method,
        string &$action,
    ) : bool
    public function addText (
         string &$title,
         string &$name,
         string &$value = '',
    ) : bool
    public function addSelect (
         string &$title,
         string &$name,
         array &$options,
         string &$value =''
    ) : bool
    public function addHiden(
         string &$title,
    ) : bool

    public function addPassword (
         string &$title,
         string &$name,
    ) : bool
    public function addSubmit(
         string &$title,
    ) : bool
    public function render () : string
}



