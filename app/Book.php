<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Searchable;

    public $timestamps = false;

    /**
     * @var string Indexing class
     */
    protected $indexConfigurator = TutorialIndexConfigurator::class;

    /**
     * Set Searchable rules class
     *
     * @var array
     */
    protected $searchRules = [
        BookSearchRule::class
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
            'title' => [
                'type' => 'string',
                'analyzer' => 'english'
            ],
            'description' => [
                'type' => 'string',
                'analyzer' => 'english'
            ],
            'year' => [
                'type' => 'integer',
                'index' => 'not_analyzed'
            ],
            'author_id' => [
                'type' => 'integer',
                'index' => 'not_analyzed'
            ],
            'author_name' => [
                'type' => 'string',
                'analyzer' => 'english'
            ]
        ]
    ];

    /**
     * Each book belongs to one author
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * By default all model fields will be indexed
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        dd($this->author->name);

        $array['author_name'] = $this->author->name;

        return $array;
    }
}