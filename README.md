# playground

Just a basic Laravel project to test the FormRequest functionallity.

## Route List
<pre>
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
| Domain | Method    | URI               | Name          | Action                                      | Middleware   |
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
|        | GET|HEAD  | /                 |               | Closure                                     | web          |
|        | GET|HEAD  | api/user          |               | Closure                                     | api,auth:api |
|        | GET|HEAD  | books             | books.index   | App\Http\Controllers\BookController@index   | web          |
|        | POST      | books             | books.store   | App\Http\Controllers\BookController@store   | web          |
|        | GET|HEAD  | books/create      | books.create  | App\Http\Controllers\BookController@create  | web          |
|        | GET|HEAD  | books/{book}      | books.show    | App\Http\Controllers\BookController@show    | web          |
|        | PUT|PATCH | books/{book}      | books.update  | App\Http\Controllers\BookController@update  | web          |
|        | DELETE    | books/{book}      | books.destroy | App\Http\Controllers\BookController@destroy | web          |
|        | GET|HEAD  | books/{book}/edit | books.edit    | App\Http\Controllers\BookController@edit    | web          |
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
</pre>