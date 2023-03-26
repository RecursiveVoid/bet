<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public string $gameName;
    public Team $hostTeam;
    public Team $opponentTeam;
    public int $hostTeamScore;
    public int $opponentTeamScore;
    public int $hostTeamVote;
    public int $opponentTeamVote;
    public int $remainingTimeInMinutes;
    use HasFactory;
}
