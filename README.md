# champions-league-team-fixtures
A small laravel project that display a multiple teams divided equally in counts of 4 among different groups and displayed in a view.

### Installation Instructions
___
##### Prerequisites:
* Server: [LAMP Server](https://phoenixnap.com/kb/how-to-install-lamp-stack-on-ubuntu)
* Version Control: [Git](https://www.atlassian.com/git/tutorials/install-git#linux)
* Other Packages: 
a. Composer
b. [Npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm) or [Yarn](https://yarnpkg.com/en/docs/install#debian-stable)


##### Steps for Installation
1. Clone the git repository in your server root folder using the following command -  `git clone https://github.com/ruturajhaval/champions-league-team-fixtures.git`
2. Create database for the project by name of **champions_league**. *For this Project, MySql Database is used*.
3. Update the project url (http://localhost/champions-league-team-management/ OR http://your-ip/champions-league-team-management) and database config in .env file in project root directory.
4. Run the following commands in project root directory:
a. `composer install`
b. `npm install`
c. `php artisan migrate`
d. `php artisan db:seed -t TeamDetailsSeeder`
e. `sudo chmod -R 777 storage/logs/`
f. `ln -s ../../node_modules/bootstrap/ public/css/bootstrap`
5. Run the application in browser at http://localhost/champions-league-team-management/ OR http://your-ip/champions-league-team-management
