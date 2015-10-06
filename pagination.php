<?php
function pagination($number)
 {
        $pages = "1,2,3,4,5,6"; // pages' number
        $position = strpos($pages, (string)$number);
		if($position == 0)
          return array('prev' => 'null', 'next' => $pages[$position]+1);
        else if($position == (strlen($pages) - 1))
          return array('prev' => $pages[$position - 2], 'next' => 'null');
        else
             return array('prev' => $pages[$position - 2], 'next' => $pages[$position + 2]);       
}

?>