<?php

namespace App\Http\Requests;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => ["required"],
            "body" => ["required"],
            "image" => ["mimes:jpg,bmp,png,jpeg"],
            "category" => ["required"]
        ];
    }

    public function saveArticle(Article $article) {
        $article->title = $this->title;
        $article->body = $this->body;
        $article->image = $this->saveFileAndGetPath() ?? $article->image;
        $article->category = $this->category;
        $article->save();        
    }

    private function saveFileAndGetPath()
    {
        return $this->has('image') ? $this->file('image')->store('images'): null;
    }

}
