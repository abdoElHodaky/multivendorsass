<p align="center">
        <img src="https://raw.githubusercontent.com/lpkapil/storemanager/master/public/demo_images/banner.png">
</p>

## About Application

It's Store manager web application based on Software as service model. Multiple online stores can be created for sellers as a service, REST API exposed for creating store mobile application to sell goods & a dedicated admin panel available for sellers to manage store, It's Developed using Laravel v7.15.0. 

###### Completed

- User/Seller Login/Registration Module 
- Customer/Buyer Login/Registration
- Contacts Management Module
- User Management Module
- Role Management Module
- Role Permision Management Module
- Store Mangement Module
- Category Mangement Module
- Product Management Module
- Order Mangement Module
- Frontend purchase flow

###### In-Progress

- Sales Report Management Module

###### To-do

- Enhancement in User Module and Order Module For Customer Details Mapping
- Storewise Customers Management Module
- Customer Notification Management Module
- Payment Methods Mangement Module
- Announcement/Blog/News Management Module
- Support and Contact Module
- MyStore Contact Page Functionality
- POC of googlepay payment method for sellers online payment method in store

###### Summary of completed modules 

Three differenet roles Admin/User/Customer will automatically added in system and both Admin and User have differnet dashboard according to assiged permissions in roles. On new user registration a confirmation email will be sent to the registered email address, Account will activate only when user will click on activation link sent in email address.

## Installation Procedure


- Create Virtual Host & Host Entry in apache configuration and host file and restart apache server

```
<VirtualHost *:80>
        ServerAdmin webmaster@example.com
        ServerName multivendorsass.com
        ServerAlias multivendorsass.com
        DocumentRoot /var/www/html/multivendorsass/public/
        <Directory /var/www/html/multivendorsass>
                AllowOverride all
                Require all granted
        </Directory>
</VirtualHost>
```

``

`service apache2 restart`

- Run below command after navigating to application root for refreshing application key & installing database

`composer install`

`php artisan key:generate`

`php artisan migrate:refresh --seed`

`cd public`

`rm -rf storage`

`cd ..`

`php artisan storage:link`

- Storage:link command needs to be run first time, and it's used when application using media upload feature, it created symlink of internal image folder to public folder, so images can access via url from internal app stoage folder.

- Open application using URL

`https://larvmultivendor.onrender.com`

## Login Details

#### Admin #### 

Username: admin@example.com
Password: admin

#### User/Seller ####

Username: user@example.com
Password: user

#### Customer ####

Username: customer@example.com
Password: customer

## Demo Screens

![Demo Screens]()

## Donate and Support
