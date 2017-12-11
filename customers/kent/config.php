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

$config['vcmp']['settings'] = array(

    // Define default groups that should have access to this portal
    'read' => array(
	    $customer.'_projectgroup',
        $customer.'_admingroup', // HQ
        $customer.'_superusergroup', // RC
        $customer.'_storegroup', // Stores
        $customer.'_usergroup', // DC
		$customer.'kent_usergroup',
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

        /*
         * PRIMARY VCMP ELEMENTS
         */

        // General welcome text
        'welcome' => array(

            'read'      => array(
                $customer.'_usergroup',
                $customer.'_admingroup',
                ),
            // 'write'     => array(),
            'content'   => 'welcome',
            'class'     => 'area-welcome span4',
            'type'      => 'primary'
        ),
// General welcome text2
        // 'welcome2' => array(

        //     'read'      => array(
        //         $customer.'_usergroup',
        //         ),
        //     // 'write'     => array(),
        //     'content'   => 'welcome2',
        //     'class'     => 'area-welcome span4',
        //     'type'      => 'primary'
        // ),


        // Mediabank
        'mediabank' => array(
            'title'         => "Mediabank",
            'description'   => 'Bilder, dokument och andra filer.',
            'read'          => array(
                $customer.'_usergroup',
                $customer.'_admingroup',
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
            'description'   => 'Ladda upp filer till Originalbiblioteket.',
            'read'          => array(
                $customer.'_usergroup',
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
$config['custom_upload_path'] = '/store/brandeasy/customers/se/kent/_INBOX';

// Mediabank and Workflow path configuration
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/brandeasy/customers/se/kent/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/brandeasy/customers/se/kent/_INBOX'.
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


// Show and Hide Brand Easy Services configuration

// Hide Monitor webshop
$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;


// Hide workflow
//$config['vcmp']['pages']['home']['content']['workflow'] = null;

//$config['vcmp']['pages']['home']['content']['mediabank'] = null;
//$config['vcmp']['pages']['home']['content']['upload'] = null;
