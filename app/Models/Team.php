<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    public string $teamName;
    public string $teamDescription;
    public int $winAmount = 0;
    public int $loseAmount = 0;

    public function getWinLoseRatio(): float {
        if ($this->loseAmount == 0) {
            return $this->winAmount;
        }
        return round($this-> winAmount / $this->loseAmount, 2);
    }

    use HasFactory;


}

