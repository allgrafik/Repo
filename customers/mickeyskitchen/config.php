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

// TEMP FOR LANGUAGE TAGS (when live brandeasy is updated to current develop, this can be erased)
$ms2_language['integration_smb']                        = 'Store Manager (admn)';
$ms2_language['integration_sma']                        = 'Store Manager';
$ms2_language['integration_sm']                         = 'My Store';
$ms2_language['integration_workflow']                   = 'Proofer';
$customer = 'mickeyskitchen';
$username = $_SESSION['USERNAME'];

$config['vcmp']['settings'] = array(

    // Define default groups that should have access to this portal
    'read' => array(
        'bf_sysadmingroup',
        'bf_projectgroup',
        'bf_designgroup',
        $customer.'_projectgroup',
        $customer.'_admingroup', // HQ
        $customer.'_superusergroup', // RC
        $customer.'_storegroup', // Stores
        $customer.'_usergroup', // DC
    ),

    // Wrapper CSS ID
    'id' => 'vcmp', // Recommended to leave this intact since default styles are defined with this ID

    // VCMP Menu in header
    'vcmp_toolbar' => true,

    // Show Home button in VCMP Toolbar
    'vcmp_toolbar_home_button' => false,

    // Show Shortcuts in VCMP Toolbar
    'vcmp_toolbar_shortcuts' => true,

    // Show Home link in Shortcuts
    'vcmp_toolbar_shortcuts_home_link' => true,

    // Show secondary VCMP links in Shortcuts
    'vcmp_toolbar_shortcuts_include_secondary' => true,

    // Help button in header
    // 'vcmp_help' => true,
);



$config['vcmp']['pages']['home'] = array(

    // Page settings
    'read'  => '', // Not in use if content is array
    'write' => '', // Not in use if content is array
    'class' => '',

    // Page content areas
    'content' => array(

        // Welcome text
        'welcome' => array(

            'content'   => 'welcome',
            'class'     => 'area-welcome span4',
            'type'      => 'primary'
        ),

        // Min butik (Store Manager)
        'sm' => array(

            'title'         => $ms2_language['integration_sm'],
            'description'   => 'Butiksuppgifter och skyltplatser.',
            'read'          => array(
               $customer.'_usergroup',
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
                $customer.'_admingroup',
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
        // Webshop 2.0
        'webshop' => array(
            'title'         => 'Shop 2.0',
            'description'   => 'Webshop',
            'read'          => array(
                $customer.'_admingroup',
                $customer.'_usergroup',
		$customer.'_projectgroup',
		$customer.'_superusergroup',
        ),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=webshop',
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'button right',
            'disabled'      => false,
            'class'         => 'store-management non-mobile span8',
            'type'          => 'secondary'
        ),

       'workflow' => array(
            'title'         => $ms2_language['integration_workflow'],
            'description'   => '',
            'read'          => array(
                $customer.'_admingroup',
                $customer.'_usergroup',
                $customer.'_projectgroup',
                $customer.'_superusergroup',
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
            'title'         => "Mediabank",
            'description'   => 'Bilder, dokument och andra filer.',
            'read'          => array(
                $customer.'_admingroup',
                $customer.'_usergroup',
                $customer.'_projectgroup',
                $customer.'_superusergroup',
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

        // Uploader
        'upload' => array(

            'title'         => $ms2_language['integration_upload'],
            'description'   => 'Ladda upp filer till Mediabanken.',
            'read'          => array(
                $customer.'_admingroup',
                $customer.'_usergroup',
                $customer.'_projectgroup',
                $customer.'_superusergroup',            
		),
            // 'write'         => array(),
            'icon'          => '',
            'content'       => 'upload',
            'link'          => '/PORTAL/UPLOAD.php?releasetmpl=true&page=upload',
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'button right', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'upload span8',
            'type'          => 'secondary'
        ),
    ),

);


// Configure upload path
$config['custom_upload_path'] = '/store/brandeasy/customers/se/mickeyskitchen/_INBOX';

// Mediabank and Workflow path configuration
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/brandeasy/customers/se/mickeyskitchen/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/brandeasy/customers/se/mickeyskitchen/_INBOX'.
                            '%26site=brandeasy';

$workflow_request_url = '/PORTAL/BROWSE.php'.
                        '?path=/store/brandeasy/customers/se/mickeyskitchen/_WORKFLOW'.
                        '%26additional_base_paths=/store/brandeasy/customers/se/mickeyskitchen/_INBOX'.
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
$smdb_customer_id = '2'; // Mickeys Kitchen (in Demo)

// Store Management URL
$smdb_demo_url = 'http://store-management-demo.herokuapp.com';

// Store Management secret key
$smdb_secret = 'y-ky6PW_TkjMsXLeKBQi';

// smdb_token
$smdb_token  = md5(str_replace('@', $smdb_secret, $username));

// Min Butik - Location Manager
$config['integrations']['sm'] = array(
    'name' => '',
    'iframe_url' => $smdb_demo_url.'/locations/',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'en',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Butiksdatabas (Frontend) / Store Manager
$config['integrations']['sma'] = array(
    'name' => '',
    'iframe_url' => $smdb_demo_url.'/locations/',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'en',
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


// Generate hash for Shop 2.0 autologin
$webshop_pw = hash_hmac('sha1', $username.date("Y-m-d"), '2HQqbgLecsm6G2m00Zjea7ctv37UBeScQvdgKPV7xJhbm0uGEFvDVcn5Ev4jk2P7');

$config['integrations']['webshop'] = array(
    //'iframe_url' => 'http://mickeyskitchen-shop.brandeasy.eu/Autologin.ashx',
    'iframe_url' => 'http://mickeyskitchen.ineko.se/Autologin.ashx',
    'queries' => array(
        'hash' => $webshop_pw,
        'email' => $username,
        'ssid' => $username,
	'fname' => '',
	'lname' => '',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

/*************************************************
*
* Show/Hide services below
*
*************************************************/

// Hide Monitor webshop
//$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;

// Hide workflow
//$config['vcmp']['pages']['home']['content']['workflow'] = null;

// Hide Mediabank
//$config['vcmp']['pages']['home']['content']['mediabank'] = null;

// Hide Fileupload
//$config['vcmp']['pages']['home']['content']['upload'] = null;
