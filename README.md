## Laravel Roles Permissions Admin - Spatie version
This is a Laravel 9 adminpanel starter project with roles-permissions management based on [Spatie Laravel-permission package](https://github.com/spatie/laravel-permission).
we are using spatie GitHub package for roles and permissions in laravel 9 application. just follow bellow step to create acl in laravel 9.
</br>
Spatie role permission composer package provides a way to create ACL in laravel 9. they provide how to assign role to user, how to assign permission to user and how to assign permission assign to roles. 

## Project Setup
- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data - see below)
- That's it: launch the main URL and login with default credentials `admin@gmail.com` - `123456`

So, You've got the project of Laravel Role & Permission Management on your http://localhost:8000

## How it works
1. Login using Admin Credential -
    1. Username - `admin@gmail.com`
    1. Password - `12345678`
2. Create User
3. Create Role
4. Assign Permission to Roles
5. Assign Multiple Role to an admin
6. Check by login with the new credentials.

### Login & Dashboard Page
![alt text][adminLoginImage]
![alt text][dashboardImage]

[dashboardImage]: https://i.ibb.co/WyxWFp7/1-Laravel-Role-Dashboard.png "Dashboard Page Laravel Role Management"
[adminLoginImage]: https://i.ibb.co/4g4vs4g/7-Login-Page.png "7-Login-Page"
