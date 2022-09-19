<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller {
  public function index() {
    $nama = 'risky kurniawan';

    $matkul = ['Web', 'AI', 'IoT', 'Logic'];
    return view('biodata', ['nama' => $nama, 'matkul' => $matkul]);
  }
}