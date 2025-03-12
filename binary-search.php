<?php
// with recursion
class search
{
    private $runtime = 0;

    public function binary_search($list, $search)
    {
        $this->runtime++;
        // sort the array
        sort($list);

        // find if it is in the list range
        if ($search > $list[count($list) - 1] || $search < $list[0]) {
            return "element not found";
        }

        // get the middle ele
        $mid_index = floor(count($list) / 2);
        $mid = $list[$mid_index];
        if ($search == $mid) {
            return "found and it is " . $mid . " and toke " . $this->runtime . " labs to be found";
        }
        if ($search > $mid) {
            return $this->binary_search(array_slice($list, $mid_index), $search);
        }

        if ($search < $mid) {
            return $this->binary_search(array_slice($list, 0, $mid_index), $search);
        }

        return "its not found";
    }
}
$list = [1, 2, 3, 4, 5, 6, 7];
$search = 5;

$search_obj = new search();
var_dump($search_obj->binary_search($list, $search));

?>
