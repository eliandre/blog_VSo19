<?php


namespace App;


class tags
{
    function index(){
        $this -> tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
    }

    function view(){
        $tag_id = $this -> params[0]; //get the tag id from url for example http://localhost/blog_VSo19/tags/2 - tag_id is 2
        $this -> posts = get_all('SELECT * FROM post_tags NATURAL JOIN post WHERE tag_id='.$tag_id);
    }

}