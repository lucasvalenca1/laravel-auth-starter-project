<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## **Employer Network**

### **About This Project**
Employer Network is a Laravel-based application that demonstrates CRUD (Create, Read, Update, Delete) operations by managing employees and their associated dojos. Originally designed to manage "Ninjas," the front-end text has been updated to reflect "Employees" for demonstration purposes.

**Key Features**:
- **Employee Management**: Add, view, and delete employees.
- **Dojo Association**: Dynamically link employees to specific dojos.
- **User-Friendly Interface**: Clean design with intuitive navigation.

---

## **Screenshots**

### **Employee List**
![Employee List](screenshots/employee-list.png)

### **Create New Employee**
![Create New Employee](screenshots/create-employee.png)

---

## **Installation**

### **1. Clone the Repository**
git clone https://github.com/lucasvalenca1/employer-network.git

text

### **2. Install Dependencies**
composer install
npm install

text

### **3. Configure Environment**
Copy `.env.example` to `.env` and update your database credentials:
cp .env.example .env

text

### **4. Run Migrations**
php artisan migrate

text

### **5. Seed Database (Optional)**
Populate sample dojos:
php artisan db:seed --class=DojoSeeder

text

### **6. Start the Server**
php artisan serve

text
Access the app at: `http://127.0.0.1:8000`.

---

## **Usage**

### **1. View Employees**
- Navigate to `/employers` to see all employees.

### **2. Create an Employee**
- Go to `/employers/create`, fill out the form, and submit.

---

## **Technologies Used**
- **Backend**: Laravel 11, PHP 8.2
- **Database**: MySQL (via phpMyAdmin)
- **Frontend**: Bootstrap

---

## **Contributing**
Contributions are welcome! Fork this repository, make your changes, and submit a pull request.

---

## **License**
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

**Created by [Lucas Valença](https://github.com/lucasvalenca1)**  
*This project is for educational/demonstration purposes.*
