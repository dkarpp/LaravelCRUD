# Introduction
Laravel applications that perform CRUD operations using mySQL databases.

# crud-app
1. Run XAMPP for MySQL connection
2. Ensure that the database schema is up-to-date with the migration: `php artisan migrate`
3. Run the SeedProducts seeder to populate the database: `php artisan db:seed --class=SeedProducts`
4. Run `php artisan serve` to start.

# Navigation

1. Default navigation ("`/`") sends a prompt to chat gpt (openai API) with a poem request.
**NOTE:** must provide `OPENAI_SECRET` in the .env file.

2. Navigating to `/products` page displays 10 products per page with the ability to `create`, `read`, `update`, & `delete` products.
-Clicking on a product will take you to `/products/{id}` and display more product details.

