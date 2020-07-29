### The App

Yummy Pizza backend creates a database with two related tables, one for products and one that holds types of products. Using a single table would make things a lot
simpler but this is, I think, a common structure that is closer to a real project.

So the tables are structured in this way: PRODUCTS  table containes all the relevant information about the product and a product type id wich relates to PRODUCT_TYPES table 
where we have name of the type and its id. With this basic structure we can easily add new product types and update a product type as well as to which type a product belongs.

Endpoints for accessing data are 

/api/products

/api/product-types

The backend is fairly simple and it manages our database that is hosted on a server and can be accessed online so we can retrieve the data we need.
