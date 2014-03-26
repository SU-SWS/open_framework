Open Framework Subtheming Kit for Drupal 7.x

-- SUMMARY -- 

Authors: Megan Erin Miller
This kit is for creating subthemes based on Open Framework (http://openframework.stanford.edu).

-- REQUIREMENTS --

This Stanford custom Drupal theme is intended for Drupal versions 7 only; it will not work with Drupal 6 or below. You must install Open Framework theme 7.x-2.x or higher for this theme to operate properly.

-- SUBTHEMING INSTRUCTIONS --

1) Copy (don't move) the subtheme_kit folder from the Open Framework theme folder.
2) Paste it in your themes directory.
3) Rename the "subtheme_kit" folder to "your-theme-name".
4) In your new "your-theme-name" folder, rename the subtheme_kit.info.txt file to "your-theme-name".info and remove the ".txt" extension.
5) Edit the README.txt for your new theme (this file) and the theme info in the .info file.
6) Once you have renamed everything, you can proceed to the installation instructions below.

To start creating your subtheme, you can use the CSS template included (.css file), or add your own. Add Javascript to the scripts folder. Add your own site logo to replace the logo.png file (keep same name) and your own theme's screenshot (replace screenshot.png). Also you can add a favicon.ico file for your site if you wish.

-- INSTALLATION --

As an admin, go to Administer > Appearance > Themes to enable your subtheme and the Open Framework theme (as it is a required base theme).
More detailed information on installing themes here: http://drupal.org/getting-started/install-contrib/themes

-- TROUBLESHOOTING --

Connect with the Open Framework maintainers at http://openframework.stanford.edu.

-- Using the Theme --

The theme uses LESS to build the CSS, then is compiled into the /style.css file. The LESS files are organized in a file structure that is based on overall site structure, not specific components. The structure is as follows in the /css folder:

* /base
* /components
* /layout

Let's look at these folders, and how the LESS files inside each are intended to be used. 

### The files in /base and their intended use:

* **_code.scss** - This contains the common CSS selectors used to display *Code* visually on your site. If you need to edit or add custom *Code* related CSS, it should be placed in this file.
* **_font-awesome.scss** - This is a `@mixin` file containing icons that can be added to elements. To use this on any CSS selector, use the `@include icon-name;` on the selector, and the icon will be added, as a font based icon. To see the icons included, visit http://fortawesome.github.com/Font-Awesome/. The names are included beside the icon samples.
* **_forms.scss** - This contains the common CSS selectors used to display Forms visually in html. If you need to edit or add custom *Form* related CSS, it should be placed in this file.
* **_mixins.scss** - This is a `@mixin` file containing common and CSS3 styles that can be applied to your theme. To use this on any CSS selector, use the `@include mixin-name;` on the selector, and the *@mixin* will be added. For example `@include inline-block;` will add all the needed css for a IE7+ compatible `display: inline-block;` display. This is where you would add your own custom *@mixin* or find ones to use.
* **_tables.scss** - This contains all common CSS selectors used to display *Tables* visually on you site. If you need to edit or add custom *Table* related CSS, it should be placed in this file.
* **_type.scss** - This contains all *Typography* styles for your site, including base fonts, headings, and more. If you need to edit or add custom *Type* related CSS, it should be placed in this file.
* **_variables.scss** - This contains the *Variables* used in the other CSS selectors, for example, theme specific colors. If you need to edit or add custom *Variables*, they should be placed in this file.


### The files in /base and their intended use:

* **_accordion.scss** - This contains the common CSS selectors used to display *Accordions* visually on your site. If you need to edit or add custom *Accordion* related CSS, it should be placed in this file.
* **_alerts.scss** - This contains the common CSS selectors used to display *Alerts* or *Messages* visually on your site. If you need to edit or add custom *Alert* related CSS, it should be placed in this file.
* **_breadcrumbs.scss** - This contains the common CSS selectors used to display *Breadcrumbs* visually on your site. If you need to edit or add custom *Breadcrumbs* related CSS, it should be placed in this file.
* **_buttons.scss** - This contains the common CSS selectors used to display *Buttons* visually on your site. If you need to edit or add custom *Button* related CSS, it should be placed in this file.
* **_media.scss** - This contains the common CSS selectors used to display all *Media*, like images, videos, flash, audio, overlays, etc type components visually on your site. If you need to edit or add custom *Media* related CSS, it should be placed in this file.
* **_sprites.scss** - This is where you should put the CSS related to *Sprite Images* used on your site.
* **_rotato.scss** - This contains the common CSS selectors used to display *Rototo's* or *Slideshows* visually on your site. If you need to edit or add custom *Rotato* or *Slideshow* related CSS, it should be placed in this file.
* **_labels-badges.scss** - This contains the common CSS selectors used to display *Labels* visually on your site. If you need to edit or add custom *Lable* related CSS, it should be placed in this file.
* **_navs.scss** - This contains the common CSS selectors used to display *Navigation* or *Menus* visually on your site. If you need to edit or add custom *Navigation* related CSS, it should be placed in this file.
* **_pager.scss** - This contains the common CSS selectors used to display *Pager* visually on your site. If you need to edit or add custom *Pager* related CSS, it should be placed in this file.
* **_Tabs.scss** - This contains the common CSS selectors used to display *tabs* visually on your site. If you need to edit or add custom *tabs* related CSS, it should be placed in this file.
* **_elements.scss** - This is where you should put the CSS related to the custom *Elements* the do not fall into the files above, which are used on your site.


### The files in /layout and their intended use:

* **_grid.scss** - This contains the *Grid* settings for your site, along with the *Media Queries* for the site. You should use this file to layout the sites grid structure as well as block placement. It is recommended to keep the style and placement of block elements separated, allowing quick placement of blocks, and then style is based on the type of block is in the appropriate LESS file.
