<?php
/**
 * WPBlueprint Theme Classic Handler: Posttypes Handler Extension
 *
 * @since   1.0
 * @package wp-blueprint/shared-classes
 * @link    https://github.com/WP-Blueprint/wp-blueprint-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the PosttypeHandler in order to register Posttypes.
 */
class PostTypes extends \WPBlueprint\Theme\Core\Handlers\PostTypes {

	/**
	 * Constructor: Registering posttypes
	 */
	public function __construct() {
		$posttypes = array(
			// Define the Posttypes here.
		);

		parent::set_posttypes( $posttypes );

	}
}
