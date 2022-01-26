# minis
A minimalist social network made from scratch

*minis* is attempt at creating a minimalist social networking software. It's really bare-bones, with as few features and as little bloat as possible.

I made it completely from scratch, using no frameworks at all, and only one database wrapper library.

*minis* is entirely a "for the hell of it" kind of project. I made it for no reason and with no real goals in mind, and I don't assume anyone will ever see or want to use it.

I'm not hosting *minis* myself, but you can if you want.

## What *minis* has
* Users can post messages
* Users can address messages to other users
* Users can post replies to messages
* Users can delete their own messages
* Users have a name, an e-mail address, an avatar and a bio
* Users get a summary of how much was posted since their last visit
* Usable on mobile devices
* Lightweight (something like 20KB)
* Works without JavaScript! (JavaScript is only used for cosmetics and entirely optional)
* Still vaguely usable even with CSS disabled!

## What *minis* doesn't have
* No customizable feeds
* No friends lists
* No private messages
* No markup or HTML in messages
* No mentions or hashtags
* No like/dislike system
* No user groups
* No notifications
* No sharing
* No apps
* No ads

## Downsides
* No state-of-the art architecture or best practices
* Possibly messy code in a few places
* Probably full of bugs
* Probably even fuller of security holes

## Installing *minis*
1. Reevaluate your life choices.
2. Put all the files somewhere on your server (anything that runs PHP should work).
3. Set up the database by running `database.sql`.
4. Change the database configuration in `inc/config/config.php`.
5. In `inc/config/pages.php`, set `BASE_PATH` to point to your minis directory from your document root.
6. *minis* should now be up and running, I think!

## License and usage and stuff
LICENSED by MIT License.
