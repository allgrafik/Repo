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

// TEMP FOR LANGUAGE TAGS
$ms2_language['integration_smb']                        = 'Butiksdatabas (admn)';
$ms2_language['integration_sma']                        = 'Butiksdatabas';
$ms2_language['integration_sm']                         = 'Gröna Lund';
$ms2_language['integration_smkolmarden']                = 'Kålmorden';
$ms2_language['integration_smaquaria']                  = 'Aquaria';
$ms2_language['integration_sommarland']                  = 'Skara Sommarland';
$ms2_language['integration_furuvik']                  = 'Furuvik';
$ms2_language['integration_workflow']                   = 'Approval Tool';
$customer = 'parksandresorts';
$username = $_SESSION['USERNAME'];


// Home page (required)
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
		$customer.'_designgroup',
                ),
            // 'write'     => array(),
            'content'   => 'welcome',
            'class'     => 'area-welcome span4',
            'type'      => 'primary'
        ),

        'workflow' => array(
            'title'         => "Korrekturflöde",
            'description'   => 'Godkänn och kommentera original.',
            'read'          => array(
                'bf_sysadmingroup',
                'bf_projectgroup',
               // $customer.'_admingroup',
		$customer.'_workflowgroup',
                'bf_designgroup',

                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup'
            ),
            'icon'          => '',
            'content'       => 'workflow',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=workflow&releasetmpl=true',
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'design-studio span8',
            'type'          => 'secondary'
        ),

        // Mediabank
        'mediabank' => array(
            'title'         => "Bildbank",
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
            'link_class'    => 'button right', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'mediabank span8',
            'type'          => 'secondary'
                           ),

       // Webshop 2.0
        'webshop' => array(
            'title'         => 'Shop 2.0',
            'description'   => 'Webshop',
            'read'          => array(
               $internal.'_sysadmingroup',
               $customer.'_admingroup',
               $customer.'_usergroup',
               $customer.'_projectgroup',
        ),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=webshop',
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
        ),


       // Min butik (Store Manager)
        'sm' => array(

            'title'         => $ms2_language['integration_sm'],
            'description'   => 'Butiksuppgifter och skyltplatser.',
            'read'          => array(
               $customer.'_usergroup',
	       $customer.'_admingroup',
            ),
            'icon'          => '',
            'content'       => 'sm_store',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=sm',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
        ),

        // Store Manager (frontend)
        'sma' => array(

            'title'         => $ms2_language['integration_sma'],
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                $customer.'_superusergroup',
                $customer.'_projectgroup',
            ),
            'icon'          => '',
            'content'       => 'sm_admin',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=sma',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
        ),


        // Store Manager (Kolmarden)
        'smkolmarden' => array(

            'title'         => $ms2_language['integration_smkolmarden'],
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                $customer.'_superusergroup',
                $customer.'_projectgroup',
               $customer.'_usergroup',
               $customer.'_admingroup',
            ),
            'icon'          => '',
            'content'       => 'sm_kolmarden',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smkolmarden',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
        ),

        // Store Manager (Aquaria)
        'smaquaria' => array(

            'title'         => $ms2_language['integration_smaquaria'],
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                $customer.'_superusergroup',
                $customer.'_projectgroup',
               $customer.'_usergroup',
               $customer.'_admingroup',
            ),
            'icon'          => '',
            'content'       => 'sm_aquaria',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smaquaria',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
        ),

        // Store Manager (Sommarland)
        'smsommarland' => array(

            'title'         => $ms2_language['integration_sommarland'],
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                $customer.'_superusergroup',
                $customer.'_projectgroup',
                $customer.'_usergroup',
                $customer.'_admingroup',
		),
            'icon'          => '',
            'content'       => 'sm_sommarland',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smsommarland',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
        ),

        // Store Manager (Furuvik)
        'smfuruvik' => array(

            'title'         => $ms2_language['integration_furuvik'],
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                $customer.'_superusergroup',
                $customer.'_projectgroup',
                $customer.'_usergroup',
                $customer.'_admingroup',
            ),
            'icon'          => '',
            'content'       => 'sm_furuvik',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smfuruvik',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
        ),



       // Store Manager (backend)
        'smb' => array(

            'title'         => $ms2_language['integration_smb'],
            'description'   => '',
            'read'          => array(
                $customer.'_projectgroup',
            ),
            'icon'          => '',
            'content'       => 'sm_backend',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smb',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management span8',
            'type'          => 'secondary'
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
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'upload span8',
            'type'          => 'primary'
        ),

    ),

);


// Configure upload path
$config['custom_upload_path'] = '/store/design_studio/Customers/parksandresorts/_INBOX';

// Mediabank and Workflow path configuration
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/design_studio/Customers/parksandresorts/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/design_studio/Customers/parksandresorts/_INBOX'.
                            '%26site=brandeasy';

$workflow_request_url = '/PORTAL/BROWSE.php'.
                        '?path=/store/design_studio/Customers/parksandresorts/_WORKFLOW'.
                        '%26additional_base_paths=/store/design_studio/Customers/parksandresorts/_INBOX'.
                        '%26set_base_path=true'.
			'%26site=brandeasy';

// Make sure integration configurations are applied 
$config['integrations']['workflow'] = array (

        'name' => '',
        'iframe_url' => $design_studio_url,
        'queries' => array(
            'credentials' => true,
            'request_url' => $workflow_request_url,
        ),
        'iframe_resizer' => false,
        'container' => false,
        'class' => 'iframe-full',
    );


$username = $_SESSION['USERNAME'];
$webshop_pw = hash_hmac('sha1', $username.date("Y-m-d"), '0G7lCSC8kQkXGpFvhRfUx0cb0MCPgeCvYQzdfSr7baF1l5mmeh2gCLEaE6v1pZ1e');

$config['integrations']['webshop'] = array(
    'iframe_url' => 'http://parks-resorts.brandfactory.se/Autologin.ashx',
    'queries' => array(
        'hash' => $webshop_pw,
        'email' => $username,
        'ssid' => $username,
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

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


// User aliases for Store Management
$config['smdb_users'] = array(

    // Project group
    // Design group

    // Admin access
    'bf_sysadmin'   => 'develop@brandfactory.se',

    // Demo accounts

);


//$smdb_token  = md5(str_replace('@', $smdb_secret, array_key_exists($username, $config['smdb_users'])?$config['smdb_users'][$username]:$username));

// Store Management customer ID
$smdb_customer_id = '50'; //

// Store Management secret key
$smdb_secret = 'y-ky6PW_TkjMsXLeKBQi';

// smdb_token
$smdb_token  = md5(str_replace('@', $smdb_secret, $username));

// Store Management URLs
$smdb_url = 'http://sm2.brandeasy.eu';


// Min Butik - Location Manager
$config['integrations']['sm'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/locations/',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'sv',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Butiksdatabas (Frontend) / Store Manager
$config['integrations']['sma'] = array(
    'name' => '',
   // 'iframe_url' => $smdb_url.'/locations/',
    'iframe_url' => $smdb_url.'/companies/'.$smdb_customer_id.'/set',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'sv',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);


// Butiksdatabas (Frontend) / Store Manager
$config['integrations']['smkolmarden'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/companies/'.$smdb_customer_id.'/set',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'sv',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Butiksdatabas (Frontend) / Store Manager
$config['integrations']['smaquaria'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/companies/'.$smdb_customer_id.'/set',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'sv',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Butiksdatabas (Frontend) / Store Manager
$config['integrations']['smsommarland'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/companies/'.$smdb_customer_id.'/set',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'sv',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Butiksdatabas (backend) / Store Manager
$config['integrations']['smb'] = array(
    'iframe_url' => $smdb_demo_url.'/admin/companies/'.$smdb_customer_id,
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'en',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Show and Hide Brand Easy Services configuration

// Hide Monitor webshop
//$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;
//$config['vcmp']['pages']['home']['content']['smfuruvik'] = null;

// Hide workflow
$config['vcmp']['pages']['home']['content']['workflow'] = null;

$config['vcmp']['pages']['home']['content']['mediabank'] = null;
$config['vcmp']['pages']['home']['content']['upload'] = null;
