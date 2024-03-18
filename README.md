### Car Rental System

This is a web application for a car rental system, built for educational purposes for studying full-stack web development.
This project was inspired by the "Advanced Web Development with PHP, Laravel, and Vue.js" course on Udemy, taught by Jorge Sant Ana.

#### Technologies Used
- **Backend**: Laravel
- **Frontend**: Vue.js
- **Database**: MySQL

#### Features

- User authentication and authorization
- CRUD operations to manage cars, clients, rentals, brands, and models.

#### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/analiviagarbin/locadora-carros-app.git
   ```

2. Navigate to the project directory:

   ```bash
   cd locadora-carros-app
   ```

3. Install backend dependencies:

   ```bash
   composer install
   ```

4. Install frontend dependencies:

   ```bash
   npm install
   ```

5. Configure environment variables:

    - Copy the `.env.example` file to `.env`:

     ```bash
     cp .env.example .env
     ```

   - Update the database and other configuration variables in the `.env` file.

7. Generate the application key:

   ```bash
   php artisan key:generate
   ```

8. Run the database migrations:

   ```bash
   php artisan migrate
   ```

9. Compile frontend assets:

   ```bash
   npm run dev
   ```

10. Start the application server:

    ```bash
    php artisan serve
    ```

11. Access the application in your browser at `http://localhost:8000`.
