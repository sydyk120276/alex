<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'title_item', 'description', 'thumbnail', 'platform1', 'platform2', 'platform3', 'platform4', 'platform5', 'platform6'];

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
    public static function uploadPlatform3(Request $request, $image = null)
    {
        if ($request->hasFile('platform3')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('platform3')->store("images/{$folder}");           
        }
        return null;
    }
    public static function uploadPlatform4(Request $request, $image = null)
    {
        if ($request->hasFile('platform4')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('platform4')->store("images/{$folder}");           
        }
        return null;
    }
    public static function uploadPlatform5(Request $request, $image = null)
    {
        if ($request->hasFile('platform5')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('platform5')->store("images/{$folder}");           
        }
        return null;
    }
    public static function uploadPlatform6(Request $request, $image = null)
    {
        if ($request->hasFile('platform6')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('platform6')->store("images/{$folder}");           
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

    public function getPlatform1()
    {
        if (!$this->platform1) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform1}");
    }
    public function getPlatform2()
    {
        if (!$this->platform2) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform2}");
    }
    public function getPlatform3()
    {
        if (!$this->platform3) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform3}");
    }
    public function getPlatform4()
    {
        if (!$this->platform4) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform4 }");
    }
    public function getPlatform5()
    {
        if (!$this->platform5) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform5}");
    }
    public function getPlatform6()
    {
        if (!$this->platform6) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->platform6}");
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }
}
