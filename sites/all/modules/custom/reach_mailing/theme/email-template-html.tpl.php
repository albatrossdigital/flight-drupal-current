<center>
<table cellpadding="0" cellspacing="0" width="750" style="border: 1px solid #dddddd;font-size: .9em;font-family: Arial, Helvetica, sans-serif;color: #444444;width: 750px;">
<img src="<?php print url(drupal_get_path('module', 'reach_mailing') . '/images/email-header.jpg', array('absolute' => TRUE)); ?>" width="750" height="100" alt="Albatross Reach for City Council" />
<tbody>
<tr><td></td></tr><tr><td style="padding:5px;">

<?php print $html_message; ?>

</td></tr><tr><td style="color: #888888; padding-top: 5px; border-top: 1px solid #eeeeee;text-align:center;">
<p>[unsubscribe]</p>
<p><div class="location vcard"><span class="adr"><span class="street-address">303 East 17th Avenue, Suite 320</span><br /><span class="locality">Denver</span>, <span class="region">CO</span> <span class="postal-code">80203</span><br /><span class="country-name">United States</span></span></div><br/></p>

</td>
</tr>
</tbody>
</table>
</center>

