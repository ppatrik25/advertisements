DOCUMENTATION

1. Installation

Clone the project repository to your web server's root directory.

Create a MySQL database and import the provided SQL schema located in the advertisements_db.sql file in the database folder.

Configure the database connection in the config.php file by setting the appropriate values for hostname, username, password, database.

Ensure that your web server is configured to allow .htaccess files and URL rewriting.

2. Project Structure

The project directory structure is organized as follows:

.htaccess: Handles URL rewriting for clean URLs.
index.php: The entry point for routing and controlling requests.
config.php: Contains database configuration settings.
controllers/: Contains PHP controller classes.
models/: Contains PHP model classes for database interactions.
views/: Contains PHP view templates for rendering HTML.
style.css: Contains minimal CSS styles.

3. Controllers

Controllers, located in the controllers/ directory, handle user requests, process data, and determine which view to render.
Each controller corresponds to a specific resource or functionality in the application.
Controller actions are responsible for defining the logic for each page.

4. Models

Models, located in the models/ directory, encapsulate database interactions.
They provide methods for fetching data from the database.
Models ensure separation of concerns between data access and controller logic.

5. Views

Views, located in the views/ directory, contain HTML and PHP templates for rendering the user interface.
Each view corresponds to a specific page or resource in the application.

6. Routing

URL routing is achieved using the .htaccess file, which maps clean URLs to controller actions.
Example URLs:
/users: Displays a list of users.
/advertisements: Displays a list of advertisements.
