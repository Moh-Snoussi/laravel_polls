<?php

namespace App\Http\Controllers;

use App\Models\QuestionPolls;
use Illuminate\Contracts\View\View;

class QuestionsController extends Controller
{
	public function index(): View
	{
		return view('questions.index',
			['questions' => QuestionPolls::all()]);
	}
}
