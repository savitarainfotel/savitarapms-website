<?php defined('BASEPATH') OR exit('No direct script access allowed');

function my_crypt($string, $action = 'e' )
{
    $secret_key = md5(APP_NAME).'_key';
    $secret_iv = md5(APP_NAME).'_iv';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }

    return $output;
}

function re($array='')
{
    $CI =& get_instance();
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    exit;
}

function flashMsg($success,$succmsg,$failmsg,$redirect)
{
    $CI =& get_instance();
    if ( $success ){
        $CI->session->set_flashdata('show_toast', $succmsg);
    }else{
        $CI->session->set_flashdata('show_toast', $failmsg);
    }
    return redirect($redirect);
}

function e_id($id)
{
    return 41254 * $id;
}

function d_id($id)
{
    return $id / 41254;
}

function admin($uri='')
{
    return ADMIN.'/'.$uri;
}

if ( ! function_exists('check_ajax'))
{
    function check_ajax()
    {
        $CI =& get_instance();
        if (!$CI->input->is_ajax_request())
            die;
    }
}

if ( ! function_exists('script'))
{
    function script($url='', $type='application/javascript')
    {
        return "\n<script src=\"".base_url($url)."\" type=\"$type\"></script>\n";
    }
}

if ( ! function_exists('getAmount'))
{
    function getAmount($amount)
	{
        return $amount ? "₹ ".number_format($amount) : '';
	}
}

if ( ! function_exists('encr_password'))
{
    function encr_password($password)
    {
        $salt = bin2hex(random_bytes(32));
        $hashedPassword = password_hash($password . $salt, PASSWORD_BCRYPT, ['cost' => 12]);

        return ['salt' => $salt, 'hashedPassword' => $hashedPassword];
    }
}

if ( ! function_exists('responseMsg'))
{
    function responseMsg($success, $succmsg, $failmsg, $redirect = null, $validate = null)
    {
        $response = [
            'error'    => $success ? false : true,
            'message'  => $success ? $succmsg : $failmsg
        ];

        if($redirect) $response['redirect'] = $redirect;
        if($validate) $response['validate'] = $validate;

        die(json_encode($response));
    }
}

if ( ! function_exists('active_navigation'))
{
    function active_navigation($name, $pages, $parent = false)
    {
        return ((is_array($pages) && in_array($name, $pages)) || $pages === $name) ? ($parent ? 'menu-open' : 'active') : '';
    }
}

function the_excerpt($content, $length = 55) {
    // Strip HTML tags and shortcodes
    $content = strip_tags($content);
    
    // Split content into words
    $words = explode(' ', $content);
    
    // Check if the content length is greater than the desired length
    if (count($words) > $length) {
        // Get the excerpt of the desired length
        $excerpt = array_slice($words, 0, $length);
        
        // Convert the array back to a string and add ellipsis
        $excerpt = implode(' ', $excerpt) . '...';
    } else {
        // If the content is shorter than the desired length, return it as is
        $excerpt = $content;
    }
    
    return $excerpt;
}