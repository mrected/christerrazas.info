<?php
function doyle_fw_ext_backups_demos($demos) {
    $demos_array = array(
		'doyle' => array(
			'title' => esc_html__('Doyle', 'doyle'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/doyle/doyle/screenshot.png',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/doyle/',
		),
		
    );

    $download_url = 'http://theme.bearsthemes.com/import_demo/doyle/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', 'doyle_fw_ext_backups_demos');
