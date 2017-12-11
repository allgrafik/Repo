<?php

/* 
 * Customer configuration (config.php)
 *
 * This file is used to configure Brand Easy customers
 *
 *
 */

$customer = 'stadium';

$config['vcmp']['settings'] = array(

    // Define default groups that should have access to this portal
    'read' => array(
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
		$customer.'_projectgroup',
		$customer.'_storegroup',
		$customer.'_superusergroup',
        ),
            'content'   => 'welcome',
            'class'     => 'area-welcome span4',
            'type'      => 'primary'
        ),


        // Mediabank
        'mediabank' => array(
            'title'         => "Mediabank",
            'description'   => 'Bilder, dokument och andra filer.',
            'read'          => array(
		$internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup',
		$customer.'_superusergroup',
		$customer.'_projectgroup',
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

        // Min butik (Store Manager)
        'sm' => array(

            'title'         => 'My Store',
            'description'   => 'Butiksuppgifter och skyltplatser.',
            'read'          => array(
$customer.'_storegroup',
            ),
            'icon'          => '',
            'content'       => 'sm_store',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=sm',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'area-primary store-management non-mobile span8',
            'type'          => 'primary'
        ),

        // Min butik (Store Manager)
        'sma' => array(
            'title'         => 'Store Manager',
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
           $customer.'_admingroup',
            ),
            'icon'          => '',
            'content'       => 'sm_admin',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=sma',
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'area-primary store-management non-mobile span8',
            'type'          => 'primary'
        ),

        // Min butik (Store Manager)
        'smc' => array(
            'title'         => 'Store Manager',
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                'stadium_superusergroup',
		'stadium_projectgroup',
            ),
            'icon'          => '',
            'content'       => 'sm_admin',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smc',
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'area-primary store-management non-mobile span8',
            'type'          => 'primary'
        ),

	// Store Manager (backend)
        'smb' => array(

            'title'         => 'Store Mngr Admin',
            'description'   => 'Butiksuppgifter, skyltplatser och rapporter.',
            'read'          => array(
                'stadium_projectgroup',
		'stadium_superusergroup',
            ),
            'icon'          => '',
            'content'       => 'sm_backend',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=smb',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'area-primary store-management span8',
            'type'          => 'primary'
        ),
        // Uploader
        'upload' => array(

            'title'         => $ms2_language['integration_upload'],
            'description'   => 'Ladda upp filer till Mediabanken.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
		$customer.'_projectgroup',
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
        // Webshop 2.0
        'webshop' => array(
            'title'         => 'Shop 2.0',
            'description'   => 'Webshop',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup',
                $customer.'_projectgroup',
                $customer.'_storegroup',
                $customer.'_superusergroup',            
	),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=webshop',
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'area-primary store-management non-mobile span8',
            'type'          => 'primary'
        ),

    ),

);

// Configure upload path
$config['custom_upload_path'] = '/store/brandeasy/customers/se/stadium/_INBOX';

// Mediabank and Workflow path configuration
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/brandeasy/customers/se/stadium/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/design_studio/Customers/stadium/_INBOX'.
                            '%26site=brandeasy';

// Butiks-ID
$smdb_customer_id = '48'; 

// Store Management URL
$smdb_url = 'http://sm2.brandeasy.eu';

// Store Management secret key
$smdb_secret = 'y-ky6PW_TkjMsXLeKBQi';

// Fetch Session username for smdb_token-generation
$username = $_SESSION['USERNAME'];

// User aliases for Store Management
$config['smdb_users'] = array(

    // Demo accounts
    'stadium_lisa' => 'stadium.kundadmin@brandfactory.se',
    'stadium_evelina' => 'stadium.kundadmin@brandfactory.se',
);

// Generate token for Store Management with username (or alias)
$smdb_token  = md5(str_replace('@', $smdb_secret, array_key_exists($username, $config['smdb_users'])?$config['smdb_users'][$username]:$username));

// Generate hash for Shop 2.0 autologin
$webshop_pw = hash_hmac('sha1', $username.date("Y-m-d"), '1pUQmNsd4dddhRtVtAF4vaGrXEJ2maYRvKY372fxn81KPUPYHGBh0UY1SC4TeA13');

// Store Management (stores)
$config['integrations']['sm'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/locations/',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'en',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Store Management (managers)
$config['integrations']['sma'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/locations/',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'en',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

// Store Management (admins with mystore)
$config['integrations']['smc'] = array(
    'name' => '',
    'iframe_url' => $smdb_url.'/companies/'.$smdb_customer_id.'/set',
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'en',
	//'redirect' => 'locations', 
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

$config['integrations']['smb'] = array(
    'iframe_url' => $smdb_url.'/admin/companies/'.$smdb_customer_id,
    'queries' => array(
        'auth_token' => $smdb_token,
        'embed_mode' => 'true',
        'lang' => 'en',
    ),
    'iframe_resizer' => false,
    'container' => 'iframe-full-container',
    'class' => 'iframe-full',
);

$config['integrations']['webshop'] = array(
    'iframe_url' => 'http://stadium.ineko.se/Autologin.ashx', 
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


// Hide Monitor webshop
// $config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide Monitor FI webshop
$config['vcmp']['pages']['home']['content']['webshop_fi'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;

// Hide workflow
$config['vcmp']['pages']['home']['content']['workflow'] = null;

//$config['vcmp']['pages']['home']['content']['upload'] = null;
