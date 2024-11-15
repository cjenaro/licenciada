<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class MeasurementForm extends Form
{
  // Define the form's properties
  public $body_mass;
  public $stretch_stature;
  public $sitting_height;
  public $arms_span;

  public $triceps;
  public $subscapular;
  public $biceps;
  public $iliac_crest;
  public $supraspinale;
  public $abdominal;
  public $thigh;
  public $calf;

  public $arm_relaxed;
  public $arm_flexed_contracted;
  public $waist;
  public $hips;
  public $thigh_middle;
  public $girth_calf;

  public $humerus;
  public $bi_styloid;
  public $femur;

  /**
   * Define the form's validation rules
   *
   * @return array
   */
  public function rules()
  {
    return [
      'body_mass' => 'nullable|numeric|min:0',
      'stretch_stature' => 'nullable|numeric|min:0',
      'sitting_height' => 'nullable|numeric|min:0',
      'arms_span' => 'nullable|numeric|min:0',

      'triceps' => 'nullable|numeric|min:0',
      'subscapular' => 'nullable|numeric|min:0',
      'biceps' => 'nullable|numeric|min:0',
      'iliac_crest' => 'nullable|numeric|min:0',
      'supraspinale' => 'nullable|numeric|min:0',
      'abdominal' => 'nullable|numeric|min:0',
      'thigh' => 'nullable|numeric|min:0',
      'calf' => 'nullable|numeric|min:0',

      'arm_relaxed' => 'nullable|numeric|min:0',
      'arm_flexed_contracted' => 'nullable|numeric|min:0',
      'waist' => 'nullable|numeric|min:0',
      'hips' => 'nullable|numeric|min:0',
      'thigh_middle' => 'nullable|numeric|min:0',
      'girth_calf' => 'nullable|numeric|min:0',

      'humerus' => 'nullable|numeric|min:0',
      'bi_styloid' => 'nullable|numeric|min:0',
      'femur' => 'nullable|numeric|min:0',
    ];
  }
}
