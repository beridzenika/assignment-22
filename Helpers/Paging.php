<?php

namespace Helpers;

class Paging{
    public static function execute($cnt, $limit, $page, $link) {
        
        $data['page']  = $page;
        $data['limit'] = $limit;
        $data['cnt']   = $cnt;
        $data['link']  = $link;

        ob_start();
        include('views/base/components/paging.php');
        $returned = ob_get_contents();
        ob_end_clean();

        return  $returned;
    }
}