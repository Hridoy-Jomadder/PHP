Question

Take necessary columns and primary key, foreign key according to your needs to complete both tasks.

Task 1: 

Write a SQL query to retrieve all the orders from the 'orders' table and their corresponding customer names from the 'customers' table. Use an INNER JOIN to combine the tables.

Task 2: .

Write a SQL query to retrieve all the products from the 'products' table and their corresponding category names from the 'categories' table. Use a LEFT JOIN to combine the tables and include all products, even if they don't have a category.

Answer:
Task 1:
/* For the 'orders' table:
 Primary key: order_id
Foreign key (referencing 'customer_id' from 'customers' table)

For the 'customers' table:
Primary key: customer_id */

SELECT a.order_id, c.customer_name
FROM orders a
INNER JOIN customers c ON a.customer_id = c.customer_id;

Task 2: 
/* For the 'products' table:
Primary key: product_id
Foreign key (referencing 'category_id' from 'categories' table)

For the 'categories' table:
Primary key: category_id */

SELECT a.product_id, a.product_name, c.category_name
FROM products a
LEFT JOIN categories c ON a.category_id = c.category_id;
