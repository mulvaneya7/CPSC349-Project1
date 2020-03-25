# Foodies
Project 1 - CSUF Web-Front end<br/>
Team: Gregorious_Git<br/>
Alex Mulvaney - Team Leader<br/>
Geonhyeong Park<br/>


Front end tools:
Bootstrap 4
Navbar component with php to handle linking pages through nav links as well as using php to switch active tabs on the navbar. The navbar is also collapsable and responsive to the user’s display
Jumbotron to handle the headers on the Home tab as well as the Submit tab
Card component to handle the recipe cards that a user can either see or upload their own recipe. Upload on the Submit tab, or view recipes in the directory of recipes on the home tab.
Input Groups to handle the input from users on the Submit tab in which a user can input an image, title, and recipe text to be added to the total directory of recipes, as well as the input on the signin and registration pages
Grid and column system The overall layout of the app was designed using bootstrap’s responsive grid system of columns.

Font Awesome
Arrow icons grabbed from the directory of icons that FA offers, used to cycle through the directory of recipes you can add to your own personal library
Fishy on the Signin page



Back end tools:
PHP
Using phpMyAdmin to create a database, create database tables and maintain the database, also allowing to host a database locally or remotely on a server. 
Using php, we allow users to upload their own recipes by storing the information (image, title, recipe text) in a database hosted on the school server with a post method.
Handling the verification process of signing in existing users within the database
SQL
Using SQL queries within php scripts to store the users and passwords, recipe information such as: recipe title, recipe picture, and the recipe description. 
Using queries to pull data to populate the library.
Using queries to also submit recipes to the database through the submit option in the Navbar.
