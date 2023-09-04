# Laravel Data Import/Export Project

This repository contains a Laravel project designed for data import and export operations. It leverages Laravel and the Laravel Excel package to efficiently handle data transfer to and from various sources.

## Table of Contents

-   [Features](#features)
-   [Prerequisites](#prerequisites)
-   [Getting Started](#getting-started)
-   [Usage](#usage)
-   [Folder Structure](#folder-structure)
-   [Configuration](#configuration)
-   [Contributing](#contributing)
-   [License](#license)

## Features

-   Import data from CSV or text files.
-   Export data to CSV or Excel files.
-   User-friendly web interface for data import.
-   Customizable data import logic.
-   Simple and clean codebase built with Laravel.

## Prerequisites

Before you begin, ensure you have met the following requirements:

-   [Composer](https://getcomposer.org/): Ensure that Composer is installed on your system.
-   [PHP](https://www.php.net/): This project is built using PHP, so make sure you have a compatible version installed.
-   [Laravel](https://laravel.com/): Laravel should be installed in your project. You can install it using Composer.

## Getting Started

1. Clone the repository:

    ```bash
    git clone https://github.com/diusazzad/laravel-data-import-export.git
    ```
2. Navigate to the project directory:

    ```bash
    cd laravel-data-import-export
    ```

3. Install project dependencies using Composer:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to create a `.env` file:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Configure your database connection by editing the `.env` file and setting the database credentials:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

7. Run database migrations to create the necessary tables:

    ```bash
    php artisan migrate
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

9. Access the application in your web browser at `http://localhost:8000`.

## Usage

-   To import data, visit the import page and upload a CSV or text file.
-   Customize the data import logic in the `ImportController` and `DataImport` class as per your requirements.
-   For exporting data, create a route, controller, and view for exporting data to CSV or Excel files. You can use the `Excel::store()` method to save the exported file.

## Folder Structure

The project follows the standard Laravel folder structure:

-   `app/`: Contains application-specific code, including models, controllers, and import/export logic.
-   `config/`: Configuration files for Laravel and any custom configurations.
-   `database/`: Database migrations and seeders.
-   `resources/`: Front-end assets, views, and Blade templates.
-   `routes/`: Route definitions.
-   `storage/`: Temporary storage for uploaded files and logs.
-   `tests/`: Unit and feature tests.
-   `vendor/`: Composer dependencies.

## Configuration

-   **Database Configuration**: Update the database connection settings in the `.env` file to match your database setup.

## Contributing

Contributions are welcome! Feel free to open issues or pull requests to improve this project.

## License

This project is open-source and available under the [MIT License](LICENSE).
