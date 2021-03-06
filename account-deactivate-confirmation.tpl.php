<?php
/**
 * Available variables:
 * - $csrf - CSRF
 * - $message
 *
 * @copyright Copyright (c) 2011 Poluza.
 * @author Andrew Udvare [au] <andrew@poluza.com>
 * @license http://www.opensource.org/licenses/mit-license.php
 *
 * @package SutraTemplate
 * @link https://github.com/tatsh/sutra-template-default
 *
 * @version 1.0
 */
?>
<form id="deactivate-account-confirmation-form" action="/account/deactivate/post" method="post">
  <header><h2><?php print fHTML::encode($message); ?></h2></header>
  <input type="hidden" value="<?php print $csrf; ?>" name="csrf">
  <div class="form-ops-container">
    <input type="submit" class="form-submit ui-button ui-widget ui-state-default ui-corner-all" value="<?php print __('Yes'); ?>" name="op">
    <input type="submit" class="form-submit ui-button ui-widget ui-state-default ui-corner-all" value="<?php print __('No'); ?>" name="op">
  </div>
</form>
