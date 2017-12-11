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

// Home page
$config['vcmp']['pages']['home'] = array(

    // Page settings
    'read'  => '', // Not in use if content is array
    'write' => '', // Not in use if content is array
    'class' => '',
    
    // Page content
    'content' => array(

        /*
         * PRIMARY VCMP ELEMENTS
         */

        // General welcome text
        'welcome' => array(
            
            'read'      => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup',
		),
            // 'write'     => array(),
            'content'   => 'welcome',
            'class'     => 'area-welcome span4',
            'type'      => 'primary'
        ),


        // Mediabank
        'mediabank' => array(
            'title'         => $ms2_language['integration_mediabank'],
            'description'   => 'Bilder, dokument och andra filer.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup'
            ),
            // 'write'      => array(),
            'icon'          => '',
            'content'       => 'mediabank',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=mediabank&releasetmpl=true',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'mediabank span8',
            'type'          => 'primary'
        ),

        // Navision Webshop (dk)
	'nav' => array(
            'title'         =>  $ms2_language['integration_nav'],
            'description'   => 'Beställ trycksaker och andra produkter.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup'),
            // 'write'         => array(),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=nav',
            // 'link_text'     => 'Ej tillgänglig',
            // 'disabled'      => true,
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'webshop span8',
            'type'          => 'primary'
        ),


        // Uploader
        'upload' => array(

            'title'         => $ms2_language['integration_upload'],
            'description'   => 'Ladda upp filer till Mediabanken.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
            ),
            // 'write'         => array(),
            'icon'          => '',
            'content'       => 'upload',
            'link'          => '/PORTAL/UPLOAD.php?releasetmpl=true&page=upload',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'upload span8',
            'type'          => 'primary'
        ),

    ),

);


// Hide Monitor webshop
$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide NAV webshop
//$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;

// Hide Workflow
$config['vcmp']['pages']['home']['content']['workflow'] = null;

// Hide Webshop
$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide Webshop Finnish
$config['vcmp']['pages']['home']['content']['webshop_fi'] = null;


// Upload path
$config['custom_upload_path'] = '/store/brandeasy/customers/dk/'.$_SESSION['CUSTOMER_NAME'].'/_INBOX';


// Mediabank path and request URL
$design_studio_url = 'http://mediabank-brandeasy.brandfactory.se/mediabank-brandeasy/startup.php';
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/brandeasy/customers/dk/'.$_SESSION['CUSTOMER_NAME'].'/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/brandeasy/customers/dk/'.$_SESSION['CUSTOMER_NAME'].'/_INBOX'.
                            '%26site=brandeasy';


// Mediabank vcmp-configuration
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



// No autologin available
$config['integrations']['nav'] = array(
	'name' => '',
        'iframe_url' => 'http://webshop.vangsgaard.dk/da-dk/',
        'queries' => array(
		'Username' => 'skoda',
		'Password' => 'skoda',
        ),
        'iframe_resizer' => false,
        'container' => 'iframe-full-container',
        'class' => 'iframe-full',
);
