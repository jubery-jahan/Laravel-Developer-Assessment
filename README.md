# Laravel-Developer-Assessment
Prerequisites:
1. PHP and Composer installed
2. A database server MySQL with a database created
3. Git installed on your system
Steps:
1. Clone the Git Repository : Open a terminal or command prompt and navigate to the directory where you want to clone the project. Use the following command, replacing <git_repository_url> with the actual URL of your Git repository: git clone <git_repository_url>
2. Navigate to the Project Directory : Once the cloning is complete, change directories to the cloned project using the cd command: cd <project_name>
3. Install Composer Dependencies : Composer manages PHP dependencies for Laravel projects. Run the following command to install all required dependencies: composer install
4. Configure the .env File : Laravel uses the .env file to store environment variables like database credentials. Copy the .env.example file to .env: cp .env.example .env
   Open the .env file in a text editor and update the DB_DATABASE value: DB_DATABASE=vat-calculator
5. Generate Application Key : Laravel uses an application key for encryption purposes. Run the following command to generate a new key: php artisan key:generate
6. Migrate the Database : run the command : php artisan migrate
7. Run the following command to start a development server that allows you to access your application in your web browser:  php artisan serve
   This will typically start the server on http://localhost:8000 (or the port specified in your .env file).
8. Frontend code : recources > views  
