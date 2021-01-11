<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employes";
    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "phone",
        "gender",
        "EmpNo",
        "active",
        "department_id",
        "city_id",
        "imgEmp"
    ];
        public function department(){
            //Table         Foreign key     Primary key
    return $this->belongsTo(Department::class, "department_id", "id");
  }
        public function city(){
            return $this->belongsTo(City::class);
    }
}
