<?php

/* 
 * Customer configuration (config.php)
 *
 * This file is used to configure Brand Easy customers
 *
 *
 */

$customer = 'loomis';

$config['vcmp']['settings'] = array(

    // Define default groups that should have access to this portal
    'read' => array(
	$customer.'_projectgroup',
        $customer.'_admingroup', // HQ
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
                $customer.'_admingroup',
                $customer.'_usergroup',
		$customer.'_projectgroup',
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
                $customer.'_admingroup',
                $customer.'_usergroup',
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


	// Uploader
	'upload' => array(
            'title'         => $ms2_language['integration_upload'],
            'description'   => 'Ladda upp filer till Mediabanken.',
            'read'          => array(
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

    ),

);

// Configure upload path
$config['custom_upload_path'] = '/store/brandeasy/customers/se/loomis/_INBOX';

// Mediabank and Workflow path configuration
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/brandeasy/customers/se/loomis/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/brandeasy/customers/se/loomis/_INBOX'.
                            '%26site=brandeasy';

$username = $_SESSION['USERNAME'];

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

$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;

// Hide workflow
$config['vcmp']['pages']['home']['content']['workflow'] = null;

//$config['vcmp']['pages']['home']['content']['upload'] = null;
