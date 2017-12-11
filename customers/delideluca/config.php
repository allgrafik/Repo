<?php

/* 
 * Customer configuration (config.php)
 *
 * This file is used to configure Brand Easy customers
 *
 *
 */


// TEMP FOR LANGUAGE TAGS (when live brandeasy is updated to current develop, this can be erased)
$ms2_language['integration_smb']                        = 'Store Manager (Admin)';
$ms2_language['integration_sma']                        = 'Store Manager';
$ms2_language['integration_sm']                         = 'My Store';


// Home page (required)
$config['vcmp']['pages']['home'] = array(

    // Page settings
    'read'  => '', // Not in use if content is array
    'write' => '', // Not in use if content is array
    'class' => '',
    
    // Page content
    'content' => array(

        // General welcome text
        'welcome' => array(
            'read'      => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup',
        ),
            'content'   => 'welcome',
            'class'     => 'area-welcome span4',
            'type'      => 'primary'
        ),

        // Mediabank
        'mediabank' => array(
            'title'         => $ms2_language['integration_mediabank'],
            'description'   => 'Bilder, dokument och andra filer.',
            'read'          => array(
                $customer.'_usergroup',
                $customer.'_admingroup',
            ),
            'icon'          => '',
            'content'       => 'mediabank',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=mediabank&releasetmpl=true',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => true,
            'class'         => 'mediabank span8 hide',
            'type'          => 'primary'
        ),

       // Monitor Webbshop SE
        'webshop' => array(
            'title'         => $ms2_language['integration_webshop'],
            'description'   => 'Beställ trycksaker och andra produkter.',
            'read'          => array(
                $customer.'_usergroup',
                $customer.'_admingroup',
                ),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=webshop',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => true,
            'class'         => 'webshop span8',
            'type'          => 'primary'
        ),

        // Uploader
        'upload' => array(
            'title'         => $ms2_language['integration_upload'],
            'description'   => 'Ladda upp filer till Mediabanken.',
            'read'          => array(
                $customer.'_admingroup',
            ),
            'icon'          => '',
            'content'       => 'upload',
            'link'          => '/PORTAL/UPLOAD.php?releasetmpl=true&page=upload',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => true,
            'class'         => 'upload span8 hide',
            'type'          => 'primary'
        ),

        // Store Manager (frontend)
        'sma' => array(

            'title'         => 'Store Manager',
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                $customer.'_admingroup',
                'brandeasy_storemanagergroup',
            ),
            'icon'          => '',
            'content'       => 'sm_admin',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=sma',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'area-primary store-management span8',
            'type'          => 'primary'
        ),

        // Store Manager (backend)
        'smb' => array(

            'title'         => $ms2_language['integration_smb'],
            'description'   => '',
            'read'          => array(
                'bf_sysadmingroup',
                'bf_projectgroup',
                'bf_designgroup',
		'delideluca_admingroup',
            ),
            'icon'          => '',
            'content'       => 'sm_backend',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smb',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'right',
            'disabled'      => false,
            'class'         => 'area-secondary store-management span8 pull-right non-mobile',
            'type'          => 'secondary'
        ),
    ),

);

// Mediabank volume(s) configuration(s)
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                         '?path=/store/brandeasy/customers/no/delideluca/_MEDIABANK'.
                         '%26set_base_path=true'.
                         '%26additional_base_paths=/store/brandeasy/customers/no/delideluca/_INBOX'.
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

// Butiks-ID
$smdb_customer_id = '25'; // Deli De Luca (live)

// Store Management URL
$smdb_url = 'http://sm.brandeasy.eu';

// Store Management secret key
$smdb_secret = 'y-ky6PW_TkjMsXLeKBQi';

// smdb_token
$smdb_token  = md5(str_replace('@', $smdb_secret, $username));

// Butiksdatabas (Frontend) / Store Manager
$config['integrations']['sma'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/companies/'.$smdb_customer_id.'/set',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'nb',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Butiksdatabas (backend) / Store Manager
$config['integrations']['smb'] = array(
    'iframe_url' => $smdb_url.'/admin/companies/'.$smdb_customer_id,
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'sv',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Hide Monitor webshop
$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide Monitor FI webshop
$config['vcmp']['pages']['home']['content']['webshop_fi'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;

// Hide workflow
$config['vcmp']['pages']['home']['content']['workflow'] = null;

//Fileuploadpath
$config['custom_upload_path'] = '/store/brandeasy/customers/no/delideluca/_INBOX';
