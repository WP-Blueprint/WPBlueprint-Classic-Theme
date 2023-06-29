<?php
/**
 * WPBlueprint Theme Classic Handler: WidgetAreas Extension
 *
 * @since   1.0
 * @package wp-blueprint/shared-classes
 * @link    https://github.com/WP-Blueprint/wp-blueprint-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the WidgetAreaHandler in order to register WidgetAreas.
 */
class WidgetAreas extends \WPBlueprint\Theme\Core\Handlers\WidgetArea {

	/**
	 * Constructor: Registering widget areas
	 */
	public function __construct() {
		$widget_areas = array(
			// Define the Widget Areas here.
		);

		parent::set_widget_areas( $widget_areas );
	}
}
