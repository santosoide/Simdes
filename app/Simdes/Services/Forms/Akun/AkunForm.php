<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 5/10/2014
 * Time: 18:17
 */

namespace Simdes\Services\Forms\Akun;


use Simdes\Services\Forms\AbstractForm;

/**
 * Class AkunForm
 *
 * @package Simdes\Services\Forms\Akun
 */
class AkunForm extends AbstractForm{
    /**
     * @var array
     */
    protected $rules = [
        'kode_rekening' => 'required',
        'akun'          => 'required'
    ];

    /**
     * @return array
     */
    public function getInputData(){
        return array_only($this->inputData,['kode_rekening','akun','organisasi_id','user_id']);
    }
}