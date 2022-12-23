<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\Real_Estate_Object;
use Illuminate\Database\Seeder;

// php artisan db:seed
// php artisan migrate:refresh # for refreshing the db
// php artisan migrate:refresh --seed # for reseeding and refreshing
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Justin',
            'email' => 'info@jklaassen.com'
        ]);


        # use the ListingFactory
        Listing::factory(16)->create([
            'user_id' => $user->id
        ]);


        # use the Real_Estate_ObjectFactory
        Real_Estate_Object::factory(9)->create([
            'user_id' => $user->id
        ]);

        // Listing::create(
        //     [
        //         'title' => 'Laravel Senior Developer',
        //         'tags' => 'laravel, javascript',
        //         'company' => 'A B C BV',
        //         'location' => 'Boston, MA',
        //         'email' => 'example@example.com',
        //         'website' => 'www.test.com',
        //         'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'
        //    ] );
        //     Listing::create([

        //         'title' => 'Laravel Senior Developer',
        //         'tags' => 'laravel, javascript',
        //         'company' => 'A B C BV',
        //         'location' => 'Boston, MA',
        //         'email' => 'example@example.com',
        //         'website' => 'www.test.com',
        //         'description' =>  'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?'
        //     ]);
        //     Listing::create(
        //     [
        //         'title' => 'Full Stack Engineer ',
        //         'tags' => 'laravel, vue',
        //         'company' => 'A B C BV',
        //         'location' => 'Boston, MA',
        //         'email' => 's@example.com',
        //         'website' => 'www.d.com',
        //         'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.'
        //     ]);
        //     Listing::create(
        //     [
        //         'title' => 'Laravel Senior Developer',
        //         'tags' => 'laravel, javascript',
        //         'company' => 'A B C BV',
        //         'location' => 'Boston, MA',
        //         'email' => 'example@example.com',
        //         'website' => 'www.test.com',
        //         'description' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.'
        //     ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
