<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetCheckoutCardPaymentResponse implements JsonSerializable
{
    /**
     * Descrição na fatura
     * @required
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Parcelas
     * @required
     * @var \MundiAPILib\Models\GetCheckoutCardInstallmentOptionsResponse[] $installments public property
     */
    public $installments;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $statementDescriptor Initialization value for $this->statementDescriptor
     * @param array  $installments        Initialization value for $this->installments
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->statementDescriptor = func_get_arg(0);
            $this->installments        = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['statementDescriptor'] = $this->statementDescriptor;
        $json['installments']        = $this->installments;

        return $json;
    }
}
