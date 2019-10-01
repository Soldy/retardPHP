<?php 

class retardElementMaker {
    private $separetor = '"';
    private function attributionFull($attr, $val){
        return ' '.$attr. '='. $this->separetor. $this->attributionValue($val). $this->separetor;
    }
    private function attributionValue($val){
        $out = '';
        if (is_array($val))
            for ($i = 0 ; count($val)>$i;$i++){
                if ($i>0) $out.= ' ';
                    $out.= $val[$i];
            }
        else 
           $out = $val;
        return $out;
    }
    public function title($title){
        return $this->m(
            'div', 
            ['class'=>'title'],
            $this->m(
                'h1',
                [],
                __($title)
            )
        );
    }
    public function subTitle($title){
        return $this->m(
            'div', 
            ['class'=>'title'],
            $this->m(
                'h3',
                [],
                __($title)
            )
        );
    }
    public function div($attributions=[], $inside=''){
        $this->d($attributions, $inside) 
    }
    public function d($attributions=[], $inside=''){
        $this->m('div', $attributions, $inside);
    }
    public function make($element, $attributions=[], $inside = ''){
        $this->m($element, $attributions, $inside);
    }
    public function m ($element, $attributions=[], $inside = ''){
        $out = '<'.$element;
        foreach ($attributions as $attr => $val)
            $out.= $this->attributionFull($attr, $val);
        return $out. '>'. $inside.'</'. $element. '>';
    }
    public function single ($element, $attributions){
       return $this-s($element, $attributions, $inside);
    }
    public function s ($element, $attributions){
        $out = '<'.$element;
        foreach ($attributions as $attr => $val)
            $out.= $this->attributionFull($attr, $val);
        return $out. '/>';
    }
}
