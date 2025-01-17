<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignModel extends Model
{
    use HasFactory;
    const TYPE = [
        'REFERRAL' => 1,
        'SOCIAL' => 2,
        'CUSTOM' => 3,
    ];
    protected $table = 'campaign';
    protected $fillable = [
        'company_id',
        'title',
        'reward',
        'description',
        'expiry_date',
        'type',
        'image',
        'status',
    ];

    public function getTaskTypeAttribute()
    {
        $typeConst = array_flip(CampaignModel::TYPE);
        $type = $this->type;
        return ucfirst(strtolower($typeConst[$type]));
    }

    public function getTaskStatusAttribute()
    {
        $status = $this->status;
        $string = 'Active';
        if($status == 1){
            $string = 'Deactive';
        }
        return $string;
    }
}
