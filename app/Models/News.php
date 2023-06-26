<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
// use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory;
    //    use Sluggable;

    protected $fillable = ['title','description', 'image', 'head_title', 'head_description', 'head_keywords'];


    // /**
    //  * Return the sluggable configuration array for this model.
    //  *
    //  * @return array
    //  */
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }


    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('image')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('image')->store("images/{$folder}");           
        }
        return null;
    }

    public function getImage()
    {
        if (!$this->image) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->image}");
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }
}
