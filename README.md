# Popholic Web Development Project

## Overview

Welcome to the Popholic Web Development Project! This project is a web-based platform for a collectibles store, featuring Funko Pop and Banpresto products. It includes various functionalities such as product browsing, user registration, account management, testimonials, forums, and more.

## Tech Stack

- HTML
- CSS
- PHP
- MySQL
- JavaScript
- XAMPP (v8.0.1)
  - Apache
  - MySQL Database (PHPMyAdmin)

## Getting Started

1. Clone the repository or download the project files.
2. Set up XAMPP with Apache and MySQL.
3. Import the provided database into PHPMyAdmin.
4. Run the project using your preferred web server.

## Test Accounts

### User Account

- Email: user@gmail.com
- Password: User1234

### Admin Account

- Email: admin@popholic.my
- Password: Admin1234

## Project Structure

### Home Page

- Displays featured products of Funko Pop & Banpresto.
- Allows users to choose the quantity and add products to the cart.
- Includes navigation to different pages.

### Header

- Includes top navigation, logo, and navigation bar.
- Navigation options vary based on user login status.

### Top Navigation

#### Situation 1: User Not Logged In

- Shows Log in, Register, and Cart.
- Clicking the cart redirects to the login page.

#### Situation 2: User Logged In

- Shows Account, Log Out, and Cart.
- Allows access to the account page.
- Enables user logout and returns to Situation 1.

### Navigation Bar

- Includes Home, Product (with dropdown for Funko Pop & Banpresto), About Us, Contact Us, FAQ, Forum, and Testimonial.
- All elements function as hyperlinks.

### Product Page

- Displays products retrieved from the database.
- Includes quantity and add to cart functionality.
- Allows filtering and sorting options.

### Testimonial Page

- Displays reviews from Facebook customers and website customers.
- Includes a button to post a review, redirecting to the form page.

### Forum (Question & Answer)

- Displays customer questions.
- Shows 'No replies yet' for unanswered questions.
- Includes a button to post a question, redirecting to the form.

### Contact Us Page

- Displays contact information as hyperlinks.
- Includes a form for user enquiries (not posted publicly).

### Account Page

- Displays customer details.
- Allows editing of customer details (excluding username & email).
- Accessible only to logged-in users.

### Login Page

- Allows users to log in with existing accounts.
- Differentiates between normal users and admin users.
- Redirects users based on their role.
- Auto-logs out after 30 minutes of inactivity.

### Register Page

- Allows users to register a new account.
- Checks for existing email/username, password match, and valid input.
- Enforces unique username, valid email, and strong password criteria.
- Uploads data to the database for user login.

### Admin Control Page

- Accessible only to admin users.
- Auto-logs out after 10 minutes of inactivity.
- Allows viewing, adding, and editing products.
- Allows viewing and replying to forum questions.
- Allows viewing and replying to customer enquiries via email.
- Allows viewing and deleting customers' testimonial submissions.

_Coursework for WEB2202 Web Programming (August 2021 - December 2021)_





