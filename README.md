# Tasks for Today Management System

## IT0049 - Web System Technologies

The Tasks for Today Management System is a simple web-based task management application developed using CodeIgniter 4 and MySQL.

The system demonstrates the use of the Model-View-Controller (MVC) architecture and database retrieval using CodeIgniter.

## Features

The system contains four main pages:

- **Welcome Page (`/`)** - Displays only tasks scheduled for the current date.
- **Task List (`/tasks`)** - Displays all tasks stored in the database.
- **Profile (`/profile`)** - Displays the information of the demo user.
- **About (`/about`)** - Displays information about the system and its developer.

## Technologies Used

- PHP
- CodeIgniter 4
- MySQL
- HTML
- CSS
- XAMPP
- phpMyAdmin

## Database

The application uses a MySQL database named:

`tasks_for_today`

The database contains two tables:

### tasks

- id
- title
- status
- task_date
- created_at

### users

- id
- username
- full_name
- email
- created_at
