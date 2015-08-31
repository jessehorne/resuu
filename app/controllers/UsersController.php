<?php

class UsersController extends BaseController {

  public function __construct() {
    $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('auth', array('only'=>array('getDashboard')));
  }

  protected $layout = "layouts.main";

  public function getRegister() {
    return View::make('users.register');
  }

  public function postEditresume() {
    $user = Auth::user();
    $user->resume = Input::get('resume');
    $user->save();

    return Redirect::to('/dashboard/edit')->with('message', 'Saved!');
  }

  public function postEdit() {
    $validator = Validator::make(Input::all(), User::$editRules);

    if($validator->passes()) {
      $user = Auth::user();
      $user->firstname = Input::get('firstname');
      $user->lastname = Input::get('lastname');
      $user->save();

      return Redirect::to('/dashboard/settings')->with('message', 'Saved!');
    } else {
      return Redirect::to('/dashboard/settings')->withErrors($validator)->withInput();
    }
  }

  public function postCreate() {
    $validator = Validator::make(Input::all(), User::$rules);

    if($validator->passes()) {
      // save user
      $user = new \User;
      $user->firstname = Input::get('firstname');
      $user->lastname = Input::get('lastname');
      $user->email = Input::get('email');
      $user->resume = "Welcome to " . $user->firstname . '\'s resume!';
      $user->link = Input::get('link');
      $user->account_type = Input::get('account_type');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      return Redirect::to('users/login')->with('message', 'Thank you for registering!');
    } else {
      // display errors
      return Redirect::to('users/register')->withErrors($validator)->withInput();
    }
  }

  public function getLogin() {
    return View::make('users.login');
  }

  public function postSignin() {
    if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
      return Redirect::to('/dashboard')->with('message', 'You are now logged in!');
    } else {
      return Redirect::to('users/login')
        ->with('message', 'Your username/password combination was incorrect')
        ->withInput();
    }
  }

  public function getLogout() {
    Auth::logout();
    return Redirect::to('users/login')->with('message', 'You were successfully logged out.');
  }

}

?>
