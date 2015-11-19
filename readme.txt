=== Easy-to-use ===
Contributors: webvitaly
Donate link: http://web-profile.com.ua/donate/
Tags: usability, ux, password, remember, rememberme, remember-me, unmask, login, register, registration, form, easy-to-use
Requires at least: 3.0
Tested up to: 4.5
Stable tag: 2.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Unmasks password inputs, enables 'remember-me' by default, sets login interval to 1 year.

== Description ==

> [WordPress Pro plugins](http://codecanyon.net/popular_item/by_category?category=wordpress&ref=webvitaly) |
> [Easy-to-use](http://web-profile.com.ua/wordpress/plugins/easy-to-use/ "Plugin page") |
> [Donate](http://web-profile.com.ua/donate/ "Support the development")

= Improvements made by the plugin: =
* unmasks password inputs on focus (login and admin sections)
* enables "remember me" checkbox by default
* sets login interval to 1 year
* hilites the focused inputs (login and admin sections)


= Useful: =
* ["Anti-spam" - block spam in comments](http://wordpress.org/plugins/anti-spam/ "no spam, no captcha")
* ["Page-list" - show list of pages with shortcodes](http://wordpress.org/plugins/page-list/ "list of pages with shortcodes")
* [WordPress Pro plugins](http://codecanyon.net/popular_item/by_category?category=wordpress&ref=webvitaly)

== Frequently Asked Questions ==

= Why password should be unmasked? =

There will be less mistakes during login if user will see the password while typing. [Jacob Nilsen about stop masking the password](http://www.nngroup.com/articles/stop-password-masking/)

= Why "remember me" should be enabled by default? =

[Has the time come to kill the "Remember me" check box and just assume that people using shared computers will simply logout? - David Heinemeier Hansson from 37signals](http://37signals.com/svn/posts/1920-has-the-time-come-to-kill-the-remember-me)

= Why do I need to increase login interval? =

By default WordPress sets login interval to 14 days.
It is annoying for the users to enter login credentials every 14 days and setting login interval to 1 year more usable.
If user forgot to logout on public computer it is possible to visit user's profile via link: http://site.com/wp-admin/profile.php and click "Log Out of All Other Sessions" button.

== Screenshots ==

1. login form before and after Easy-to-use plugin installation

== Changelog ==

= 2.0 - 2015-08-12 =
* code refactoring (OOP approach instead of procudural)
* add assets only in login and admin sections (removed from frontend to speedup websites)

= 1.8 - 2015-06-07 =
* increase login interval to 1 year
* move javascript to footer

= 1.7 - 2014-06-11 =
* unmask password fields loaded via ajax (thanks to Zane Matthew - the author of the [zM AJAX Login & Register](http://wordpress.org/plugins/zm-ajax-login-register/) plugin)
* enable by default 'remember-me' checkbox loaded via ajax

= 1.6 - 2014-05-27 =
* add unmasking of the password field and highlighting of the focused inputs to frontend section (add plugin scripts and styles to frontend section too)
* code refactoring

= 1.5 - 2014-04-12 =
* unmask password fields only on focus

= 1.4 - 2014-02-09 =
* minor updates

= 1.3 - 2013-07-14 =
* code refactoring

= 1.2 - 2012-10-28 =
* minor changes

= 1.1 =
* unmasking password inputs everywhere in admin section
* highlighting the focused inputs everywhere in admin section

= 1.0 =
* initial release

== Installation ==

1. install and activate the plugin on the Plugins page
2. use your site more easily
