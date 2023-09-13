# module-connexion-b2

This project is a user login module developed in PHP and MySQL. It allows users to create an account, log in, and modify their personal information.

## Database Configuration

- Make sure you have set up a MySQL database named "moduleconnexionb2."
- Create a table named "user" with the following fields:
  - id (int, primary key, auto-increment)
  - login (varchar, 255)
  - firstname (varchar, 255)
  - lastname (varchar, 255)
  - password (varchar, 255)

## Project Pages

1. **Home (index.php)**: Homepage of the site.
2. **Registration (inscription.php)**: Allows users to create an account with form validation.
3. **Login (connexion.php)**: Login form with session management.
4. **Profile (profil.php)**: Allows users to modify their personal information.
5. **Administration (admin.php)**: Page reserved for the administrator to display information for all users.

## Object-Oriented Programming

This project follows the object-oriented programming paradigm. A "User" class is used to represent a user.

## Design and HTML

The project includes CSS styling for an enhanced user experience.

## Security

SQL queries are secured to prevent vulnerabilities. Passwords are securely hashed.

## Advanced Features 

- Real-time form validation without page reload.
- Profile information modification without page reload.
- Form security enhancements (e.g., CSRF tokens).

## SQL File

The structure and data content of the database are provided in the "moduleconnexion.sql" file.

## Important Note

Authentication systems are security-sensitive. Ensure you follow best practices and conduct security testing.

---

Thank you for checking out my project! If you have any questions or feedback, feel free to reach out.
