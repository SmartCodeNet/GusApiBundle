<?php

namespace SmartCodeNet\GusApiBundle\Extension\Soap;

interface AdapterInterface
{
    public function login(string $userKey);

    public function logout(string $sid);

    public function search(string $sid, array $parameters);

    public function getFullData(string $sid, string $regon, string $reportType);

    public function getValue(string $sid, string $param);
}
