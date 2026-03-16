Migration and Model for Testimonials

Created on 2025-10-11

Files added:
- app/Models/Testimonial.php  (Eloquent model)
- database/migrations/2025_10_11_120000_create_testimonials_table.php  (migration)

How to run:
1. Ensure your .env database is configured.
2. Run migrations:
   php artisan migrate

Model usage example:
use App\Models\Testimonial;

$testimonial = Testimonial::create([
    'name' => 'John Doe',
    'title' => 'Happy Client',
    'content' => 'Great work!',
    'image' => 'test.jpg',
    'status' => 1
]);
