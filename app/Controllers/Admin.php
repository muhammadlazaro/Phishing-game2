<?php
// Admin.php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\QuestionModel;

class Admin extends BaseController {
  public function index() {
    $users = (new UserModel())->findAll();
    $questions = (new QuestionModel())->findAll();
    return view('admin/dashboard', ['users' => $users, 'questions' => $questions]);
  }
}
