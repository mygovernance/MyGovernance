<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $html_attributes:  String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: An array of attribute values for the HTML element.
 *   It is flattened into a string within the variable $html_attributes.
 * - $body_attributes:  String of attributes for the BODY element. It can be
 *   manipulated through the variable $body_attributes_array from preprocess
 *   functions.
 * - $body_attributes_array: An array of attribute values for the BODY element.
 *   It is flattened into a string within the variable $body_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup templates
 */
?><!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <style>
  .node-teaser .comment_forbidden {
display: none;
}
.node-teaser .comment-add {
display: none;
}
.page-header{font-weight:700;letter-spacing:-.5px;line-height:1.1em;margin:10px 0 10px;padding:0;border-bottom:0} .node-container-header .facebook-box{margin-bottom: 10px;padding-top: 0;}
.comment-container{}  
.profile-pic.user-picture.img{} .user-picture{}
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}
.field-name-body{
    color:#000000;
    margin-left:0;
    margin-right:0;
    margin-top:0;
    margin-bottom:0;
    margin-width:0;
    margin-height:0;
}
#block-views-most-liked-block,#block-views-most-liked-block-1{border:none;padding: 20px 20px;margin-top: 25px;background: #f9f9f9;border: 1px solid #e7e7e7; padding: 20px 15px;padding-bottom: 10px;}
#block-views-most-liked-block .row {padding-bottom: 0;}
.field.field-name-field-thumbnail.field-type-image.field-label-hidden{
	margin-bottom: 8px!important;
	}
	.field.field-name-field-thumbnail.field-type-image.field-label-hidden.field-items.field-item even{
		display: table;
        margin: auto;
		}
.like-and-dislike-container.like{
	}
.like-and-dislike-container.dislike{
	
	} 
	.comment-count{}
	.comment-text{    display: block;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    margin: 5px;}
    .author{}
  </style>
  <?php print $scripts; ?>
</head>
<body<?php print $body_attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
