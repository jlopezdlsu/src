<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class SchedulerController extends Controller
{
  public function create(){
    $response = Http::withHeaders([
      'key' => 'e98a1a38d58f438eb58123843210405'
      ])->get('http://api.weatherapi.com/v1/current.json',[
        'q' => 'Manila',
      ]);

      $location = $response['location']['name'];

      $wind = $response['current']['temp_c'];

      $temp = $response['current']['temp_c'];

      $uv = $response['current']['uv'];

      $humidity = $response['current']['humidity'];

      $cloud = $response['current']['cloud'];

      DB::table('weather')->insert([
        'temperature' => $temp,
        'wind' => $wind,
        'location' => $location,
        'uv' => $uv,
        'humidity' => $humidity,
        'cloud' => $cloud,
      ]);

    }

  }
