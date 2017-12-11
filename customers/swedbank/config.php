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
            'title'         => $ms2_language['integration_workflow'],
            'description'   => 'Godkänn och kommentera original.',
            'read'          => array(
                'bf_sysadmingroup',
                'bf_projectgroup',
               // $customer.'_admingroup',
		$customer.'_workflowgroup',
                'bf_designgroup',
            ),
            'icon'          => '',
            'content'       => 'workflow',
            'link'          => '/PORTAL/TOPLEVEL.php?ms2view=integration&source=workflow&releasetmpl=true',
            'link_text'     => '�~Vppna &raquo;',
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
            'link_text'     => '�~Vppna &raquo;',
            'link_class'    => 'big', // 'big', 'button', 'button right'
            'disabled'      => false,
            'class'         => 'upload span8',
            'type'          => 'primary'
        ),

    ),

);


// Configure upload path
$config['custom_upload_path'] = '/store/design_studio/Customers/swedbank/_INBOX';

// Mediabank and Workflow path configuration
$mediabank_request_url = '/PORTAL/BROWSE.php'.
                            '?path=/store/design_studio/Customers/swedbank/_MEDIABANK'.
                            '%26set_base_path=true'.
                            '%26additional_base_paths=/store/design_studio/Customers/swedbank/_INBOX'.
                            '%26site=brandeasy';

$workflow_request_url = '/PORTAL/BROWSE.php'.
                        '?path=/store/design_studio/Customers/swedbank/_WORKFLOW'.
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


// Show and Hide Brand Easy Services configuration

// Hide Monitor webshop
$config['vcmp']['pages']['home']['content']['webshop'] = null;

// Hide NAV webshop
$config['vcmp']['pages']['home']['content']['nav'] = null;

// Hide Visma webshop
$config['vcmp']['pages']['home']['content']['visma'] = null;


// Hide workflow
//$config['vcmp']['pages']['home']['content']['workflow'] = null;

$config['vcmp']['pages']['home']['content']['mediabank'] = null;
$config['vcmp']['pages']['home']['content']['upload'] = null;
