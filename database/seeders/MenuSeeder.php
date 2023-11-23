<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'name' => 'Classic Margherita',
                'desc' => 'Savor the simplicity of our Classic Margherita, a perfect fusion of fresh tomatoes, melting mozzarella, and fresh basil on a crispy crust. An authentic Italian experience with every bite.',
                'category_id' => 1,
                'price' => 20 ,
                'image' => 'uploads/pizza/pizza1.png',
            ],
            [
                'name' => 'Gourmet Four Cheese',
                'desc' => 'Dive into the delight of cheese with our Gourmet Four Cheese pizza. An exquisite combination of mozzarella, gorgonzola, goat cheese, and parmesan, all melted to perfection on a base of homemade tomato sauce.',
                'category_id' => 1,
                'price' => 20 ,
                'image' => 'uploads/pizza/pizza2.png',
            ],
            [
                'name' => 'Mediterranean Vegetarian',
                'desc' => 'Let yourself be carried away by the Mediterranean flavors with our Mediterranean Vegetarian Pizza. Fresh vegetables, Kalamata olives, creamy feta, and a touch of olive oil on a golden crust. A light and delicious experience.',
                'category_id' => 1,
                'price' => 20 ,
                'image' => 'uploads/pizza/pizza3.png',
            ],
            [
                'name' => 'Barbecue Chicken Ranch',
                'desc' => 'Experience an explosion of flavors with our Barbecue Chicken Ranch Pizza. Tender grilled chicken, crispy bacon, red onion, all topped with a homemade barbecue sauce and a touch of our special ranch.',
                'category_id' => 1,
                'price' => 20 ,
                'image' => 'uploads/pizza/pizza4.png',
            ],
            [
                'name' => 'Supreme Pepperoni',
                'desc' => 'For meat lovers, our Supreme Pepperoni is a must-try. A generous layer of sliced pepperoni, ham, bacon, and salami, all covered with melting mozzarella on a spicy tomato sauce base.',
                'category_id' => 1,
                'price' => 20 ,
                'image' => 'uploads/pizza/pizza5.png',
            ],
            [
                'name' => 'Mediterranean Pesto',
                'desc' => 'Immerse yourself in a refined taste experience with our Mediterranean Pesto Pizza. Sweet cherry tomatoes, grilled chicken, fresh spinach, and a touch of creamy pesto on a light tomato sauce base.',
                'category_id' => 1,
                'price' => 20 ,
                'image' => 'uploads/pizza/pizza6.png',
            ],
            [
                'name' => 'Spaghetti Bolognese',
                'desc' => 'Indulge in the classic comfort of our Spaghetti Bolognese. Al dente spaghetti noodles generously coated in a rich, slow-cooked Bolognese sauce made with ground beef, tomatoes, onions, and a blend of savory herbs.',
                'category_id' => 2,
                'price' => 22 ,
                'image' => 'uploads/pasta/pasta1.png',
            ],
            [
                'name' => 'Creamy Alfredo Fettuccine',
                'desc' => 'Delight in the velvety richness of our Creamy Alfredo Fettuccine. Thick fettuccine noodles bathed in a luxurious Alfredo sauce made with cream, butter, and parmesan cheese, creating a smooth and satisfying pasta experience.',
                'category_id' => 2,
                'price' => 25 ,
                'image' => 'uploads/pasta/pasta2.png',
            ],
            [
                'name' => 'Pesto Penne with Sun-Dried Tomatoes',
                'desc' => 'Experience the vibrant flavors of our Pesto Penne with Sun-Dried Tomatoes. Penne pasta tossed in a basil pesto sauce, complemented by the sweetness of sun-dried tomatoes and a sprinkle of parmesan cheese.',
                'category_id' => 2,
                'price' => 22 ,
                'image' => 'uploads/pasta/pasta3.png',
            ],
            [
                'name' => 'Spicy Arrabbiata Linguine',
                'desc' => 'Ignite your taste buds with our Spicy Arrabbiata Linguine. Long linguine noodles smothered in a fiery Arrabbiata sauce featuring tomatoes, garlic, and red chili flakes for a bold and zesty pasta experience.',
                'category_id' => 2,
                'price' => 30 ,
                'image' => 'uploads/pasta/pasta4.png',
            ],
            [
                'name' => 'Lemon Garlic Shrimp Linguine',
                'desc' => 'Elevate your palate with our Lemon Garlic Shrimp Linguine. Tender linguine noodles combined with succulent shrimp, garlic, and a zesty lemon-infused white wine sauce for a refreshing and flavorful pasta dish.',
                'category_id' => 2,
                'price' => 30 ,
                'image' => 'uploads/pasta/pasta5.png',
            ],
            [
                'name' => 'Vegetarian Primavera',
                'desc' => 'Embrace the freshness of our Vegetarian Primavera. Colorful spiral-shaped fusilli pasta tossed with a medley of seasonal vegetables, olive oil, and a hint of garlic, creating a light and wholesome pasta option.',
                'category_id' => 2,
                'price' => 40 ,
                'image' => 'uploads/pasta/pasta6.png',
            ],
            [
                'name' => 'Classic Tiramisu',
                'category_id' => 3,
                'desc' => 'Indulge in the timeless elegance of our Classic Tiramisu. Layers of delicate ladyfingers soaked in espresso and layered with a velvety mascarpone cream, dusted with cocoa powder for a perfect balance of coffee and sweetness.',
                'price' => 40 ,
                'image' => 'uploads/dessert/dessert1.png',
            ],
            [
                'name' => 'Decadent Chocolate Fondant:',
                'category_id' => 3,
                'desc' => 'Immerse yourself in chocolate heaven with our Decadent Chocolate Fondant. A warm and gooey chocolate center enclosed in a moist chocolate cake, served with a scoop of vanilla ice cream for the ultimate chocolate lover delight.',
                'price' => 40 ,
                'image' => 'uploads/dessert/dessert2.png',
            ],
            [
                'name' => 'Fruit Tart Delight',
                'category_id' => 3,
                'desc' => 'Experience a burst of freshness with our Fruit Tart Delight. A buttery tart crust filled with a luscious pastry cream and adorned with a colorful array of fresh seasonal fruits, creating a visually stunning and delicious dessert.',
                'price' => 40 ,
                'image' => 'uploads/dessert/dessert3.png',
            ],
            [
                'name' => 'Creamy New York Cheesecake',
                'category_id' => 3,
                'desc' => 'Delight in the velvety texture of our Creamy New York Cheesecake. A thick and rich cream cheese filling on a graham cracker crust, topped with a choice of fruit compote or a drizzle of decadent chocolate.',
                'price' => 40 ,
                'image' => 'uploads/dessert/dessert4.png',
            ],
            [
                'name' => 'Classic Italian Cannoli',
                'category_id' => 3,
                'desc' => 'Transport yourself to Italy with our Classic Italian Cannoli. Crispy pastry shells filled with a sweet ricotta cheese filling, dotted with chocolate chips and pistachios, offering a delightful combination of textures and flavors.',
                'price' => 40 ,
                'image' => 'uploads/dessert/dessert5.png',
            ],
            [
                'name' => 'Lemon Blueberry Parfait',
                'category_id' => 3,
                'desc' => 'Refresh your palate with our Lemon Blueberry Parfait. Layers of zesty lemon curd, fluffy whipped cream, and a blueberry compote, creating a light and fruity dessert that"s both vibrant and satisfying.',
                'price' => 40 ,
                'image' => 'uploads/dessert/dessert6.png',
            ]
            ]);
    }
}
