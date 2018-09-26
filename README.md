# q2a-hide-users-list
Question2Answer plugin for hiding users list from anonymous visitors and not confirmed users

Usualy, closed access sites neet to hide list of users for privacy issues. This plugin does just that.

When plugin is installed and enabled, visotors that are not logged in and user that are not confirmed will not see Users menu option. 

More than that, if user tries to access users list or user profile by typing URL of the page it will also be protected.

Works with Question2Answer version 1.8.0. Not tested with earlier versions.

HOW TO USE

Install this plugin by copying it to qa-plugin/qa-hide-users-list directory and enable it using Question2Answer site admin.

ISSUES

I could not find proper way to obtain directory path for plugin so I had to hardcode that path to load replacement page for Users which is located within this plugin directory. Suggestions how to overome this are welcome.
