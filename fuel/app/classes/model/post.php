<?php


namespace Model;

use Fuel\Core\DB;

class Post extends \Model
{

    public static function get_all()
    {
        // return DB::select('title','body')->from('posts')
        //     ->execute()->get('title');
        // return DB::query('SELECT * FROM posts Where id = 1')->execute()->get('body');
        return DB::query('SELECT * FROM posts')->execute()->as_array();
    }

    public static function insert($title, $body)
    {
        $query = DB::insert('posts');

        $query->set(array(
            'title' => $title,
            'body' => $body,
        ));

        $query->execute();
    }
}
