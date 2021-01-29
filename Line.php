<?php
namespace efimova;
Class Line
{
    public function l_solve($a, $b)
    {
        if ($a == 0) {
            return NULL;
        }
        return $this->X=array(-($b / $a));
    }

    protected $X;
}

?>