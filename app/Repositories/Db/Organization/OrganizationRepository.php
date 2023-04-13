<?php

namespace App\Repositories\Db\Organization;

use App\Interfaces\OrganizationInterface;
use App\Models\Organization;

class OrganizationRepository implements OrganizationInterface
{

    protected $org;
    public function __construct(Organization $org)
    {
     $this->org = $org;
    }
    public function storeOrganization($data)
    {
        return $this->org->create([
            'name' => $data['name']
        ]);
    }
}
