Guide for using acf in wordpress (wygd as example): 

1- inc/acf/config.php => *- setting up the custom option page (found under settings)
						 *- hiding/ showing acf plugin 
						 *- 
2- inc/helpers/<website>.php => *- group of functions to make acf functions easy to use 
								*- partials() function to call template part
								*- get_page_structure() shortcode for row loop + template part include
								*- theme() function to help you get all fields/subfields/layouts 
3- functions.php => *- using php class to call all the functions
					*- 
4- page.php => *- call get_page_structure() and pass inside it the name of your custom field (flexible content)	
			   *- in wordpress backend create the custom field with flexible layoutS 
			   *- remember this function is including template part which is inc/blocks/<name of the layout>
			   *- Example: create acf 'Page Structure' and layout 'Text' and create in inc/blocks/text.php
			   *- now every page you create in wordpress you choose which block its gonna take
5- page-template => *- old fashion way 
6- blocks/<layout name>.php => *- these are going to be the face of your pages OR 
							   *- going to pull whatever you need from the custom posts (featured images/ categories ...)




PS: the code in this guide is not meant to be for actual use it is just a guide code

#Nour
																					