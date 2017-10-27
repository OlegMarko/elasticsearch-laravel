<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use Searchable;

    public $timestamps = false;

    /**
     * @var string Indexing class
     */
    protected $indexConfigurator = TutorialIndexConfigurator::class;

    protected $searchRules = [
        //
    ];

    /**
     * Set analyzing rows
     *
     * @var array
     */
    protected $mapping = [
        'properties' => [
            'id' => [
                'type' => 'integer',
                'index' => 'not_analyzed'
            ],
            'name' => [
                'type' => 'string',
                'analyzer' => 'english'
            ]
        ]
    ];

    /**
     * Each author can write several books
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}