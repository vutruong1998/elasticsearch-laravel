<?php

namespace App;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use ElasticquentTrait;
    //
    protected $fillable = [
        'title',
        'content'
    ];

    protected $mappingProperties = array(
        'title' => [
          'type' => 'text',
          'analyzer' => 'standard',
        ],
        'content' => [
          'type' => 'text',
          'analyzer' => 'standard',
        ],
    );
}
