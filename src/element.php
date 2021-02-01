<?php

namespace Soldy\retard;

use Soldy\retard\ElementInterface;

class Element implements ElementInterface{
    private $separetor = '"'; // please do not extend to psr12
    private function attributionsFull(array &$attributions) :string{
        $out = '';
        foreach ($attributions as $attr => $val){
            $out.= (
                ' '.
                $att.
                '='.
                $this->attributionValue($val)
            );
        }
        return ($out);
    }
    private function attributionValue(array &$val) :string{
        $out = $this->separetor;
        $out.= $val[0];
        for ($i = 1 ; count($val)>$i;$i++){
             $out.= ' '.$val[$i];
        }
        $out .= $this->separetor;
        return $out;
    }
    public function multi(
        string &$element = 'div',
        array  &$attributions = [],
        string &$inside = ''
    ) :string{
        return ( 
            '<'.
            $element.
            $this->attributionFull($attributions).
            '>'.
            $inside.
            '</'. 
            $element. 
            '>'
        );

    }
    public function single(
        string &$element = 'div',
        array  &$attribution = []
    ) :string{
        return (
            '<'.
            $element.
            $this->attributionFull($attributions).
            '/>'
        );
    }
}

