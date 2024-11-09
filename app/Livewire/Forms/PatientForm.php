<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PatientForm extends Form
{
  #[Validate('required')]
  public $name = '';

  #[Validate('email')]
  public $email = '';

  #[Validate('date|required')]
  public $date_of_birth = '';

  #[Validate('required')]
  public $phone_number = '';

  #[Validate('required')]
  public $gender = '';
}
