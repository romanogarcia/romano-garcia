## Steps

- git clone https://github.com/romanogarcia/romano-garcia.git
- cd romano-garcia
- composer install
- cp .env.example .env
- configure your database
- php artisan key:generate
- php artisan migrate:fresh --seed
- php artisan serve

## Use Postman to call api endpoint

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
        "id": 1,
        "name": "John",
        "username": "john123",
        "email": "test@test22.com2",
        "email_verified_at": null,
        "created_at": "2023-02-14T09:57:36.000000Z",
        "updated_at": "2023-02-14T09:57:36.000000Z"
    },
    "token": "1|sr42oZTnhCsiTiJQUnh4df7kbWfimQ3fm6yY1GuR"
}

## To Login
GET: http://127.0.0.1:8000/api/login

$request->addPostParameter(array(
  'username' => 'roman3',
  'password' => '1234563'
))

## To Get roles
GET: http://127.0.0.1:8000/api/roles
- Add Bearer Token -> 1|sr42oZTnhCsiTiJQUnh4df7kbWfimQ3fm6yY1GuR

## To create roles (use x-www-form encoded: key:name  value: HR, key:user_id value:2)
POST: http://127.0.0.1:8000/api/roles
- Add Bearer Token -> 1|sr42oZTnhCsiTiJQUnh4df7kbWfimQ3fm6yY1GuR

## OTHER ENDPOINTS
Update
PUT: http://127.0.0.1:8000/api/role/1

Delete
DELETE: http://127.0.0.1:8000/api/role/1

## FACILITY ENDPOINTS
List
GET: http://127.0.0.1:8000/api/facilities

POST: http://127.0.0.1:8000/api/facility

Update
PUT: http://127.0.0.1:8000/api/facility/1

Delete
DELETE: http://127.0.0.1:8000/api/facility/1

