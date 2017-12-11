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

// Custom Upload Path
$config['custom_upload_path'] = '/store/brandeasy/customers/fi/nokia/_INBOX';

$webshop_url = 'http://webshop.brandfactory.se/external/external.aspx';
// Overrides for what services to display

$config['integrations']['webshop'] = array(
	'iframe_url' => $webshop_url,
	'queries' => array(
            'u' => $monitorData['username'],
            'p' => $monitorData['password'],
            'k' => $monitorData['customer_id'],
        ),
        'iframe_resizer' => false,
        'container' => 'iframe-full-container',
        'class' => 'iframe-full',
);  

// Home page (required)
$config['vcmp']['pages']['home'] = array(
    
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

       // Monitor Webbshop FI
        'webshop' => array(
            'title'         => $ms2_language['integration_webshop'],
            'description'   => 'Beställ trycksaker och andra produkter.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_usergroup',
                $customer.'_admingroup',
                ),
            // 'write'         => array(),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=webshop',
            // 'link_text'     => 'Ej tillgänglig',
            // 'disabled'      => true,
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'webshop span8',
            'type'          => 'primary'
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
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'mediabank span8',
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

        // Nokia
        'nokia' => array (
            'title'         => 'Nokia',
            'description'   => 'Nokia',
            'icon'          => '',
            'content'       => 'nokia',
            'link'          => 'http://www.nokia.fi/',
            'link_text'     => 'Open',
            'link_target'   => '_blank',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'span8',
            'type'          => 'primary'
        ),

    ),
);


// Mediabank configuration
$mediabank_request_url = '/PORTAL/BROWSE.php'.
	'?path=/store/brandeasy/customers/fi/nokia/_MEDIABANK'.
	'%26set_base_path=true'.
	'%26additional_base_paths=/store/brandeasy/customers/fi/nokia/_INBOX'.
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
