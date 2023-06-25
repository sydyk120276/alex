<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'logo', 'thumbnail', 'platform1', 'platform2'];

    public function tags() 
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

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
    public static function uploadLogo(Request $request, $image = null)
    {
        if ($request->hasFile('logo')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('logo')->store("images/{$folder}");           
        }
        return null;
    }
    public static function uploadPlatform1(Request $request, $image = null)
    {
        if ($request->hasFile('platform1')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('platform1')->store("images/{$folder}");           
        }
        return null;
    }
    public static function uploadPlatform2(Request $request, $image = null)
    {
        if ($request->hasFile('platform2')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('platform2')->store("images/{$folder}");           
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
    public function getLogo()
    {
        if (!$this->logo) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->logo}");
    }
    public function getPlatform1()
    {
        if (!$this->thumbnail) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform1}");
    }
    public function getPlatform2()
    {
        if (!$this->thumbnail) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform2}");
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }
}
