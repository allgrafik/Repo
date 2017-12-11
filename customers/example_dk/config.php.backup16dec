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

    'override_portalgroup' => true,

    // All groups that should have access to this portal (soon to be obsolete...)
    'read' => array(
        $internal.'_sysadmingroup',
        $customer.'_admingroup',
        $customer.'_admingroup_fi',
        $customer.'_usergroup',
	$customer.'_guestgroup',
	),

    // Groups with write access (Redactor)
    'write' => array(),

    // Wrapper CSS ID
    'id' => 'vcmp', // Recommended to leave this intact since default styles are defined with this ID

    // VCMP Menu in header
    'vcmp_toolbar' => true,

    // Show Home button in VCMP Toolbar
    'vcmp_toolbar_home_button' => true,

    // Show Shortcuts in VCMP Toolbar
    'vcmp_toolbar_shortcuts' => true,

    // Show Home link in Shortcuts
    'vcmp_toolbar_shortcuts_home_link' => true,

    // Show secondary VCMP links in Shortcuts
    'vcmp_toolbar_shortcuts_include_secondary' => true,

    // Help button in header
    'vcmp_help' => false,
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
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup',
                $customer.'_admingroup_fi',
                $customer.'_guestgroup',
		),
            // 'write'     => array(),
            'content'   => 'welcome',
            'class'     => 'area-welcome span4',
            'type'      => 'primary'
        ),

        'workflow' => array(
            'title'         => $ms2_language['integration_workflow'],
            'description'   => 'Godkänn och kommentera original.',
            'read'          => array(
                'bf_sysadmingroup',
                'bf_projectgroup',
                'bf_designgroup',
		'brandeasy_workflowgroup',
                //$customer.'_admingroup',
                //$customer.'_admingroup_fi',
            ),
            'icon'          => '',
            'content'       => 'workflow',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=workflow&releasetmpl=true',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'design-studio span8',
            'type'          => 'primary'
        ),

        // Mediabank
        'mediabank' => array(
            'title'         => $ms2_language['integration_mediabank'],
            'description'   => 'Bilder, dokument och andra filer.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_admingroup_fi',
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

       // Monitor Webbshop FI
        'webshop_fi' => array(
            'title'         => $ms2_language['integration_webshop_fi'],
            'description'   => 'Beställ trycksaker och andra produkter.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_usergroup',
                $customer.'_admingroup_fi',
                ),
            // 'write'         => array(),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=webshop_fi',
            // 'link_text'     => 'Ej tillgänglig',
            // 'disabled'      => true,
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'webshop span8',
            'type'          => 'primary'
        ),

       // Monitor Webbshop SE
        'webshop' => array(
            'title'         => $ms2_language['integration_webshop'],
            'description'   => 'Beställ trycksaker och andra produkter.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_usergroup',
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

       // Visma Webbshop
        'visma' => array(
            'title'         => $ms2_language['integration_visma'],
            'description'   => 'Beställ trycksaker och andra produkter.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_admingroup_fi',
                $customer.'_usergroup'),
            // 'write'         => array(),
            'icon'          => '',
            'content'       => 'webshop',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=visma',
            // 'link_text'     => 'Ej tillgänglig',
            // 'disabled'      => true,
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'webshop span8',
            'type'          => 'primary'
        ),


       // NAV Webbshop
        'nav' => array(
            'title'         =>  $ms2_language['integration_nav'],
            'description'   => 'Beställ trycksaker och andra produkter.',
            'read'          => array(
                $internal.'_sysadmingroup',
                $customer.'_admingroup',
                $customer.'_admingroup_fi',
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
            	$customer.'_admingroup_fi',
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
//$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;

// Hide Workflow
//$config['vcmp']['pages']['home']['content']['workflow'] = null;

// Hide Webshop
// $config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide Webshop Finnish
// $config['vcmp']['pages']['home']['content']['webshop_fi'] = null;
