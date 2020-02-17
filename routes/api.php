<?php

use Illuminate\Http\Request;

Route::post('/count', 'Api@getCount') -> middleware('auth:api');