Simple Warehouse Management System

## Features

- **Products Management**: Add, edit, delete, and list products.
- **Suppliers Management**: Add, edit, delete, and list suppliers.
- **Shop Owners Management**: Add, edit, delete, and list shop owners.
- **Orders Management**: Add and list orders.
- **Customer Ratings**: Customers can rate products.
- **Product Locations**: View product locations and their suppliers.

## Setup(Use Xampp for running)

1. **Clone the repository**:
    ```sh
    git clone <repository-url>
    ```

2. **Navigate to the htdocs directory in XAMPP**:
    - Paste the repository here

3. **Database Setup**:
    - Create a MySQL database in XAMPP
    - Import the SQL schema to set up the necessary tables.

4. **Configure Database Connection**:
    - Update the database connection details in [`includes/db_connect.php`](includes/db_connect.php).

## Usage

- **Home Page**: [index.php](index.php)
- **Navigation**: [pages/navigation.php](pages/navigation.php)
- **Add Product**: [pages/add_product.php](pages/add_product.php)
- **Edit Product**: [pages/edit_product.php](pages/edit_product.php)
- **Add Supplier**: [pages/add_supplier.php](pages/add_supplier.php)
- **Edit Supplier**: [pages/edit_supplier.php](pages/edit_supplier.php)
- **Add Shop Owner**: [pages/add_shop_owner.php](pages/add_shop_owner.php)
- **Edit Shop Owner**: [pages/edit_shop_owner.php](pages/edit_shop_owner.php)
- **Add Order**: [pages/add_order.php](pages/add_order.php)
- **View Products**: [pages/products.php](pages/products.php)
- **View Suppliers**: [pages/suppliers.php](pages/suppliers.php)
- **View Shop Owners**: [pages/shop_owners.php](pages/shop_owners.php)
- **View Orders**: [pages/orders.php](pages/orders.php)
- **Customer Rating**: [pages/customer.php](pages/customer.php)
- **Product Locations**: [pages/location.php](pages/location.php)
