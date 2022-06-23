<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "tittle" => "Home",
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal Arif",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium molestiae a natus laboriosam odit explicabo beatae sunt numquam, ducimus nam. Pariatur laboriosam illo quasi, provident perspiciatis quod sapiente quibusdam eius, unde accusantium dignissimos. Error adipisci nulla eos quis eius, voluptatibus ullam porro nesciunt, saepe nostrum tempora mollitia impedit. Praesentium commodi adipisci, natus optio, nostrum nam culpa eum dolores distinctio eligendi cumque velit mollitia veritatis alias illo! Aperiam facilis consequatur eos. Deserunt quibusdam dolorem earum dignissimos placeat deleniti nihil adipisci autem."
        ],
    
        [
            "tittle" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Selia Farah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab soluta perspiciatis, rerum a repudiandae nam nobis quaerat in voluptate alias, eveniet voluptatum accusamus ex animi neque. Explicabo enim, illo rerum, nostrum facilis omnis expedita libero porro dignissimos quia repellendus ducimus, tenetur inventore voluptatibus quis sint dicta corrupti odio ab voluptate! Quis eius ducimus nihil enim quae ipsum ullam tempora, consequuntur molestiae necessitatibus ipsa dolore officia fuga maiores nam quam error repellat dolor possimus. Maxime laborum inventore praesentium ea aliquid nesciunt suscipit eius! Voluptates, sapiente aspernatur cupiditate inventore, nulla rerum a aperiam odit officia adipisci quidem nam explicabo harum laboriosam est."
        ],
    ];
    return view('posts', [
        "tittle" => "Post",
        "isiBlog" => "ini isi blog dari variabel",
        "posts" => $blog_posts
    ]);
});





Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Rizal Arif",
        "email" => "rizal.arif2001@gmail.com",
        "image" => "rizal.png"
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "tittle" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal Arif",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium molestiae a natus laboriosam odit explicabo beatae sunt numquam, ducimus nam. Pariatur laboriosam illo quasi, provident perspiciatis quod sapiente quibusdam eius, unde accusantium dignissimos. Error adipisci nulla eos quis eius, voluptatibus ullam porro nesciunt, saepe nostrum tempora mollitia impedit. Praesentium commodi adipisci, natus optio, nostrum nam culpa eum dolores distinctio eligendi cumque velit mollitia veritatis alias illo! Aperiam facilis consequatur eos. Deserunt quibusdam dolorem earum dignissimos placeat deleniti nihil adipisci autem."
        ],
    
        [
            "tittle" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Selia Farah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab soluta perspiciatis, rerum a repudiandae nam nobis quaerat in voluptate alias, eveniet voluptatum accusamus ex animi neque. Explicabo enim, illo rerum, nostrum facilis omnis expedita libero porro dignissimos quia repellendus ducimus, tenetur inventore voluptatibus quis sint dicta corrupti odio ab voluptate! Quis eius ducimus nihil enim quae ipsum ullam tempora, consequuntur molestiae necessitatibus ipsa dolore officia fuga maiores nam quam error repellat dolor possimus. Maxime laborum inventore praesentium ea aliquid nesciunt suscipit eius! Voluptates, sapiente aspernatur cupiditate inventore, nulla rerum a aperiam odit officia adipisci quidem nam explicabo harum laboriosam est."
        ],
    ];

    $new_post = []; 
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post,
    ]);
});
