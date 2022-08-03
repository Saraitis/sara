protected function validator(array $data)
{
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:191|unique:users',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
}
protected function create(array $data)
{
    return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
    'password' => bcrypt($data['password']),
    ]);
}