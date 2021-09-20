<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Game extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'name',
            'description',
            'release_at'
        ];

        public function games()
        {
            return $this->belongsToMany(User::class)->withTimestamps();
        }

        public function categories()
        {
            return $this->belongsToMany(Category::class, 'categories_game');
        }
    }
?>