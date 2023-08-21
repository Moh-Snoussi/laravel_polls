<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChoicePolls extends Model
{
	protected $table = 'polls_choice';
	protected $fillable = [
		'question_id',
		'choice_text',
		'votes',
	];
	public function question(): BelongsTo
	{
		return $this->belongsTo( QuestionPolls::class );
	}
}
