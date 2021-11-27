<?php
namespace application\models;
use application\core\Model;

class Views extends Model
{
    public function getText($id){
        $params = [
            'id' => $id,
        ];
        return $this->row('SELECT title, content FROM news WHERE id=:id ', $params);
    }
}