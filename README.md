# Electricity Bill Management Web Application

This is a simple web-based **Electricity Bill Management System** built using **HTML, CSS, JavaScript, PHP, and MySQL**.  
The system allows user registration, login, and electricity bill calculation based on consumed units.

---

## Functional Requirements

### 1. User Registration 
- User can register with a **username** and **password**.  
- Credentials are stored securely in a **MySQL database**.  

### 2. Login Page
- Users can log in with their credentials.  
- Login is validated against the database.  
- Successful login redirects the user to the **dashboard**.  

### 3. Electricity Bill Calculator 
- After login, users can enter the **number of units consumed**.  
- Bill is calculated based on the following slab rates:

| Units Range       | Rate (per unit) |
|-------------------|-----------------|
| 0 – 50            | Rs. 3.50        |
| 51 – 150          | Rs. 4.00        |
| 151 – 250         | Rs. 5.20        |
| Above 250         | Rs. 6.50        |

- Final bill is displayed after submission.  

### 4. User Interface & Validation 
- Clean, user-friendly interface using **HTML & CSS**.  
- **JavaScript validation** to prevent empty inputs (username, password, units).  

### 5. Database Integration
- **MySQL** is used to store and retrieve user credentials.  
- PHP ensures proper database connection handling.  

---

## Example
**Input:** 275 units  
**Output:** Rs. 1460.00  

---

## How to Run
1. Install [XAMPP](https://www.apachefriends.org/).  
2. Place the project folder inside the `htdocs` directory.  
3. Start **Apache** and **MySQL** from XAMPP.  
4. Import the provided SQL file into your database.  
5. Visit in your browser:  
