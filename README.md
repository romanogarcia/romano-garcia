## Steps

- [git clone https://github.com/romanogarcia/romano-garcia.git
- [cd romano-garcia
- [composer install
- [cp .env.example .env
- [configure your database
- [php artisan key:generate
- [php artisan migrate:fresh --seed
- [php artisan serve

## To register account
http://127.0.0.1:8000/api/register

Sample Post
$request->addPostParameter(array(
  'name' => 'John',
  'username' => 'john123',
  'password' => '12345678',
  'password_confirmation' => '12345678',
  'email' => 'test@test22.com2'
));

Response:
{
    "user": {
        "id": 6,
        "name": "Roman13",
        "username": "roman3",
        "email": "test@test22.com2",
        "email_verified_at": null,
        "created_at": "2023-02-14T09:57:36.000000Z",
        "updated_at": "2023-02-14T09:57:36.000000Z"
    },
    "token": "1|sr42oZTnhCsiTiJQUnh4df7kbWfimQ3fm6yY1GuR"
}

## To Login
http://127.0.0.1:8000/api/login

$request->addPostParameter(array(
  'username' => 'roman3',
  'password' => '1234563'
))

## To Get roles
http://127.0.0.1:8000/api/roles
- Add Bearer Token -> 1|sr42oZTnhCsiTiJQUnh4df7kbWfimQ3fm6yY1GuR

