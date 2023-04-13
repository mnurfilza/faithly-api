<?php

namespace App\Repositories\Db\Card;

use App\Interfaces\CardRepositoryInterface;
use App\Models\CardPayment;

class CardRepository implements CardRepositoryInterface
{
    protected  $card;
    public function __construct(CardPayment $card)
    {
        $this->card = $card;
    }
    public function storeCard($data)
    {

        return $this->card->create([
            'card_number'=> $data['card_number'],
            'exp_date' => $data['exp_date'],
            'code_verification' => $data['code_verification'],
            'status_id' => $data['status_id'],
            'user_detail_id' =>  $data['user_detail_id']
        ]);

    }

    public function updateCard($data =null, string $id)
    {
        $card = $this->card->find($id);

        $card->card_number = $data['card_number'];
        $card->exp_date =$data['exp_date'];
        $card->card_verification =  $data['card_verification'];
        $card->status_id= $data['status_id'];
        $card ->user_detail_id = $data['user_detail_id'];
        $card->save();
        return $card;
    }

    public function deleteCard($data)
    {

    }

    public function listCard($data)
    {
        $query = $this->card->query();
        print($data['user_detail_id']);
        $query->whereRaw('user_detail_id = ? ', $data['user_detail_id']);
        if ($data['search'] !== "") {
            $query->whereRaw("card_number LIKE '%". $data['search']."%'");
        }
        $query->orderBy($data['order_by'],$data['sort_by']);

        $result = $query->offset(($data['page']-1)*$data['perpage'])->limit($data['perpage'])->get();
        $total = $query->count();

        // TODO: Implement listCard() method.

        return [
            'data'=>$result,
            'total'=>$total,
        ];
    }

    public function detailCard($data)
    {
        return $this->card->find($data);
    }

    public function checkCard($data):bool
    {
        if ($this->card->where('card_number', '=',$data)->count() > 0) {
            return true;
        }
        return false;
    }
}
