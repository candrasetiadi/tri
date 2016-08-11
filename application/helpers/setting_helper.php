<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getGlobal')) {
    function getGlobal()
    {
        $CI =& get_instance();
        $global = $CI->db->get('setting')->row_array();
        $return = array(
            'title' => $global['global_title'],
            'footer' => $global['footer'],
            'twitter' => array(
                'url' => $global['twitter_url'],
                'new_tab' => $global['twitter_url_new'],
            ),
            'facebook' => array(
                'url' => $global['facebook_url'],
                'new_tab' => $global['facebook_url_new'],
            ),
            'instagram' => array(
                'url' => $global['instagram_url'],
                'new_tab' => $global['instagram_url_new'],
            )
        );

        return $return;
    }
}

if (!function_exists('getOgTitle')) {
    function getOgTitle()
    {
        $CI =& get_instance();
        $global = $CI->db->get('setting')->row_array();
        return $global['def_og_title'];
    }
}

if (!function_exists('getOgDescription')) {
    function getOgDescription()
    {
        $CI =& get_instance();
        $global = $CI->db->get('setting')->row_array();
        return $global['def_og_description'];
    }
}

if (!function_exists('getOgImage')) {
    function getOgImage()
    {
        $CI =& get_instance();
        $global = $CI->db->get('setting')->row_array();
        return base_url($global['def_og_image']);
    }
}

if (!function_exists('textToSlug')) {
    function textToSlug($text)
    {
        $slug = preg_replace('/[^a-zA-Z0-9_\']/', '-', $text);
        $output2 = $slug;
        do {
            $slug = $output2;
            $output2 = str_replace("--", "-", $slug);
        } while ($output2 != $slug);
        $output2 = trim($output2);
        $output2 = ltrim($output2, "-");
        $output2 = rtrim($output2, "-");
        $output2 = strtolower($output2);
        return $output2;
    }
}

if (!function_exists('isLogin')) {
    function isLogin()
    {
        $CI =& get_instance();
        $login = $CI->session->userdata('logedin');

        if (!$login) {
            redirect('dapur/login');
        }
    }
}

if (!function_exists('notLogin')) {
    function notLogin()
    {
        $CI =& get_instance();
        $login = $CI->session->userdata('logedin');

        if ($login) {
            redirect('dapur');
        }
    }
}