<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var string
     */
    private $image;

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public static function parentOrNotCategory($parent_id, $child_id){
        $categories = Category::where('parent_id',$parent_id)->where('id',$child_id)->get();
        if(!is_null($categories)){
            return true;
        }
        else{
            return false;
        }
    }
}
