# Library Management System 

## Description
This project is a **Library Management System** built with **Laravel**. It allows users to manage **Books**, **Authors**, and **Categories** with full **CRUD operations** (Create, Read, Update, Delete). The system also supports **many-to-many** relationships between books and categories, and **one-to-many** relationships between authors and books, with **soft delete** functionality.

### Key Features:
- **CRUD Operations**: Create, read, update, and delete books, authors, and categories.
- **Many-to-Many Relationship**: Books can belong to multiple categories, and categories can have multiple books.
- **One-to-Many Relationship**: Each book is associated with one author, and authors can have multiple books.
- **Soft Deletes**: Soft delete functionality to prevent permanent data loss.

### Technologies Used:
- **Laravel (PHP Framework)**
- **MySQL** for database management
- **Composer** for dependency management

### Installation
1. Clone the repository:
   **git clone https://github.com/anasver/library.git**
   **cd library**

2. Install dependencies:
   Run the following command to install all the required dependencies.
   **composer install**   

3. Environment Setup:
   Update the .env file with your database information:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=library
   DB_USERNAME=root
   DB_PASSWORD=your_password

4. Run Migrations:
   Run the following command to create the database tables.
   **php artisan migrate** 

5. Database Seeding (Optional):
   To seed the database with some initial data, run:
   **php artisan db:seed**    

6. Run the Application:
   Start the local development server.
   **php artisan serve**   

    The application should now be accessible at http://127.0.0.1:8000.




## pages
1. Authors Management:
   - Create, edit, delete,soft delete,show and list authors.
   
2. Books Management:
   - Add new books, assign them to authors, and categorize them.
   - Update,delete,soft delete and show existing books .
   
3. Categories Management:
   - Create, edit, delete,soft delete,show and list categories.
   - Assign books to one or more categories.

