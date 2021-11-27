<?php
namespace application\models;
use application\core\Model;

class News extends Model
{
    public function getNews($offset = 0){
        $params = [
            'var' => $offset,
        ];
        return $this->row('SELECT id, idate, title, announce FROM news ORDER BY idate DESC LIMIT 5 OFFSET :var ', $params);
    }

    public function countNews(){
        return $this->row('SELECT count(*) as count FROM news');
    }
}