<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'phone' => 'required',
            'username' => 'required|min:5|max:100',
            'card_number' => 'required_if:payment_type,cc',
            'payment_amount' => 'required|min:2|max:100'
        ];
    }

    public function attributes()
    {
        return [
            'email.request' => 'Поле email должно быть заполнено',
            'phone.request' => 'Поле номер телефона должно быть заполнено',
            'username.request' => 'Поле Имя и фимилия должно быть заполнено',
            'card_numberail.request' => 'Поле номер карты должно быть заполнено',
            'payment_amount.request' => 'Поле сумма оплаты должно быть заполнено'
        ];
    }

    public function messages()
    {
        return [
            'email.request' => 'Поле email должно быть заполнено',
            'phone.request' => 'Поле номер телефона должно быть заполнено',
            'username.request' => 'Поле Имя и фимилия должно быть заполнено',
            'card_numberail.request' => 'Поле номер карты должно быть заполнено',
            'payment_amount.request' => 'Поле сумма оплаты должно быть заполнено'
        ];
    }
}
