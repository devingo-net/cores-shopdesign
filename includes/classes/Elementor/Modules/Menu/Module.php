<?php

/**
 *  Elementor Header Module
 *
 * @category   Elementor
 * @version    1.0.0
 * @since      1.0.0
 */

namespace DCore\Elementor\Modules\Menu;

use DCore\Elementor\Modules\Module_Base;

/**
 * Class Module
 *
 *
 * @package DCore\Elementor\Modules\Header
 */
class Module extends Module_Base {

	/**
	 * class init
	 */
	public static function init () : void {
		new self();
	}

	/**
	 * @inheritDoc
	 *
	 * @return string
	 */
	public function get_name () : string {
		return 'Menu';
	}

	/**
	 * register module document
	 *
	 * @param $documents_manager
	 */
	public static function registerDocuments ($documents_manager) : void {
		$documentTypes = [
			'menu' => Document::get_class_full_name()
		];

		foreach ( $documentTypes as $type => $class_name ) {
			$documents_manager->register_document_type($type, $class_name);
		}
	}
}