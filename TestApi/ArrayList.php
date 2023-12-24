<?php

class ArrayList
{
    static function InsertSort($list){

        for($i=0; $i<count($list); $i++){
            $val = $list[$i];
            $j = $i-1;
            while($j>=0 && $list[$j] > $val){
                $list[$j+1] = $list[$j];
                $j--;
            }
            $list[$j+1] = $val;
        }
        return $list;
    }


    static function QuickSort($list)
    {
        $size = count($list);
        if ($size <= 1) {
            return $list;
        }

        $tmp = $list[0];
        $left = array();
        $right = array();
        for ($i = 1; $i < $size; $i++) {
            if ($list[$i] < $tmp) {
                $left[] = $list[$i];
            } else {
                $right[] = $list[$i];
            }
        }

        return array_merge(self::QuickSort($left), array($tmp), self::QuickSort($right)); // on retourne le tableau left, la valeur de tmp et le tableau right
    }

}