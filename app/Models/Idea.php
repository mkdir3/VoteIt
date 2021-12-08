<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory, Sluggable;

    const PAGINATION_COUNT = 10;

    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // An idea belongs to one and only one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // An idea has one and only one category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // An idea has one and only one status
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function getStatusClasses()
    {
        // This function was replaced by adding a column 'classes' in the status table
        // with the classes below
        // $allStatuses = [
        //     'Ouvert' => 'bg-gray-200',
        //     'En attente' => 'bg-purple text-white',
        //     'En cours' => 'bg-yellow text-white',
        //     'Validé' => 'bg-green text-white',
        //     'Fermé' => 'bg-red text-white',
        // ];

        // return $allStatuses[$this->status->name];

        // Variante moins déclarative
        // if ($this->status->name === 'Ouvert') {
        //     return 'bg-gray-200';
        // } elseif ($this->status->name === 'En attente') {
        //     return 'bg-purple text-white';
        // } elseif ($this->status->name === 'En cours') {
        //     return 'bg-yellow text-white';
        // } elseif ($this->status->name === 'Validé') {
        //     return 'bg-green text-white';
        // } elseif ($this->status->name === 'Fermé') {
        //     return 'bg-red text-white';
        // }

        // return 'bg-gray-200';
    }
}
