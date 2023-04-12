<?php
/**
 * Disable URL Autocorrect Guessing
 *
 * @category   Plugin
 * @package    Mo\Core
 * @author     Christoph Schüßler <schuessler@montagmorgens.com>
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GNU/GPLv2
 * @since      1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       MONTAGMORGENS Disable URL Autocorrect Guessing
 * Description:       Dieses Plugin deaktiviert die automatischen Weiterleitungen per <code>redirect_canonical</code>.
 * Version:           1.0.0
 * Requires at least: 5.0.0
 * Requires PHP:      7.4
 * Author:            MONTAGMORGENS GmbH
 * Author URI:        https://www.montagmorgens.com/
 * License:           GNU General Public License v.2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mo-disable-url-autocorrect-guessing
 * Domain Path:       /languages
 * GitHub Plugin URI: montagmorgens/mo-disable-url-autocorrect-guessing
 */

add_filter( 'redirect_canonical', '__return_false' );
