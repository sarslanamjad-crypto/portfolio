Migration and Model for Contacts

Created on 2025-10-11

Files added:
- app/Models/Contact.php  (Eloquent model)
- database/migrations/2025_10_11_130000_create_contacts_table.php  (migration)
- app/Http/Controllers/frontend/ContactController.php  (stores contact submissions)
- app/Http/Controllers/backend/AdminContactsController.php  (admin listing)
- resources/views/backend/contacts/index.blade.php  (admin list)
- resources/views/backend/contacts/show.blade.php   (admin view)

How to run:
1. Configure your .env DB settings.
2. Run migrations: php artisan migrate
3. (Optional) Seed some test data or submit the contact form from the frontend.

Front-end usage: POST to route named `contact.store` (POST /contact). The form should include `name`, `email`, optional `subject`, and `message`.

Admin: visit /admin/contacts after logging in as admin.
