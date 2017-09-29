<?php
class UsersController {
    public function index() {
        $users = App::get('database')->selectAll('users', 'User');
        return view('users', compact('users'));
    }
    public function store() {
        // Insert the user
        App::get('database')->insert('users', [
            'first_name' => $_POST['first_name']
        ]);       
        
        // Return a view
        return redirect('users');
    }
}