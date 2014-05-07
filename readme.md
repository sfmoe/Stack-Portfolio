# Stack-Portfolio
## Wordpress theme used on moemartinez.com


I included the "Cleaner Gallery" plugin in the theme to override the gallery 
not trying to reinvent the wheel here. I did edit  some of the code to suit my needs.

I also included scssphp because i like writing my css in a easier manner. *and will eventually make it so you can update the colors from within the themes' option page.*

On the front-end it uses JQuery (again because who wants to work harder), freetile (for placing the gallery items on the page), and modernizr for modernizing.


## Theme related shortcodes



1. Hero
   Diagonal Split styled block with two images. (use media ids) [hero ids="111,222"]

2. Cleaner Gallery / Stack-Porfolio Gallery specific options. Still use \[gallery\] and the options are:
	- wrap, what element to wrap the gallery in
	- class, adds classes to the wrap
	- title, adds an h2 element to the gallery for "title"
	
3. Box, a reusable styled box that I can drop anywhere and it follows a styling set in css. I use it in my about page and home page. [box]text contained[/box]:
	- needs title and an image [box title='Moe Martinez' image='/blog/wp-content/uploads/2010/01/DSC_6116.jpg']
	- title is displayed as an h2
	- image can be either a url or id
	
