banoffee
========

Web Templates using SASS

========

Creates a basic template called using a few bits of SASS->CSS

========

VERY INCOMPLETE DOCUMENTATION (NEEDS A LOT OF WORK - not up to date)


####
body
####
main.scss defines body,
	background = "project/page_setup.scss" > $setup_background
	font-family = "project/page_setup.scss" > $setup_font
	padding/margin = "project/page_setup.scss" > "sizes.scss" > mixin: no_Gaps
	define_area
####

####
define_area(height,width,color)
defines the basic appearance of a basic area
####

Objects are physical items, which have a physical appearance, where as classes are styles etc

@import "lib/objects/primary/primary.scss"; //Includes reference to all primary classes
@import "lib/objects/ext/ext.scss"; //Includes reference to all extention classes (extending primary)


Classes
-------
boxer
	This is simply an area which fits in the middle by putting margin:0 auto and setting a max-width of 1170
	User mixin define_boxer(max_width) to override default
