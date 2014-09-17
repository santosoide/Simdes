<?php
    /**
     * Created by PhpStorm.
     * Email: edicyber@gmail.com
     * User: Edi Santoso
     * Date: 5/13/2014
     * Time: 13:15
     */

    namespace Simdes\Services\Forms\RPJMDesa;


    use Simdes\Services\Forms\AbstractForm;

    /**
     * Class VisiEditForm
     *
     * @package Simdes\Services\Forms\RPJMDesa
     */
    class VisiEditForm extends AbstractForm
    {
        /**
         * @var array
         */
        protected $rules = [
            'visi' => 'required'
        ];

        /**
         * @return array
         */
        public function getInputData()
        {
            return array_only($this->inputData, [
                'visi'
            ]);
        }

    }