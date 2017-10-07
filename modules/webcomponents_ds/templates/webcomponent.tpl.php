<?php
/**
 * @file
 * Default theme implementation to display a web component.
 * This is laughable small.
 *
 * Available variables:
 * - $tag: the custom web component "html" tag
 * - $properties: an array of attributes / values to fill in.
 */
// just to be safe since backdrop_attributes blows up if node system doesn't populate
if (empty($properties)) {
  $properties = array();
}
?>
<?php print $wrap_tag;?>
  <<?php print $tag;?><?php print backdrop_attributes($properties);?>>
    <?php print $innerHTML;?>
  </<?php print $tag; ?>>
<?php print $wrap_tag_close;?>
