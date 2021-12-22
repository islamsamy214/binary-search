<?php
class Search{
    private $operations = 1;
    
    function binarySearch($array, $niddle){
        $this->operations++;

        sort($array);
        $low = 0;
        $high = count($array)-1;
        if ($low <= $high) {
            $mid = ceil(($low + $high)/2);
            $guess = $array[$mid];
            if($guess == $niddle){
                return 'found and it did a '. $this->operations .' operations';
            }else if ($guess < $niddle){
                $array = array_slice($array, $mid, $high);
                return $this->binarySearch($array,$niddle);
            }else if ($guess > $niddle){
                $array = array_slice($array,$low,$mid);
                return $this->binarySearch($array,$niddle);
            }
        }

        return 'it doesn\'t exist and it did '. $this->operations .' operations';
    }

}

$arr = [11,55,22,5,6,78,1];
$search = new Search();
echo $search->binarySearch($arr,22);

?>