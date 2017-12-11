<?php

/* 
 * Customer configuration (config.php)
 *
 * - Use this file to override $config settings for this customer. You can
 *   override ANY setting here so be specific and be careful!
 *
 * - The default lines below HIDE all webshops by default. Comment out or 
 *   remove the corresponding webshop line for that webshop to be shown.
 */

// Hide Monitor webshop
$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;

// Hide workflow
$config['vcmp']['pages']['home']['content']['workflow'] = null;



// Fix Upload path


$config['custom_upload_path'] = '/store/brandeasy/customers/dk/'.$_SESSION['CUSTOMER_NAME'].'/_INBOX';


// Fix Mediabank path

$design_studio_url = 'http://mediabank-brandeasy.brandfactory.se/mediabank-brandeasy/startup.php';
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/brandeasy/customers/dk/'.$_SESSION['CUSTOMER_NAME'].'/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/brandeasy/customers/dk/'.$_SESSION['CUSTOMER_NAME'].'/_INBOX'.
                            '%26site=brandeasy';



$config['integrations']['mediabank'] = array(
        'name' => '',
        'iframe_url' => $design_studio_url,
        'queries' => array(
            'credentials' => true,
            'request_url' => $mediabank_request_url,
        ),
        'iframe_resizer' => false,
        'container' => false,
        'class' => 'iframe-full',
    );



