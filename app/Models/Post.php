<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected static $posts = [
        [
            'id' => 1,
            'title' => 'Első poszt',
            'description' => 'Ez az elso posztom, nagyon jo poszt!',
        ],
        [
            'id' => 2,
            'title' => 'Második poszt',
            'description' => 'Ez a masodik posztom, ez nem jobb mint az elso!',
        ],
    ];

    public static function getLength($description)
    {
        return strlen($description);
    }

    public static function getPost($id)
    {
        foreach (self::$posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }

    public static function getAllPosts()
    {
        return self::$posts;
    }
}
