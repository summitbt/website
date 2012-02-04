<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Summitbt extends Theme {

	public $name                = 'Summit';
	public $author              = 'David Freerksen';
	public $author_website      = 'http://www.witheringtree.com';
	public $website             = 'http://www.summitbt.com';
	public $description         = 'Summit Bug Tracker theme';
	public $version             = '1.0';

	public $options =  array(
		'show_breadcrumbs' => array(
			'title'             => 'Show Breadcrumbs',
			'description'       => 'Would you like to display breadcrumbs?',
			'default'           => 'no',
			'type'              => 'radio',
			'options'           => 'yes=Yes|no=No',
			'is_required'       => TRUE
		),
		'layout' => array(
			'title'             => 'Layout',
			'description'       => 'Which type of layout shall we use?',
			'default'           => 'full-width',
			'type'              => 'select',
			'options'           => '2-column=Two Column|full-width=Full Width',
			'is_required'       => TRUE
		)
	);

 }
/* End of file theme.php */