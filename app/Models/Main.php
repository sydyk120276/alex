<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Main extends Model
{
    use HasFactory;

    protected $fillable = ['title_item', 'description', 'description_button', 'thumbnail', 'thumbnail2', 'thumbnail3'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
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
        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");           
        }
        return null;
    }

    public static function uploadThumbnail2(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail2')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail2')->store("images/{$folder}");           
        }
        return null;
    }
    public static function uploadThumbnail3(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail3')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail3')->store("images/{$folder}");           
        }
        return null;
    }

    public function getImage()
    {
        if (!$this->thumbnail) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->thumbnail}");
    }

    public function getThumbnail2()
    {
        if (!$this->thumbnail2) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->thumbnail2}");
    }
    public function getThumbnail3()
    {
        if (!$this->thumbnail3) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->thumbnail3}");
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }
}