<?php

/**
 * 2022-2022 [IoPay]
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    IoPay.
 * @copyright 2022-2022 IoPay.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 *
 */

require_once __DIR__ . '/../../vendor/autoload.php'; // Autoload files using Composer autoload

use IoPay\Customer\Customer;
use IoPay\Logger\Log;

$compradorId = "e7ae8a35b4454dd39b81bc590cabdab5";

/* Recuperando os dados do comprador */
$comprador  = new Customer();
$response   = $comprador->get($compradorId);

$logger = new Log();
$logger->log("---- Retorno da API ----");
$logger->log($response);