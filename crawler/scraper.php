<?php
    require("simple_html_dom.php");

    function scrape_site($link, $selector) {
        $html = file_get_html($link);
        $search_results = $html->find($selector);
        $items = array();

        foreach($search_results as $result) {
            $item['title'] = $result->find('a', 0)->plaintext;
            $item['link'] = $result->find('cite', 0)->plaintext;
            if (count($items) < 5) {
                $items[] = $item;
            }
        }
        return $items;
    }

    $items = scrape_site('https://www.bing.com/search?q=software+engineer', '.b_algo');
    
    // print_r($items);
?>