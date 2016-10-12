<?php
namespace common\models;

use Yii;
//use yii\base\Model;

class FileUpload extends Model
{
    public $file;
    
    public function rules() 
    {
        return [
            [['file'], 'file', 'extensions' => 'jpg']
        ];
    }
}
    
?>