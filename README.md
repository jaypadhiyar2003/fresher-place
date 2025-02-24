# Fresher Place

**Fresher Place** is a job posting platform designed for freshers, built using the **Laravel** framework during my learning journey on [Laracasts](https://laracasts.com/). This platform allows employers to register, post jobs, and manage job listings efficiently.

## 🌐 Live Demo
Check out the live site: [fresher-place.onrender.com](https://fresher-place.onrender.com)

## 📌 Features

1. **Employer Authentication**
   - Employer registration
   - Secure login and logout

2. **Job Management**
   - New job posting form
   - Job listing with featured and recent job categories

3. **Search Functionality**
   - Search for jobs based on job profiles and tags

## 📚 What I Learned

While building Fresher Place, I gained hands-on experience with the following concepts:

### 🛠️ Laravel Core Concepts
- **Introduction to Laravel**: Understanding the framework's structure and benefits.
- **Routing and Views**: Defining routes and rendering views.
- **Components**: Building reusable and dynamic components.
- **MVC Architecture**: Structuring the application for better maintainability.

### 📊 Database and ORM
- **Database Management**: Implementing migrations, seeders, and model factories.
- **Eloquent ORM**: Managing database relationships and optimizing queries.

### 🔒 Security and Middleware
- **Security Best Practices**: Input validation, CSRF protection, and secure coding.
- **Middleware**: Implementing request filtering and access control.
- **Authorization**: Role-based access control using Gates and Policies.

### 🔧 Advanced Features
- **Routing Wildcards**: Dynamic route handling.
- **Namespace and Autoloading**: Organizing code efficiently with autoloading.
- **Assets Bundling**: Optimizing assets using **Vite**.

### 🎨 Frontend
- **TailwindCSS Integration**: Modern and responsive UI design.

## 🧰 Tech Stack

- **Backend**: Laravel
- **Database**: SQLite
- **Frontend**: TailwindCSS
- **Deployment**: Docker + Render.com

## 🚀 Getting Started

### Prerequisites
Ensure you have the following installed:

- PHP (>= 8.x)
- Composer
- Docker & Docker Compose

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/fresher-place.git
   cd fresher-place
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Run migrations and seed the database:
   ```bash
   php artisan migrate --seed
   ```

5. Start the development server:
   ```bash
   php artisan serve
   ```

### Docker Setup (Optional)

1. Ensure Docker is running on your system.
2. Build and start the Docker container:
   ```bash
   docker-compose up -d
   ```

## 📈 Future Enhancements

- User authentication for job applicants
- Job application submission
- Email notifications for new job postings
- Admin panel for managing job listings

## 📄 License

This project is licensed under the **MIT License**.

---

### 💡 Contributions
Feel free to fork this repository and open a pull request if you want to contribute or enhance the platform!

---

🚀 Happy Coding!

