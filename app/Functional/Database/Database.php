<?php
namespace App\Functional\Database;


use App\Functional\Services\Create;
use App\Functional\Services\Destroy;
use App\Functional\Services\Edit;
use App\Functional\Services\Index;
use App\Functional\Services\Store;
use App\Functional\Services\Update;

class Database implements IDatabase{
    use Index,Create,Store,Edit,Update,Destroy;
}
