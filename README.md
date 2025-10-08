# My Blog (Laravel Project)

## Project Description
A simple personal blog built using the Laravel framework.  
Users can create, view, edit, and delete blog posts with a clean Bootstrap interface.

## Features
- Create, view, edit, and delete posts
- Validation and success messages
- Responsive Bootstrap layout
- Sample data for testing

## Steps to Run the Project
1. Clone this repository:
   ```bash
   git clone https://github.com/adhamelsayed290/my-blog.git
   ```
2. install dependencies
   ```bash
   composer install
   ```
3. Copy the environment file and generate app key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Run migrations
   ```bash
   php artisan migrate
   ```
5. Import sample data
   ```bash
   mysql -u root -p my_blog  < database/sample_posts.sql
   ```
6. Run the server
   ```bash   
   php artisan serve
   ```

## Screenshots

### Home Page
![Home Page](screenshots/home.png)

### Create Post Page
![Create Post Page](screenshots/create.png)

### Show Post Page
![Show Post Page](screenshots/show.png)

### Edit Post Page
![Edit Post Page](screenshots/edit.png)

### create success Message
![Create Post Success](screenshots/create_mes.png)

### update success Message
![Update Post Success](screenshots/update_mes.png)

### delete success Message
![Delete Post Success](screenshots/delete_mes.png)

## License
This project is for educational purposes only.

