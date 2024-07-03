### Mabeet

**Mabeet** is a web application built using the Laravel framework. It's designed to help users find residential units available for living in the holy cities of Mecca and Medina. This project aims to provide a comprehensive and user-friendly platform for locating, viewing, and managing living spaces in these cities.

## Table of Contents

* [Introduction](#introduction)
* [Features](#features)
* [Technologies Used](#technologies-used)
* [Installation](#installation)
* [License](#license)

## Introduction

Mabeet is a Laravel-based application that facilitates the search for living units in Mecca and Medina. It offers a range of features to help users find and manage residential properties with ease.

## Features

* **User Registration and Authentication:** Secure user login and registration system.
* **Unit Listings:** View and search for available residential units in Mecca and Medina.
* **Unit Details:** Detailed information about each unit, including photos, amenities, and pricing.
* **Favorites:** Save favorite units for quick access later.
* **Contact Owners:** Contact property owners or agents directly through the platform.
* **Admin Dashboard:** Manage unit listings, user accounts, and application settings.

## Technologies Used

* **Framework:** Laravel
* **Languages:** PHP, JavaScript
* **Database:** MySQL
* **Front-end:** Blade Templating, HTML, CSS
* **Version Control:** Git

## Installation

Follow these steps to set up the project on your local machine:

1. **Clone the Repository:**

```bash
git clone [https://github.com/yourusername/mabeet.git](https://github.com/yourusername/mabeet.git)
cd mabeet
```
2. **Install Dependencies:**

```bash
composer install
npm install
```

3. **Copy the .env File:**
   
```bash
cp .env.example .env
```

4. **Generate Application Key:**
   
```bash
php artisan key:generate
```

5. **Set Up Database:**

- Create a new MySQL database.
- Update the `.env` file with your database credentials:

```bash
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```
6. **Run Migrations and Seed Database:**

```bash
php artisan migrate --seed
```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.




