<?php

/* 
 * Customer configuration (config.php)
 *
 * This file is used to configure Brand Easy customers
 *
 *
 */


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
            'title'         => $ms2_language['integration_imagebank'],
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
            ),
            'icon'          => '',
            'content'       => 'upload',
            'link'          => '/PORTAL/UPLOAD.php?releasetmpl=true&page=upload',
            'link_text'     => 'Öppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'upload span8',
            'type'          => 'primary'
        ),

	// OTOL
        'otol' => array(
            'title'         => 'Webshop',
            'description'   => '',
	    'read'          => array(
		$customer.'_admingroup',
		$customer.'_usergroup',
	    ),
            'icon'          => '',
            'content'       => 'otol',
            'link'          => 'http://ontime-online.ontime.se/Common/Login.aspx',
            'link_text'     => 'Öppna &raquo;',
            'link_target'   => '_blank',
            'link_class'    => 'big',
            'disabled'      => false,
            'class'         => 'otol span8',
            'type'          => 'primary'
        ),



    ),

);

// Mediabank volume(s) configuration(s)
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                         '?path=/store/brandeasy/customers/se/johnsonandjohnson/_MEDIABANK'.
                         '%26set_base_path=true'.
                         '%26additional_base_paths=/store/brandeasy/customers/se/johnsonandjohnson/_INBOX'.
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

// Custom Upload Path
$config['custom_upload_path'] = '/store/brandeasy/customers/se/johnsonandjohnson/_INBOX';
