<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //マスアサインメントの設定（ここに定義した変数のみ追加できる_セキュリティ対策）
    protected $fillable = ['title','body','published_at'];
}
