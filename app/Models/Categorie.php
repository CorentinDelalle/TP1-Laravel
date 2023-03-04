<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
  use HasFactory;

  protected $table = 'categorie';

  public function selectCategorie($order = 'ASC')
  {
    $lang = session()->get('localeDB');
    return $this::select(
      'id',
      DB::raw("(case when name$lang is null then name else name$lang
      end) as name")
    )
      ->orderBy('name', $order)
      ->get();
  }



  //SELECT id, (case when category_fr is null then category else category_fr end) as category from categorys
}
