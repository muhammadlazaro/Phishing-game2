<?php namespace App\Controllers;

use App\Models\QuestionModel;

class Game extends BaseController
{
    public function level1()
    {
        $model = new QuestionModel();
        $data['questions'] = $model->where('level', 1)->findAll();
        return view('game/level1', $data);
    }

    public function level1Submit()
    {
        $answers = $this->request->getPost('answers');
        $model = new QuestionModel();
        $score = 0;

        foreach ($answers as $id => $ans) {
            $q = $model->find($id);
            if ($q && strtoupper($q['correct_option']) === strtoupper($ans)) {
                $score++;
            }
        }

        session()->set('score_level1', $score); // ✅ Simpan skor level 1
        return view('game/level1_result', ['score' => $score]);
    }

    public function level2()
    {
        $model = new QuestionModel();
        $data['questions'] = $model->where('level', 2)->findAll();
        return view('game/level2', $data);
    }

    public function level2Submit()
    {
        $answers = $this->request->getPost('answers');
        $model = new QuestionModel();
        $score = 0;

        foreach ($answers as $id => $ans) {
            $q = $model->find($id);
            if ($q && strtoupper($q['correct_option']) === strtoupper($ans)) {
                $score++;
            }
        }

        session()->set('score_level2', $score); // ✅ Simpan skor level 2
        return view('game/level2_result', ['score' => $score]);
    }

    public function ending()
    {
        $score1 = session()->get('score_level1') ?? 0;
        $score2 = session()->get('score_level2') ?? 0;
        $total  = $score1 + $score2;

        return view('game/ending', [
            'score1' => $score1,
            'score2' => $score2,
            'total'  => $total
        ]);
    }
}
