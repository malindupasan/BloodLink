<?php

/**
 * User model
 */

class Admin_News extends Model
{
    protected $table = "news";

    protected $allowedColumns = ['news_id', 'news_img', 'title', 'description', 'link', 'admin_id'];
   
}