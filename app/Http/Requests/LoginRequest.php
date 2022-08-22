<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials()
    {
        $userName = $this->get('name');
        if ($this->isEmail($userName)) {
            return [
                'email' => $userName,
                'password' => $this->get('password')
            ];
        }
        return $this->only('name', 'password');
    }
    public function isEmail($value)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['name' => $value], ['name' => 'email'])->fails();
    }
}
