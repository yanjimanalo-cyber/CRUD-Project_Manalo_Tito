CREATE DATABASE db_inventory;

USE db_inventory;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    quantity INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);