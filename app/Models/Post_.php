<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Harry Potter",
            "slug" => "harry-potter",
            "author" => "Azriel",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos mollitia natus consequatur, perferendis officia enim rem obcaecati nisi officiis nihil est a? Aliquid ducimus ipsa aliquam distinctio ad. Voluptate vero voluptatibus eligendi repudiandae numquam quod commodi esse velit repellendus, temporibus, nam perferendis ab dolore corporis, minima odio alias doloribus. Eaque quisquam incidunt beatae nesciunt voluptates iste quo tenetur dolore natus doloribus, atque eum harum? Voluptatem iusto blanditiis, nostrum, natus, error harum eius impedit at doloremque corrupti quia veritatis quaerat aliquid?"
        ],
        [
            "title" => "Harry Potter 2",
            "slug" => "harry-potter-2",
            "author" => "Amiezal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolor aliquam at laborum repellendus pariatur, eligendi repellat eaque quia placeat! Dolorem, dignissimos dolorum nam non totam laboriosam illum libero consequuntur molestiae, deleniti voluptate, earum reprehenderit! Quos provident iusto voluptatem odio nam, unde tenetur in doloremque facilis rerum tempora sapiente eos natus aut vel neque quia corporis! Nesciunt a numquam iste! Ipsa commodi minus consectetur pariatur? Nisi deserunt ut est repellat earum minima nobis illum neque culpa. Placeat, aut quod eligendi ratione fugit sequi minus enim exercitationem repudiandae qui maxime magnam? Sequi magnam doloribus tenetur deserunt asperiores mollitia expedita voluptatum laborum?"
        ]
    ];

    public static function all()
    {
        // use this-> if non static
        // use self:: if static
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
