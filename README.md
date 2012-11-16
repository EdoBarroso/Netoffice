Netoffice
=========

Base Netoffice installation, but now (partially) working under PHP 5. Uses the latest version of JPGraph.

I just added some exceptions to Gantt plotting, so if there's one or more tasks without due date, it shows an error message.
There are still some deprecated functions.

## Environment

* Windows: Works perfectly under Appserv by default.
* Linux: Remember to install MS TrueType Fonts under your system.

**Note:** Check your fonts path and change it (if neccesary) in <tt>includes/jpgraph/jpg-config.inc.php</tt>. By default, TrueType fonts path in Debian is <tt>/usr/share/fonts/truetype/msttcorefonts/</tt>