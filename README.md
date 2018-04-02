# form-hubspot
This include allows you to build forms in WordPress with the Advanced Custom Fields PRO plugin and link those to HubSpot forms through the API. This also creates a button in the WYSIWYG editor of WordPress to easily allow you enter a form wherever you want using a shortcode.

# You must have the advanced custom fields PRO plugin for this to work

To setup:
Go into the formHandler.php file and change your HubSpot portal ID to your portal ID. 

Next, go to WordPress and create your form through the "Forms" post type. 

You will then need to create the form in HubSpot that it will link up to, copy out the Form GUID after creation. This can be found in the URL when viewing the form in HubSpot.

Enter the form GUID into the WordPress form and set a redirect URL.

This is still a work in progress, but it works for what I need it do. Feel free to use this however you want and adjust the code to your fit.
