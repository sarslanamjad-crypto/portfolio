# Dynamic Personal Portfolio Website

A fully dynamic, elegant, and modern personal portfolio website built with **Laravel**. It features a stunning frontend design and a powerful, custom-built Admin Panel that allows you to manage almost every aspect of your website without touching any code. 

Perfect for developers, freelancers, and creatives looking to showcase their work, services, and skills in a professional manner.

## 🚀 Features

### Frontend (User-Facing)
- **Modern & Responsive Design**: A beautiful, animated UI (adapted from a premium template) that works flawlessly on all devices.
- **Dynamic Content**: Services, Skills, Projects, Partners, and Personal info are fetched directly from the database.
- **Interactive Portfolio**: Filterable project gallery mapping your works by category.
- **Direct Communication Methods**:
  - **Contact Form**: Direct email notifications built with Laravel Mail whenever a viewer reaches out.
  - **WhatsApp Floating Button**: A fixed, pulsing UI element that directly opens a `wa.me` chat link, making client reach-out frictionless.
- **Smart Animations**: Smooth scrolling, parallax backgrounds, and engaging micro-animations.

### Backend (Admin Panel)
- **Secure Authentication**: Protected admin login area.
- **Site Settings Management**: Easily change your Hero titles, About descriptions, Profile pictures, and Contact information (Email/Phone/Address) from the dashboard.
- **Services Management**: Add, edit, and delete the services you offer. Includes FontAwesome icon support.
- **Skills Management**: Dynamically add your professional skills and their proficiency percentages natively to the frontend progress bars.
- **Projects (Portfolio) Management**: Upload project thumbnails, define categories, and manage project details.
- **Partners / Clients**: Showcase the companies or clients you have worked with.

## 🛠️ Tech Stack
- **Backend**: Laravel (PHP framework)
- **Frontend**: HTML5, CSS3, JavaScript, jQuery, Bootstrap
- **Database**: MySQL
- **Styling**: Custom CSS with FontAwesome integrations
- **Tooling**: Artisan, Composer

## ⚙️ Installation & Setup

To run this project locally, make sure you have PHP, Composer, and MySQL installed on your machine.

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/your-repository-name.git
   cd your-repository-name
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   Duplicate the `.env.example` file and rename it to `.env`:
   ```bash
   cp .env.example .env
   ```
   Set up your database credentials and application URL inside the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio_database
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations & Seeders**
   ```bash
   php artisan migrate --seed
   ```
   *(Ensure you have a seeder set up for the initial Admin user, or register manually if the route is open).*

6. **Link Storage (For Images)**
   ```bash
   php artisan storage:link
   ```

7. **Start the Development Server**
   ```bash
   php artisan serve
   ```
   Your application will be running at `http://localhost:8000`.

## 📧 Email Notifications Setup
The contact form uses Laravel Mail to send notifications. By default, it might be set to the `log` driver for local testing (saving emails to `storage/logs/laravel.log`). 

To receive actual emails, update your `.env` file with your SMTP credentials:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io # Or your provider (Gmail, Brevo, SendGrid)
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your_email@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## 📱 WhatsApp Configuration
The floating WhatsApp button maps to the phone number specified in the Admin Panel's Site Settings. Ensure your number is formatted correctly with the country code in the admin dashboard to enable perfect routing (e.g., `923225402571`).

## 🤝 Contributing
Contributions, issues, and feature requests are welcome! Feel free to check the issues page.

## 📝 License
This project is open-source and available under the [MIT License](LICENSE).

---
*Designed & Developed by Arslan Amjad*
