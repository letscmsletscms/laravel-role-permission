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
![login](https://user-images.githubusercontent.com/114886009/202374406-92630b22-815f-40b8-9531-b19901178ab7.png)
![dashboard](https://user-images.githubusercontent.com/114886009/202374746-b36e8495-c8d8-4c8d-a6d9-e7f6520b0304.png)

### User Module
![1-createUser](https://user-images.githubusercontent.com/114886009/202374689-177fb932-8a2c-4d4c-875a-15dc9b3796cc.png)
![2-listUser](https://user-images.githubusercontent.com/114886009/202374699-fa697813-df47-486c-990f-744af79a9fe3.png)
![3-showUser](https://user-images.githubusercontent.com/114886009/202374710-9fc1de41-e37f-4249-9019-e1cd2c7c370b.png)
![4-editUser](https://user-images.githubusercontent.com/114886009/202374715-c22cd08d-45be-46ef-b584-080a98a6c94d.png)
![5-updarteUser](https://user-images.githubusercontent.com/114886009/202374729-2f4e5781-ceea-46bd-aec7-e6ed8ba2abe0.png)
![6-deleteUser](https://user-images.githubusercontent.com/114886009/202374741-3b590675-9dd8-4377-a734-e2beb9306ed4.png)

### Permission Module
![1-listPermission](https://user-images.githubusercontent.com/114886009/202374691-60332081-ed4a-4207-ae0e-4197baac0f79.png)
![2-createPermission](https://user-images.githubusercontent.com/114886009/202374695-9ec81efe-afdd-469e-83e8-83a7c3ed954f.png)
![3-eidtPermission](https://user-images.githubusercontent.com/114886009/202374704-23f7a2e6-f547-4435-b836-cbe3ce79548c.png)
![4-updatedPermission](https://user-images.githubusercontent.com/114886009/202374717-60e163d0-e98b-4f97-a276-e7289f8cdf99.png)
![5-deletePermission](https://user-images.githubusercontent.com/114886009/202374722-a15bdc3a-e4e3-4903-b6cd-c7a41dfa7782.png)

### Role Module
![1-createRole](https://user-images.githubusercontent.com/114886009/202374686-d2b4c083-bd86-4c91-a510-3c4d107877a8.png)
![2-listRole](https://user-images.githubusercontent.com/114886009/202374697-4ce3b738-4fbb-4cd0-9e05-ed51df5348da.png)
![3-showRole](https://user-images.githubusercontent.com/114886009/202374705-2fd991c7-bba5-4418-b685-5cb82a4b837b.png)
![4-editRole](https://user-images.githubusercontent.com/114886009/202374713-f76b6475-632c-4616-97ad-399e01da71e2.png)
![5-updateRole](https://user-images.githubusercontent.com/114886009/202374732-2cd01817-bb3c-41d0-9d58-e7c7dfa74c05.png)
![6-deleteRole](https://user-images.githubusercontent.com/114886009/202374736-31aba7a1-339e-46c2-9d2a-d35c6b241e98.png)

## Contact Us
Website: https://www.letscms.com/
Email: Letscmsdev@gmail.com


