<?php
namespace App\Repositories;

use App\Models\ModalityPayement;

class ScolariteRepo
{
    
    public function update($id, $data)
    {
        return ModalityPayement::find($id)->update($data);
    }

    public function delete($id)
    {
        return ModalityPayement::destroy($id);
    }

    public function create($data)
    {
        return ModalityPayement::create($data);
    }

    
} 