<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'image',
        'feature_image',
        'creator_id',
        'status',
    ];

    public static function createOrUpdateBlog($request,$id = null)
    {
        Blog::updateOrcreate(['id'=>$id],[
            'title' => $request->title,
            'description' => $request->description,
            'image' =>Helper::fileUploadSingle($request->file('image'),'blog',isset($id) ? Blog::find($id)->image : null),
            'feature_image' => Helper::fileUpload($request->file('feature_image'),'feature',isset($id) ? Blog::find($id)->feature_image : []),
            'creator_id' => auth()->user()->id,
            'status' => $request->status,
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'creator_id');
    }

}
