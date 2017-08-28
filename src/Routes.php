<?php

Route::get('timezones/{timezone?}', 
  'ngiasim\timezones\TimezonesController@index');