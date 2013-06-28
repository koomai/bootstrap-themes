Twitter Bootstrap themes for Wardrobe
================

This is a basic Twitter Bootstrap theme with a two-column layout for [Wardrobe](http://wardrobecms.com). It uses most of Bootstrap's styles with minimal overrides.

The sidebar includes a Twitter follow button, links to previous posts and a list of tags.

Default theme:

![Default Bootstrap theme](http://i.imgur.com/DIVYCJr.png)

You can also swap the styles with all of the free themes available at [Bootswatch](http://bootswatch.com/). The CSS files are already included in the download.

Cyborg theme:

![Cyborg theme from Bootswatch](http://i.imgur.com/5HRM6Vo.png)

**How to install**

1. Install [Wardrobe](http://wardrobecms.com) 
2. Download and copy this repo into the */public/themes* folder. Rename it to something simpler like *bootstrap-themes*
3. Go to */apps/config/wardrobe.php* and set theme to *bootstrap-themes* (or whatever you name the folder above) 
4. (Optional) If you want to use one of Bootswatch's themes, open the *config.php* file in the theme folder and change *bootstrap-theme* from *default* to any of the available options:
   
          /*
          |--------------------------------------------------------------------------
          | Active Bootstrap Theme
          |--------------------------------------------------------------------------
          |
          | Set this to the default bootstrap theme or one of the Bootswatch themes. 
          | Options are: default, amelia, cerulean, cosmo, cyborg, default, flatly, 
          | journal, readable, simplex, slate, spacelab, superhero and united
          | For more about Bootswatch themes, go to http://bootswatch.com
          |
          */
          'bootstrap-theme' => 'default',
