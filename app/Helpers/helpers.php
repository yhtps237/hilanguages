<?php

if (!function_exists('filter_url')) {
    function filter_url($sub_url, $base_url)
    {
        $sub_url = str_replace("/", "", $sub_url);
        $urls = [
            "about" => [
                "history",
                "mission-and-vision",
                "structure",
                "supervisory-board",
                "board-of-directors",
                "international-cooperation",
                "financial-statements",
                "annual-reports",
                "career",
            ],
            "credits" => [
                "banks",
                "credit-institutions",
                "credit-unions",
                "mkt",
            ],
            "projects" => [
                "business-projects",
            ],
            "legal-basis" => [
                "laws",
                "open_pdf",
                "decrees-and-orders",
                "decisions",
                "internal-rules",
            ],
            "media" => [
                "news",
                "announcements",
                "view-news",
                "view-announcements",
                "view-announcement",
                "video-gallery",
                "photo-gallery",
                "view-photo-gallery",
            ],
            "contact" => [
                "contact",
                "faq",
                "video-reception",
            ],
        ];

        $sub_urls = $urls[$base_url] ?? [];
        return in_array($sub_url, $sub_urls);
    }
}


if (!function_exists('slice_list')) {
    function slice_list($value, $start)
    {
        return array_slice($value, intval($start));
    }
}

if (!function_exists('get_month')) {
    function get_month($value)
    {
        $months = [
            1 => "Yanvar",
            2 => "Fevral",
            3 => "Mart",
            4 => "Aprel",
            5 => "May",
            6 => "İyun",
            7 => "İyul",
            8 => "Avqust",
            9 => "Sentyabr",
            10 => "Oktyabr",
            11 => "Noyabr",
            12 => "Dekabr",
        ];
        return $months[$value] ?? null;
    }
}

if (!function_exists('shorten_month')) {
    function shorten_month($value)
    {
        $months = [
            "Yanvar" => "YAN",
            "Fevral" => "FEV",
            "Mart" => "MRT",
            "Aprel" => "APR",
            "May" => "MAY",
            "İyun" => "İYN",
            "İyul" => "İYUL",
            "Avqust" => "AVQ",
            "Sentyabr" => "FEV",
            "Oktyabr" => "FEV",
            "Noyabr" => "FEV",
            "Dekabr" => "FEV",
        ];
        return $months[$value] ?? null;
    }
}

if (!function_exists('pre_process_counter')) {
    function pre_process_counter($value)
    {
        return str_pad($value, 2, '0', STR_PAD_LEFT);
    }
}

if (!function_exists('getLocalizedField')) {
    function getLocalizedField($model, $field)
    {
        $locale = app()->getLocale();

        return $model[$field . '_' . ($locale === 'az' ? 'az' : ($locale === 'ru' ? 'ru' : 'en'))] ?? null;
    }
}
