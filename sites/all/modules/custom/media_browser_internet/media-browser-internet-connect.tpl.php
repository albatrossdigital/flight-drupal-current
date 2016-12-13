<div class="media-browser-internet-connect">

<p class="need-to-connect">You need to connect to <?php print $service; ?> before you can access <?php print $section; ?>.</p>

<p><input type="submit" class="form-submit" onClick="window.open('<?php global $user;print url('user/' . $user->uid . '/connections'); ?>', '_newtab');return false;" value="Manage your connections"></p>

<p>If you just connected, <a href="#" onClick="window.location.reload()">click here to reload this tab</a>.</p>

</div>
