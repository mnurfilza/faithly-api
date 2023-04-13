<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface CardUsecaseInterface
{
    public function storeCardPayment(Request $request);
    public function updateCard(Request $request);
    public function deleteCard(Request $request);
    public function ListCard(Request $request);
    public function detailCard($id);

}
