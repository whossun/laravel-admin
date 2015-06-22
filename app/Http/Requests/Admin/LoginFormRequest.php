<?php

// +----------------------------------------------------------------------
// | date: 2015-06-22
// +----------------------------------------------------------------------
// | LoginFormRequest.php: 后端登录表单验证
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------


namespace App\Http\Requests\Admin;

use App\Http\Requests\Admin\BaseFormRequest AS BaseFormRequest;

class LoginFormRequest extends BaseFormRequest  {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'email' => ['required', 'unique:permissions,name'],
            'password' => []
		];
	}

}
