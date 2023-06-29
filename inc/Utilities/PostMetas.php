<?php
/**
 * WPBlueprint Theme Classic Handler: Custom Post Meta
 *
 * @since   1.0
 * @package wp-blueprint/shared-classes
 * @link    https://github.com/WP-Blueprint/WPBlueprint-Classic-Classes
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class handles custom post meta fields for the theme.
 */
class PostMetas extends \WPBlueprint\Theme\Core\Handlers\PostMeta {

	/**
	 * Registers the custom post meta fields.
	 *
	 * @return void
	 */
	public function __construct() {
		$post_meta_fields = array(
			// Define the Post Metas here.
		);

		parent::set_post_meta_fields( $post_meta_fields );
	}
}
