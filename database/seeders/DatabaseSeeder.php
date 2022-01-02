<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
        
        $work= Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
        
        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, totam.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis delectus quaerat maxime nesciunt pariatur, et illo animi odio sequi ea accusamus, dicta quam fugit eos molestiae enim sapiente. Nihil, suscipit aut dolores in nemo sequi consequatur autem! Veritatis, aliquid molestias. Consequuntur perspiciatis, eaque iusto quia quaerat ea magni quod maxime ducimus eligendi harum fugiat nobis! Harum eaque fuga, totam nihil cupiditate corrupti molestiae obcaecati quos ipsam praesentium quo at consectetur blanditiis. Ex expedita nulla, odit sint dolorum perspiciatis quisquam vero magni, animi culpa obcaecati illo nam explicabo officiis id exercitationem amet. Aliquam, laboriosam magni, modi quae temporibus nostrum reiciendis sit nisi, illo impedit vel. Saepe qui sed tempore voluptas voluptate natus blanditiis aliquid earum explicabo quod obcaecati assumenda error vitae, culpa laborum quidem! Facere accusamus nostrum dolorem iste, ea minus voluptatibus corporis doloribus dolor. Consequatur quos numquam consequuntur rem perferendis nam laboriosam quisquam. Eaque nam harum repellendus molestias asperiores perferendis ratione corporis quia officia, inventore aliquam odio nesciunt perspiciatis praesentium, illum, soluta fuga non eveniet nobis nostrum dolores dicta. Atque nobis aliquid dolorem quas dolore, distinctio perspiciatis quidem ratione, doloremque vero amet unde. Voluptas quaerat, fugiat pariatur dolores cumque dolorum autem eum quo aliquam rem fuga doloremque tempore animi est.</p>',
        ]);
        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, totam.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis delectus quaerat maxime nesciunt pariatur, et illo animi odio sequi ea accusamus, dicta quam fugit eos molestiae enim sapiente. Nihil, suscipit aut dolores in nemo sequi consequatur autem! Veritatis, aliquid molestias. Consequuntur perspiciatis, eaque iusto quia quaerat ea magni quod maxime ducimus eligendi harum fugiat nobis! Harum eaque fuga, totam nihil cupiditate corrupti molestiae obcaecati quos ipsam praesentium quo at consectetur blanditiis. Ex expedita nulla, odit sint dolorum perspiciatis quisquam vero magni, animi culpa obcaecati illo nam explicabo officiis id exercitationem amet. Aliquam, laboriosam magni, modi quae temporibus nostrum reiciendis sit nisi, illo impedit vel. Saepe qui sed tempore voluptas voluptate natus blanditiis aliquid earum explicabo quod obcaecati assumenda error vitae, culpa laborum quidem! Facere accusamus nostrum dolorem iste, ea minus voluptatibus corporis doloribus dolor. Consequatur quos numquam consequuntur rem perferendis nam laboriosam quisquam. Eaque nam harum repellendus molestias asperiores perferendis ratione corporis quia officia, inventore aliquam odio nesciunt perspiciatis praesentium, illum, soluta fuga non eveniet nobis nostrum dolores dicta. Atque nobis aliquid dolorem quas dolore, distinctio perspiciatis quidem ratione, doloremque vero amet unde. Voluptas quaerat, fugiat pariatur dolores cumque dolorum autem eum quo aliquam rem fuga doloremque tempore animi est.</p>',
        ]);
    }
}
