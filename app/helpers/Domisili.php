<?php
namespace App\helpers;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class Domisili{
  public static function getProvinsi($id){
    $user = User::find($id);
    $province_client = Http::withHeaders([
        'key' => '05fb707215b778a76401b6996bc53823'
    ])->get('https://api.rajaongkir.com/starter/province', [
      'id' => $user->provinsi
    ])->json();

    return $province_client['rajaongkir']['results']['province'];

  }

  public static function getKota($id){
    $user = User::find($id);
    $city_client = Http::withHeaders([
        'key' => '05fb707215b778a76401b6996bc53823'
    ])->get('https://api.rajaongkir.com/starter/city', [
      'id' => $user->kota
    ])->json();

    $city_name = $city_client['rajaongkir']['results']['type'] . ' ' . $city_client['rajaongkir']['results']['city_name'];

    return $city_name;

  }

  public static function getOngkir($id){
    $user = User::find($id);
    $ongkir_client = Http::withHeaders([
      'key' => '05fb707215b778a76401b6996bc53823'
  ])->post('https://api.rajaongkir.com/starter/cost', [
    'origin' => 154,
    'destination' => $user->kota,
    'weight' => 2000,
    'courier' => 'jne'
  ])->json();

  // dd($ongkir_client);
  
  $ongkir = $ongkir_client['rajaongkir']['results'][0]['costs'][1]['cost'][0];

  return $ongkir;

  }
}