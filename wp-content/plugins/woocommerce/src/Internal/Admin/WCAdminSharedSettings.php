<?php
/**
 * Manages the WC Admin settings that need to be pre-loaded.
 */

namespace Automattic\WooCommerce\Internal\Admin;

use Automattic\WooCommerce\Admin\PageController;

defined( 'ABSPATH' ) || exit;

/**
 * \Automattic\WooCommerce\Internal\Admin\WCAdminSharedSettings class.
 */
class WCAdminSharedSettings {
	/**
	 * Settings prefix used for the window.wcSettings object.
	 *
	 * @var string
	 */
	private $settings_prefix = 'admin';

	/**
	 * Class instance.
	 *
	 * @var WCAdminSharedSettings instance
	 */
	protected static $instance = null;

	/**
	 * Hook into WooCommerce Blocks.
	 */
	protected function __construct() {
		if ( did_action( 'woocommerce_blocks_loaded' ) ) {
			$this->on_woocommerce_blocks_loaded();
		} else {
			add_action( 'woocommerce_blocks_loaded', array( $this, 'on_woocommerce_blocks_loaded' ), 10 );
		}
	}

	/**
	 * Get class instance.
	 *
	 * @return object Instance.
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Adds settings to the Blocks AssetDataRegistry when woocommerce_blocks is loaded.
	 *
	 * @return void
	 */
	public function on_woocommerce_blocks_loaded() {
		// Ensure we only add admin settings on the admin.
		if ( ! is_admin() ) {
			return;
		}

		if ( class_exists( '\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry' ) ) {
			\Automattic\WooCommerce\Blocks\Package::container()->get( \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry::class )->add(
				$this->settings_prefix,
				function () {
					/**
					 * Filters the shared settings that are passed to the client.
					 *
					 * @since 6.4.0
					 */
					return apply_filters( 'woocommerce_admin_shared_settings', array() );
				}
			);

			add_action(
				'admin_enqueue_scripts',
				function () {
					if ( ! PageController::is_admin_or_embed_page() ) {
						return;
					}
					// Enqueue deprecation scripts (client/wp-admin-scripts/wcsettings-deprecation/index.js).
					WCAdminAssets::register_script( 'wp-admin-scripts', 'wcsettings-deprecation', true );
				}
			);
		}
	}
}
