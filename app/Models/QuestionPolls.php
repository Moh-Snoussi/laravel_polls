<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPolls extends Model
{

    protected $table = 'polls_question';

    protected $fillable = [
        'question_text',
        'pub_date'
    ];

    public function choices()
    {
        return $this->hasMany(ChoicePolls::class, 'question_id');
    }
}
